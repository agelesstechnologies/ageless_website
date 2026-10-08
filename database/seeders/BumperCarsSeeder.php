<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class BumperCarsSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'bumper-cars'], [
            'name' => 'Bumper Cars',
            'category_key' => 'indoor',
            'category' => 'Indoor FEC & Family Rides',
            'image' => 'assets/img/products/bumper-cars.png',
            'short_description' => 'Bring classic dodgem fun to your venue with colourful electric bumper cars and a dedicated arena planned for family entertainment.',
            'description' => "Bumper Cars is a classic amusement attraction where riders steer electric cars around a shared arena, enjoying playful turns and gentle bumper-to-bumper contact. Colourful car bodies and wraparound bumpers create an engaging ride experience for family entertainment centres, malls, amusement parks, and resorts. The image is an illustrative concept; final vehicle appearance depends on the selected model.\n\nVehicle options can include battery-operated models, single or twin seating, themed body designs, and decorative lighting. Power systems, controls, restraints, and operating settings are confirmed for the chosen equipment. Rider age, height, and supervision requirements follow the manufacturer's operating guidance.\n\nA dedicated arena is planned with a suitable level floor, perimeter barriers, controlled entry and exit, and clear space for boarding and operator supervision. Fleet size and ride sessions are tailored to the available area and visitor flow. Battery charging and equipment storage are included in planning where applicable.\n\nOur team can discuss car selection, arena layout, installation requirements, operator guidance, and maintenance planning. Dimensions, capacity, power requirements, delivery timelines, and pricing are confirmed after reviewing your site and preferred configuration.",
            'spec_badge' => 'Classic Dodgem Fun',
            'features' => '',
            'sort_order' => max(102, (int) Product::max('sort_order') + 1),
            'status' => 1,
        ]);
    }
}
