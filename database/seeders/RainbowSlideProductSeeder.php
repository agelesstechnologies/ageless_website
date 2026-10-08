<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class RainbowSlideProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'rainbow-slide'], [
            'name' => 'Rainbow Slide',
            'category_key' => 'theme',
            'category' => 'Theme & Amusement Parks',
            'image' => 'assets/img/projects/rainbow-slide.jpeg',
            'short_description' => 'A colourful outdoor rainbow slide with sweeping lanes and a scenic seaside setting.',
            'description' => 'Rainbow Slide brings a vibrant splash of colour to the amusement park with a wide, multicoloured sliding surface. Set against a seaside backdrop, the attraction creates a striking focal point for the outdoor entertainment area.',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
