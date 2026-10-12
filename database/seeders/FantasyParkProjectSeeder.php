<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class FantasyParkProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'fantasy-park'], [
            'title' => 'Fantasy Park',
            'category_key' => 'theme',
            'category' => 'Theme & Amusement Parks',
            'location' => 'Kerala',
            'image' => 'assets/img/projects/fantasy-park-wave-pool.webp',
            'short_description' => 'Fantasy Park is a lively water park with a wave pool, multi-level splash zones and colourful water slides for families to cool off and play together.',
            'description' => "Fantasy Park is a family water park built around fun, colour and refreshing play. A large wave pool with gentle rolling waves lets visitors of all ages splash, float and cool off, while a themed backdrop and bright slide tower overlook the water.\n\nA multi-level splash zone with twisting water slides, play decks and playful animal figures gives children and teenagers plenty to climb, slide and explore. The slides drop into shallow, safe landing pools, so every ride ends with a splash.\n\nSet among palm trees and green hills, the park combines water rides, shaded seating areas and open space, making it an easy full-day outing for friends and families.",
            'scope' => 'Wave pool, Multi-level water play structure, Water slides, Themed landscaping and visitor amenities',
            'specifications' => 'Format: Family water park | Attractions: Wave pool, splash zone and water slides | Setting: Open-air, surrounded by palms and hills | Audience: Families, children and groups',
            'sort_order' => (int) Project::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
