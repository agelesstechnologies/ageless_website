<?php

namespace App\Services;

use App\Models\{Blog, Faq, Product, Project};
use Illuminate\Support\Str;

class WebsiteChat
{
    public function answer(string $message): array
    {
        $context = $this->websiteAnswer($message);

        return match (config('chat.provider')) {
            'ollama' => app(OllamaChat::class)->answer($message, $context),
            'huggingface' => app(HuggingFaceChat::class)->answer($message, $context),
            default => $context + ['mode' => 'website'],
        };
    }

    private function websiteAnswer(string $message): array
    {
        $query = Str::lower(trim($message));
        if (preg_match('/^(hi|hello|hey|thanks|thank you)[!.\s]*$/i', $query)) {
            return ['answer' => 'Hi! I can help you explore Ageless products, projects, services, FAQs and contact information. What would you like to know?', 'sources' => []];
        }

        $tokens = $this->tokens($query);
        $documents = $this->documents();
        foreach (['product' => 'products', 'project' => 'projects', 'blog' => 'blog', 'faq' => 'faq'] as $token => $path) {
            if ($tokens === [$token]) {
                $items = array_values(array_filter($documents, fn ($item) => ($item['type'] ?? '') === $path));
                return [
                    'answer' => $items ? 'Explore our '.$path.":\n\n".implode("\n", array_column(array_slice($items, 0, 6), 'title'))."\n\nAsk me about any of these for more details, or browse the full collection below." : 'Visit our '.$path.' page for the latest information.',
                    'sources' => [['title' => 'Browse '.ucfirst($path), 'url' => url('/'.$path)]],
                ];
            }
        }
        if (in_array('contact', $tokens, true)) {
            $contact = collect($documents)->firstWhere('title', 'Contact');
            if ($contact) {
                return ['answer' => $contact['text'], 'sources' => [['title' => 'Contact Ageless', 'url' => $contact['url']]]];
            }
        }
        $matches = [];
        foreach ($documents as $document) {
            $title = $this->tokens($document['title']);
            $body = $this->tokens(($document['type'] ?? '').' '.$document['text']);
            $matched = count(array_intersect($tokens, array_unique(array_merge($title, $body))));
            if (!$tokens || $matched < max(1, ceil(count($tokens) * 0.5))) {
                continue;
            }
            $document['score'] = $matched + count(array_intersect($tokens, $title)) * 4;
            $matches[] = $document;
        }
        usort($matches, fn ($a, $b) => $b['score'] <=> $a['score']);
        $matches = array_slice($matches, 0, 3);
        if (!$matches) {
            return ['answer' => "I couldn't find a clear answer in the website content. Try a product name, a project, or a more specific question. For details that aren't published, please contact our team.", 'sources' => [['title' => 'Contact Ageless', 'url' => url('/contact')]]];
        }

        $best = $matches[0];
        $passages = preg_split('/(?<=[.!?])\s+|\n+/u', $best['text'], -1, PREG_SPLIT_NO_EMPTY);
        usort($passages, fn ($a, $b) => count(array_intersect($tokens, $this->tokens($b))) <=> count(array_intersect($tokens, $this->tokens($a))));
        return [
            'answer' => $best['title']."\n\n".Str::limit(implode("\n\n", array_slice($passages, 0, 3)), 800)."\n\nYou can read more on the linked pages below.",
            'sources' => array_map(fn ($item) => ['title' => $item['title'], 'url' => $item['url']], $matches),
        ];
    }

    private function tokens(string $text): array
    {
        $words = preg_split('/[^\pL\pN]+/u', Str::lower($text), -1, PREG_SPLIT_NO_EMPTY);
        $stop = explode(' ', 'a an the is are was were be do does can could would should i we you your me my our it its of on in at to for from and or with about what which who where when how tell please know give information details more website ageless');
        $aliases = ['pricing' => 'price', 'cost' => 'price', 'prices' => 'price', 'phone' => 'contact', 'email' => 'contact', 'address' => 'contact', 'location' => 'contact', 'reach' => 'contact'];
        return array_values(array_unique(array_map(fn ($word) => $aliases[$word] ?? (strlen($word) > 4 ? preg_replace('/s$/', '', $word) : $word), array_diff($words, $stop))));
    }

    public function documents(): array
    {
        $documents = [];
        foreach ([
            [Product::where('status', 1)->get(), 'name', 'products', ['category', 'spec_badge', 'features', 'short_description', 'description']],
            [Project::where('status', 1)->get(), 'title', 'projects', ['category', 'location', 'year', 'capacity', 'scope', 'specifications', 'short_description', 'description']],
            [Blog::where('status', 'published')->get(), 'title', 'blog', ['excerpt', 'content']],
            [Faq::where('status', 1)->get(), 'question', 'faq', ['answer']],
        ] as [$records, $titleField, $path, $fields]) {
            foreach ($records as $record) {
                $text = implode("\n", array_filter(array_map(fn ($field) => $record->$field, $fields)));
                $documents[] = ['title' => $record->$titleField, 'type' => $path, 'text' => $this->plainText($text), 'url' => url($path.($path === 'faq' ? '' : '/'.$record->slug))];
            }
        }

        // Only explicitly public pages are indexed; never admin views or enquiries.
        foreach (['home', 'about-company', 'contact', 'services', 'services-details', 'dome-cinema', 'flying-cinema', 'interactive-room', 'rope-rider', 'ai', 'team', 'team-details', 'testimonials', 'seo-strategy', 'project-details'] as $page) {
            $html = view('pages.'.$page)->render();
            $html = preg_replace('/<(head|script|style|header|footer|nav|form)\b[^>]*>.*?<\/\1>/is', '', $html);
            $html = preg_replace('/<!-- website-chat:start -->.*?<!-- website-chat:end -->/s', '', $html);
            if ($page === 'contact') {
                // Keep each contact card together so labels and their values stay paired.
                $dom = new \DOMDocument;
                @$dom->loadHTML('<?xml encoding="UTF-8">'.$html);
                $xpath = new \DOMXPath($dom);
                $cards = $xpath->query('//*[contains(concat(" ", normalize-space(@class), " "), " contact-item-card ") or contains(concat(" ", normalize-space(@class), " "), " contact-hours-pill ")]');
                if ($cards->length) {
                    $html = implode("\n\n", array_map(fn ($card) => $dom->saveHTML($card), iterator_to_array($cards)));
                }
            }
            $documents[] = ['title' => $page === 'home' ? 'Ageless Entertainments' : Str::title(str_replace('-', ' ', $page)), 'text' => $this->plainText($html), 'url' => url($page === 'home' ? '/' : '/'.$page)];
        }
        return $documents;
    }

    private function plainText(string $html): string
    {
        $html = preg_replace('/<(script|style)\b[^>]*>.*?<\/\1>/is', '', $html);
        $html = preg_replace('/<\/(p|div|li|h[1-6]|section)>|<br\s*\/?\s*>/i', "\n", $html);
        $text = html_entity_decode(strip_tags($html), ENT_QUOTES | ENT_HTML5, 'UTF-8');
        return trim(preg_replace('/\n\s*\n+/', "\n", preg_replace('/[^\S\n]+/u', ' ', $text)));
    }
}
