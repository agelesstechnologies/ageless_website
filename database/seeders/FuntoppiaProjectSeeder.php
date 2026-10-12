<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class FuntoppiaProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'funtoppia'], [
            'title' => 'Funtoppia',
            'category_key' => 'indoor',
            'category' => 'Indoor Gaming & Family Entertainment',
            'location' => 'HiLITE Mall Boulevard, near Fort Kochi, Kochi, Kerala',
            'image' => 'assets/img/projects/funtoppia-gaming-zone.jpg',
            'short_description' => 'A planned indoor gaming destination in Kochi bringing together arcade games, dedicated gaming zones and multiplayer stations for friends and families.',
            'description' => "Funtoppia is a planned indoor entertainment destination at HiLITE Mall Boulevard, near Fort Kochi, Kochi. Designed for friends, families and gaming enthusiasts, the project brings a lively mix of gaming zones, arcade games and multiplayer stations together under one roof.\n\nGaming zones: Dedicated spaces for casual play and interactive gaming will let visitors explore different experiences at their own pace.\n\nArcade games: The planned arcade mix includes racing games, basketball challenges, rhythm games and classic video-game cabinets, offering quick rounds and friendly competition.\n\nMultiplayer stations: Shared gaming stations will support head-to-head matches and cooperative play, giving groups a place to team up and enjoy games together.\n\nFamily entertainment: The concept combines individual challenges with group activities for mall visits, weekend outings and social get-togethers. The final game selection and opening schedule will be announced as the project develops.",
            'scope' => 'Dedicated gaming zones, Arcade game area, Multiplayer gaming stations, Family and group entertainment',
            'specifications' => 'Project stage: Planned | Format: Indoor gaming and family entertainment | Attractions: Arcade games and interactive gaming zones | Group play: Competitive and cooperative multiplayer stations',
            'sort_order' => (int) Project::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
