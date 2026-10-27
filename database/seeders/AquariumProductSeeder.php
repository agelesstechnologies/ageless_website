<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class AquariumProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'aquarium'], [
            'name' => 'Aquarium',
            'category_key' => 'indoor',
            'category' => 'Indoor Entertainment',
            'image' => 'assets/img/products/aquarium-1.jpg',
            'short_description' => 'Discover a vibrant underwater world with captivating marine life and immersive aquarium displays.',
            'description' => 'Bring the underwater world closer with an aquarium attraction featuring marine life, themed displays, and atmospheric lighting. Create an engaging experience for visitors of all ages in parks, malls, and family entertainment destinations.',
            'spec_badge' => 'Marine Life Experience',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
