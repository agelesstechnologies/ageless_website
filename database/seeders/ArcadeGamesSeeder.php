<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ArcadeGamesSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'arcade-games'], [
            'name' => 'Arcade Games',
            'category_key' => 'indoor',
            'category' => 'Indoor FEC & Gaming',
            'image' => 'assets/img/products/arcade-games.jpg',
            'short_description' => 'Create an exciting indoor gaming zone with arcade cabinets, racing simulators, sports challenges, and redemption game options for family entertainment venues.',
            'description' => "Arcade Games brings colourful, hands-on entertainment to family entertainment centres, shopping malls, resorts, and indoor amusement venues. Build a game zone around your audience and available space, with a mix of individual challenges and shared play. The illustration shows a concept layout; final cabinet designs depend on the selected equipment.\n\nGame options can include video arcade cabinets, racing simulators, basketball machines, air hockey, and ticket redemption games. Game titles, player capacity, payment systems, and prize arrangements are confirmed for the selected machines.\n\nLayout planning considers cabinet dimensions, power connections, player movement, spectator space, accessibility, and operator supervision. Equipment selection can be tailored to children, teenagers, and family groups, with an appropriate balance of skill, sports, and simulator experiences.\n\nContact our team to discuss game selection, floor planning, installation requirements, operator guidance, and maintenance planning. Equipment specifications, availability, delivery timelines, and pricing are confirmed after reviewing your venue and preferred configuration.",
            'spec_badge' => 'Indoor Gaming Zone',
            'features' => '',
            'sort_order' => max(103, (int) Product::max('sort_order') + 1),
            'status' => 1,
        ]);
    }
}
