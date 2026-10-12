<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class AlpineCoasterProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'alpine-coaster'], [
            'name' => 'Alpine Coaster',
            'category_key' => 'adventure',
            'category' => 'Adventure Park',
            'image' => 'assets/img/products/alpine-coaster.webp',
            'short_description' => 'An outdoor rail-guided coaster experience with winding turns and scenic surroundings for adventure parks and leisure destinations.',
            'description' => 'Alpine Coaster brings an exciting rail-guided ride to outdoor adventure parks and leisure destinations. Individual coaster carts follow a winding track through scenic surroundings, creating a memorable attraction that complements the landscape. Discuss terrain, track layout, boarding areas, and installation requirements with Ageless Entertainments to plan an experience suited to your venue.',
            'spec_badge' => 'Scenic Outdoor Ride',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
