<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ActivePlanetProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'active-planet'], [
            'title' => 'Active Planet',
            'category_key' => 'theme',
            'category' => 'Theme & Amusement Parks',
            'location' => 'Manimala, Kuttiadi, Kerala',
            'image' => 'assets/img/projects/active-planet-entrance.webp',
            'short_description' => 'Active Planet at Manimala, Kuttiadi is a colourful family fun park with a rainbow entrance arch, a tall slide tower and a lively children\'s play area.',
            'description' => "Active Planet is a family entertainment park at Manimala, Kuttiadi, Kerala, designed to keep visitors of every age entertained from the moment they arrive. A bright rainbow-coloured entrance arch topped with the Active Planet name sets a cheerful, welcoming tone for the whole park.\n\nA tall slide tower with twisting yellow and red slides rises above the park, surrounded by green hills and coconut groves. Below it, a landscaped children's play area with colourful play structures, patterned play surfaces and bright umbrellas gives younger guests a safe and lively space to explore.\n\nThe park brings together fun, colour and open space so that friends and families can spend a relaxed day out in the Kerala countryside.",
            'scope' => 'Park theming and entrance design, Slide tower, Children\'s play area, Landscaping and visitor amenities',
            'specifications' => 'Location: Manimala, Kuttiadi, Kerala | Format: Family fun park | Attractions: Slide tower and children\'s play area | Audience: Families and children',
            'sort_order' => (int) Project::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
