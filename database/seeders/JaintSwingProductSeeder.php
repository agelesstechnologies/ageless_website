<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class JaintSwingProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'jaint-swing'], [
            'name' => 'Jaint Swing',
            'category_key' => 'adventure',
            'category' => 'Adventure & Outdoor',
            'image' => 'assets/img/products/jaint-swing-1.jpeg',
            'short_description' => 'An outdoor giant swing attraction with a towering support frame and suspended riders soaring through an open-air arc.',
            'description' => 'Jaint Swing brings a dramatic aerial experience to outdoor adventure destinations. Riders are suspended beneath a tall support structure and swing through the open air, taking in views of the surrounding landscape. The large frame and sweeping swing movement create a striking focal point for an adventure park.',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
