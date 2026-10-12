<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class PaddleBoatsProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'paddle-boats'], [
            'name' => 'Paddle Boats',
            'category_key' => 'theme',
            'category' => 'Outdoor Theme Park',
            'image' => 'assets/img/products/paddle-boats-1.jpg',
            'short_description' => 'A relaxed water recreation experience for lakes, resorts, and family leisure destinations.',
            'description' => 'Paddle Boats bring a relaxed boating experience to lakes, resorts, and outdoor leisure destinations. Swan-themed pedal boats offer a playful way for families to enjoy the water, while paddle-powered recreational boats add variety to a waterfront attraction. Discuss boat selection, boarding arrangements, operating areas, and guest safety requirements with Ageless Entertainments to plan an experience suited to your venue.',
            'spec_badge' => 'Water Recreation',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
