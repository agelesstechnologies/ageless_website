<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class GrandLemurianParkProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'grand-lemurian-park'], [
            'title' => 'Grand Lemurian Park',
            'category_key' => 'theme',
            'category' => 'Theme & Amusement Parks',
            'location' => 'Kanyakumari, Tamil Nadu',
            'image' => 'assets/img/projects/grand-lemurian-park-entrance.jpg',
            'short_description' => 'Grand Lemurian Park is a seaside amusement park in Kanyakumari, Tamil Nadu, with a mermaid-themed entrance, a rainbow slide, family rides and a pirate ship swing facing the ocean.',
            'description' => "Grand Lemurian Park is an amusement park in Kanyakumari, Tamil Nadu, set on the shoreline where visitors can enjoy rides with views of the sea. The park opens through a themed entrance gate with a traditional tiled roof, a friendly mermaid and coral and starfish decoration, giving the park a bright underwater-inspired identity.\n\nInside, a colourful family ride zone brings together a Ferris wheel, a spinning ride, a rainbow-striped slide and a white dome attraction, all surrounded by vibrant roofs and painted walkways. A pirate ship swing, built in a wooden ship design, rises beside the waves and offers riders a thrilling swing with the ocean as the backdrop.\n\nWith its mix of themed architecture, family rides and sea views, the park is designed to be a lively day-out destination for visitors and tourists to Kanyakumari.",
            'scope' => 'Themed entrance gate, Family amusement rides, Rainbow slide, Pirate ship swing, Dome attraction, Park landscaping and visitor facilities',
            'specifications' => 'Location: Kanyakumari, Tamil Nadu | Format: Seaside amusement park | Attractions: Pirate ship swing, Ferris wheel, rainbow slide and dome attraction | Audience: Families, children and tourists',
            'sort_order' => (int) Project::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
