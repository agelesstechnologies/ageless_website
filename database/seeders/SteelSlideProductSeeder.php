<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class SteelSlideProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'steel-slide-hi-lite-mall-kozhikode'], [
            'name' => 'Steel slide Hi Lite Mall Kozhikode',
            'category_key' => 'indoor',
            'category' => 'Indoor FEC & Edutainment',
            'image' => 'assets/img/products/steel-slide-hi-lite-mall-kozhikode-1.jpeg',
            'short_description' => 'A striking multi-level steel spiral slide at Hi Lite Mall, Kozhikode, featuring polished metal curves and illuminated blue sections that bring the mall atrium to life.',
            'description' => 'The steel slide at Hi Lite Mall, Kozhikode, winds through the open atrium in a sweeping spiral, creating a distinctive centrepiece across multiple levels. Its polished steel tube and translucent blue sections combine a sleek architectural finish with a playful visual experience. Supported by a central column, the slide follows the curves of the surrounding balconies and adds a memorable attraction to the indoor entertainment space.',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
