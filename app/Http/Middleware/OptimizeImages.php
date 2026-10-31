<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpFoundation\Response;

/**
 * Adds width/height (prevents layout shift), loading="lazy" and decoding="async"
 * to <img> tags in public HTML pages. The first few images are left eager so
 * above-the-fold content still loads immediately.
 */
class OptimizeImages
{
    private const EAGER_IMAGES = 3;

    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $type = (string) $response->headers->get('Content-Type');
        if (! $request->isMethod('GET') || ! str_contains($type, 'text/html') || $request->is('admin', 'admin/*')) {
            return $response;
        }

        $html = $response->getContent();
        if (! is_string($html) || ! str_contains($html, '<img')) {
            return $response;
        }

        $count = 0;
        $html = preg_replace_callback('/<img\b[^>]*>/i', function ($m) use (&$count) {
            $tag = $m[0];
            $count++;

            if (! preg_match('/\swidth\s*=/i', $tag) && ! preg_match('/\sheight\s*=/i', $tag)
                && preg_match('/\ssrc\s*=\s*(["\'])(.*?)\1/i', $tag, $src)
                && ($size = $this->dimensions(html_entity_decode($src[2])))) {
                $tag = preg_replace('/<img\b/i', '<img width="' . $size[0] . '" height="' . $size[1] . '"', $tag, 1);
            }

            if (! preg_match('/\sloading\s*=/i', $tag) && $count > self::EAGER_IMAGES && ! preg_match('/\sfetchpriority\s*=/i', $tag)) {
                $tag = preg_replace('/<img\b/i', '<img loading="lazy"', $tag, 1);
            }

            if (! preg_match('/\sdecoding\s*=/i', $tag)) {
                $tag = preg_replace('/<img\b/i', '<img decoding="async"', $tag, 1);
            }

            return $tag;
        }, $html);

        // width/height attributes only reserve space: CSS height still wins, otherwise keep the aspect ratio.
        $html = preg_replace('/<\/head>/i', '<style>:where(img[width][height]){height:auto}</style></head>', $html, 1);

        $response->setContent($html);

        return $response;
    }

    /** @return array{0:int,1:int}|null */
    private function dimensions(string $src): ?array
    {
        $path = parse_url($src, PHP_URL_PATH);
        if (! $path || str_starts_with($src, 'data:') || (isset(parse_url($src)['host']) && parse_url($src)['host'] !== request()->getHost())) {
            return null;
        }

        $path = rawurldecode($path);
        $base = rtrim(request()->getBasePath(), '/');
        if ($base !== '' && str_starts_with($path, $base . '/')) {
            $path = substr($path, strlen($base));
        }

        $file = public_path(ltrim($path, '/'));
        if (! preg_match('/\.(png|jpe?g|gif|webp)$/i', $file) || str_contains($path, '..') || ! is_file($file)) {
            return null;
        }

        return Cache::remember('imgsize:' . md5($file) . ':' . filemtime($file), 86400, function () use ($file) {
            $info = @getimagesize($file);

            return $info && $info[0] > 0 && $info[1] > 0 ? [$info[0], $info[1]] : null;
        });
    }
}
