<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DinoParkProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'dino-park'], [
            'name' => 'Dino Park',
            'category_key' => 'theme',
            'category' => 'Outdoor Theme Park',
            'image' => 'assets/img/products/dino-park-1.jpg',
            'short_description' => 'An immersive prehistoric world with sculpted rock walls, fossil displays, and dramatic lighting.',
            'description' => 'Dino Park takes guests on a walk through a themed prehistoric world, with sculpted rock walls, life-size fossil skeleton displays, carved relief artwork, and atmospheric lighting. Ageless Entertainments can plan the theming, layout, and visitor flow to suit your park, mall, or resort.',
            'spec_badge' => 'Themed Experience',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
