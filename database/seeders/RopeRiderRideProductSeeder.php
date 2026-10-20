<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class RopeRiderRideProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'rope-rider-ride'], [
            'name' => 'Rope Rider',
            'category_key' => 'adventure',
            'category' => 'Adventure & Aerial Parks',
            'image' => 'assets/img/products/rope-rider-1.jpg',
            'short_description' => 'Not just a ride. The reason they visit.',
            'description' => 'A safe & family-friendly attraction designed for everyone. A crowd magnet that will keep attracting new customers.',
            'features' => "Top-tier safety features\nRiders control speed and direction\nTwo-directional movement\nKids, teens, & seniors alike enjoy this ride",
            'spec_badge' => 'Family-Friendly Aerial Ride',
            'sort_order' => 0,
            'status' => 1,
        ]);
    }
}
