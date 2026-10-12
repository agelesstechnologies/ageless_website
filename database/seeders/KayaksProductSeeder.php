<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class KayaksProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'kayaks'], [
            'name' => 'Kayaks',
            'category_key' => 'theme',
            'category' => 'Outdoor Theme Park',
            'image' => 'assets/img/products/kayaks.jpg',
            'short_description' => 'A paddle-powered water adventure for resorts, lakes, and outdoor leisure destinations.',
            'description' => 'Kayaks bring an engaging paddling experience to waterfront resorts, lakes, and outdoor leisure destinations. Guests can explore the water at their own pace while enjoying an active outdoor adventure. Discuss kayak selection, launch access, designated paddling areas, and guest safety arrangements with Ageless Entertainments to plan an experience suited to your venue.',
            'spec_badge' => 'Water Adventure',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
