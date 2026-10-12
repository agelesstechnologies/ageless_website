<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class MarineDriveExpressProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'marine-drive-express'], [
            'name' => 'Marine Drive Express',
            'category_key' => 'theme',
            'category' => 'Outdoor Theme Park',
            'image' => 'assets/img/products/marine-drive-express-1.jpeg',
            'short_description' => 'A colourful family train attraction inspired by the waterfront promenade at Marine Drive, Kochi.',
            'description' => 'Marine Drive Express brings a playful train experience to waterfront promenades, parks, and family entertainment destinations. A colourful locomotive and character-themed passenger carriages create a welcoming attraction for children and families. Discuss route layout, boarding areas, themed ticket kiosks, and installation requirements with Ageless Entertainments.',
            'features' => "Colourful Themed Locomotive\nCharacter-Themed Passenger Carriages\nFamily Train Experience",
            'sort_order' => (int) Product::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
