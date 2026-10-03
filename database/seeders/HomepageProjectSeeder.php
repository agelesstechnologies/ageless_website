<?php

namespace Database\Seeders;

use App\Models\Project;
use DOMDocument;
use DOMXPath;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RuntimeException;

class HomepageProjectSeeder extends Seeder
{
    public function run(): void
    {
        // Extract the existing gallery instead of maintaining a second handwritten catalog.
        $document = new DOMDocument();
        $previous = libxml_use_internal_errors(true);
        try {
            $document->loadHTML('<?xml encoding="UTF-8">'.view('pages.home', ['faqs' => collect()])->render());
        } finally {
            libxml_clear_errors();
            libxml_use_internal_errors($previous);
        }
        $xpath = new DOMXPath($document);
        $cards = $xpath->query('//div[contains(concat(" ", normalize-space(@class), " "), " project-card-3d ")]');
        if ($cards->length === 0) {
            throw new RuntimeException('No homepage project cards found.');
        }
        $categories = [
            'toy' => 'theme', 'snow' => 'indoor', 'rope' => 'adventure',
            'roller' => 'theme', 'parkdesign' => 'theme', 'flying' => 'cinema',
            'dome' => 'cinema', '12d4d' => 'cinema',
        ];
        // This gallery card already has a fuller project record and a published URL.
        $aliases = ['munnar-botanical-garden-360-dome' => 'munnar-botanical-garden-dome-theatre'];
        $records = [];
        foreach ($cards as $index => $card) {
            $title = trim($xpath->evaluate('string(.//h3)', $card));
            $category = trim($xpath->evaluate('string(.//span[@class="category"])', $card));
            $key = $card->parentNode->getAttribute('data-category');
            $imageUrl = $xpath->evaluate('string(.//img/@src)', $card);
            $assetBase = rtrim(asset('assets/img'), '/').'/';
            if ($title === '' || !isset($categories[$key]) || !str_starts_with($imageUrl, $assetBase)) {
                throw new RuntimeException('Invalid homepage project card: '.$title);
            }
            $filename = rawurldecode(substr($imageUrl, strlen($assetBase)));
            if (basename($filename) !== $filename || !is_file(public_path('assets/img/'.$filename))) {
                throw new RuntimeException('Missing or invalid project image: '.$filename);
            }
            $slug = Str::slug($title);
            $records[] = [
                'title' => $title, 'slug' => $aliases[$slug] ?? $slug,
                'category' => $category, 'category_key' => $categories[$key],
                'image' => 'projects/homepage-'.$filename,
                'sort_order' => 100 + $index, 'status' => 1,
                '_source' => public_path('assets/img/'.$filename),
            ];
        }
        $created = 0;
        DB::transaction(function () use ($records, &$created) {
            foreach ($records as $record) {
                if (Project::where('slug', $record['slug'])->orWhere('title', $record['title'])->exists()) {
                    continue;
                }
                $target = public_path('storage/'.$record['image']);
                File::ensureDirectoryExists(dirname($target));
                if (!File::exists($target) && !File::copy($record['_source'], $target)) {
                    throw new RuntimeException('Could not copy project image.');
                }
                unset($record['_source']);
                Project::create($record);
                $created++;
            }
        });
        $this->command?->info('Gallery cards: '.count($records).'; imported: '.$created.'; already present: '.(count($records) - $created).'.');
    }
}
