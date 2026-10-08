<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class InteractiveEntertainmentsSeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'interactive-entertainments'], [
            'name' => 'Interactive Entertainments',
            'category_key' => 'indoor',
            'category' => 'Indoor FEC & Edutainment',
            'image' => 'assets/img/products/interactive-entertainments.jpeg',
            'short_description' => 'Turn floors and walls into immersive play spaces with interactive projection, motion-responsive games, and themed digital environments.',
            'description' => "Interactive Entertainments brings digital worlds to life through projected visuals and movement-based play. Guests can step into a virtual forest, explore animated environments, and take part in shared activities across immersive floors and walls. The supplied photograph shows the atmosphere of a themed projection experience.\n\nExperience options include interactive floor games, wall-based challenges, nature-themed discovery zones, and group play. Projection systems, motion sensors, game software, and coordinated sound can be configured to suit the chosen activities and venue. Final interactivity and content depend on the selected system.\n\nSuitable for indoor family entertainment centres, shopping malls, resorts, museums, and children's activity spaces. Themes and game difficulty can be planned around the intended audience, with layouts that support both individual exploration and group participation.\n\nProject planning considers usable floor area, ceiling height, ambient lighting, projection surfaces, power, equipment placement, and visitor circulation. Room size, capacity, equipment specifications, content options, and pricing are confirmed after a site assessment. Contact our team to discuss design, installation, and operator guidance.",
            'spec_badge' => 'Immersive Digital Play',
            'features' => "Interactive Floor & Wall Projection\nMotion-Responsive Game Options\nCustom Themed Digital Environments\nIndividual & Group Activities\nSite-Specific Layout Planning",
            'sort_order' => max(101, (int) Product::max('sort_order') + 1),
            'status' => 1,
        ]);
    }
}
