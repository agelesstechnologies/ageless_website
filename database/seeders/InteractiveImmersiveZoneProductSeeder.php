<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class InteractiveImmersiveZoneProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'interactive-immersive-zone'], [
            'name' => 'Interactive & Immersive Zone',
            'category_key' => 'cinema',
            'category' => 'Immersive Cinema & VR',
            'image' => 'assets/img/products/interactive-immersive-zone-1.jpg',
            'gallery' => array_map(fn ($i) => "assets/img/products/interactive-immersive-zone-{$i}.jpg", [1, 2, 3, 4]),
            'short_description' => 'Immersive digital environments with interactive walls, responsive visuals, and engaging themed experiences.',
            'description' => 'Interactive & Immersive Zone brings digital worlds to life through responsive visuals and themed environments. Guests can explore interactive walls and immersive scenes that encourage movement, discovery, and shared play. Discuss content themes, interaction options, and space requirements for family entertainment centres, shopping malls, museums, and indoor attractions.',
            'features' => "Interactive Walls\nImmersive Visual Environments\nThemed Digital Experiences",
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
