<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class DigitalMuseumProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'digital-museum'], [
            'name' => 'Digital Museum',
            'category_key' => 'indoor',
            'category' => 'Indoor Entertainment',
            'image' => 'assets/img/products/digital-museum.jpg',
            'short_description' => 'Explore immersive themed exhibits that bring discovery and storytelling to life.',
            'description' => 'Create a memorable visitor journey with a Digital Museum combining themed environments, atmospheric lighting, and engaging visual storytelling. Designed for parks, malls, and family entertainment destinations, the experience invites guests of all ages to explore and discover.',
            'spec_badge' => 'Immersive Exhibits',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
