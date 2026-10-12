<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class SoftplayProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'softplay'], [
            'name' => 'Softplay',
            'category_key' => 'indoor',
            'category' => 'Indoor Entertainment',
            'image' => 'assets/img/products/softplay.jpeg',
            'short_description' => 'Colourful indoor softplay areas with ball pits, slides, climbing zones, and multi-level play structures for children.',
            'description' => 'Softplay brings colourful, active play to indoor family entertainment spaces. Ball pits, slides, climbing zones, and interconnected play structures give children a variety of activities to explore. Discuss layouts, play elements, and space requirements for shopping malls, family entertainment centres, and dedicated indoor play venues.',
            'features' => '',
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
