<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Fills in any missing Open Graph / Twitter card tags (and canonical) on public HTML pages,
 * using the page's own <title>, meta description and canonical URL. Tags a page already
 * defines are never overridden.
 */
class SocialMeta
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $type = (string) $response->headers->get('Content-Type');
        if (! $request->isMethod('GET') || $response->getStatusCode() !== 200
            || ! str_contains($type, 'text/html') || $request->is('admin', 'admin/*')) {
            return $response;
        }

        $html = $response->getContent();
        if (! is_string($html) || ! preg_match('/<head\b[^>]*>(.*?)<\/head>/is', $html, $head)) {
            return $response;
        }
        $head = $head[1];

        $has = fn (string $re) => (bool) preg_match($re, $head);
        $grab = function (string $re) use ($head) {
            return preg_match($re, $head, $m) ? html_entity_decode(trim($m[1]), ENT_QUOTES) : null;
        };

        $title = $grab('/<title[^>]*>(.*?)<\/title>/is');
        $description = $grab('/<meta\s+name="description"\s+content="([^"]*)"/i');
        $canonical = $grab('/<link\s+rel="canonical"\s+href="([^"]*)"/i') ?: $request->url();
        $image = $grab('/<meta\s+property="og:image"\s+content="([^"]*)"/i') ?: asset('hero-park-ferriswheel.jpg');
        $ogTitle = $grab('/<meta\s+property="og:title"\s+content="([^"]*)"/i') ?: $title;
        $ogDescription = $grab('/<meta\s+property="og:description"\s+content="([^"]*)"/i') ?: $description;

        $tags = [];
        $add = function (string $attr, string $name, ?string $value, string $re) use (&$tags, $has) {
            if ($value !== null && $value !== '' && ! $has($re)) {
                $tags[] = '<meta ' . $attr . '="' . $name . '" content="' . e($value) . '">';
            }
        };

        if (! $has('/<link\s+rel="canonical"/i')) {
            $tags[] = '<link rel="canonical" href="' . e($canonical) . '">';
        }
        $add('property', 'og:type', 'website', '/property="og:type"/i');
        $add('property', 'og:site_name', 'Ageless Entertainments', '/property="og:site_name"/i');
        $add('property', 'og:url', $canonical, '/property="og:url"/i');
        $add('property', 'og:title', $title, '/property="og:title"/i');
        $add('property', 'og:description', $description, '/property="og:description"/i');
        $add('property', 'og:image', $image, '/property="og:image"/i');
        $add('name', 'twitter:card', 'summary_large_image', '/name="twitter:card"/i');
        $add('name', 'twitter:title', $ogTitle, '/name="twitter:title"/i');
        $add('name', 'twitter:description', $ogDescription, '/name="twitter:description"/i');
        $add('name', 'twitter:image', $image, '/name="twitter:image"/i');

        if ($tags) {
            $response->setContent(preg_replace('/<\/head>/i', "    " . implode("\n    ", $tags) . "\n</head>", $html, 1));
        }

        return $response;
    }
}
