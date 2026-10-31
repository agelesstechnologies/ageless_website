<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use App\Models\Project;

class SitemapController extends Controller
{
    private const STATIC_PATHS = [
        '/', '/about-company', '/products', '/projects', '/dome-cinema', '/flying-cinema',
        '/interactive-room', '/rope-rider', '/blog', '/contact', '/privacy-policy',
    ];

    public function __invoke()
    {
        $urls = collect(self::STATIC_PATHS)->map(fn ($path) => ['loc' => url($path), 'lastmod' => null]);

        $models = [
            ['/products/', Product::where('status', 1)],
            ['/projects/', Project::where('status', 1)],
            ['/blog/', Blog::where('status', 'published')],
        ];

        foreach ($models as [$prefix, $query]) {
            foreach ($query->get(['slug', 'updated_at']) as $item) {
                $urls->push(['loc' => url($prefix . $item->slug), 'lastmod' => $item->updated_at?->toAtomString()]);
            }
        }

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
