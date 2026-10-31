<?php

require dirname(__DIR__).'/vendor/autoload.php';
$app = require dirname(__DIR__).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Product;

foreach (['snow-park', 'horror-house', 'traffic-park', 'net-games', 'arcade-games'] as $slug) {
    $product = new Product([
        'name' => $slug, 'slug' => $slug, 'category_key' => 'indoor',
        'image' => 'products/admin-upload.jpg',
        'gallery' => ['assets/img/old-gallery.jpg', 'products/admin-upload.jpg'],
    ]);
    $images = $product->gallery_images;
    if ($images !== [$product->image_url, asset('assets/img/old-gallery.jpg')]) {
        throw new RuntimeException('Main image must appear first without duplicates: '.$slug);
    }
    foreach (['products.card', 'products.show'] as $view) {
        $html = view($view, compact('product'))->render();
        $main = strpos($html, 'src="'.$product->image_url.'"');
        $old = strpos($html, 'src="'.asset('assets/img/old-gallery.jpg').'"');
        if ($main === false || $old === false || $main >= $old) {
            throw new RuntimeException('Uploaded image must lead '.$view.': '.$slug);
        }
    }
    $product->gallery = [];
    $html = view('products.card', compact('product'))->render();
    if (!str_contains($html, 'src="'.$product->image_url.'"')) {
        throw new RuntimeException('Hardcoded slideshow overrides upload: '.$slug);
    }
    echo "PASS: Main upload leads listing and details for $slug\n";
}
