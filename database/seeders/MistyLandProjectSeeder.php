<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class MistyLandProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'misty-land-natural-park'], [
            'title' => 'Misty Land Natural Park',
            'category_key' => 'adventure',
            'category' => 'Adventure & Aerial Parks',
            'location' => null,
            'image' => 'assets/img/projects/misty-land-hilltop.jpg',
            'short_description' => 'Misty Land Natural Park is a hilltop nature destination with a glass skywalk, sweeping views over green hills and a landscaped garden area for family outings.',
            'description' => "Misty Land Natural Park is a hilltop nature and leisure destination built on a green ridge, with misty hills and forested valleys stretching in every direction. The park is laid out along a winding path that connects its visitor buildings, landscaped gardens and viewing areas while keeping the natural character of the hill intact.\n\nA glass skywalk is the highlight of the park. Visitors can step out onto a transparent platform high above the treetops and look straight down to the valley below, with railings on all sides and open views of the surrounding hills. A white dome on the hillside adds a distinctive landmark to the park.\n\nBeside the main building, a landscaped courtyard with a lily pond, tropical plants, paved walkways and a children's play area gives families a relaxed place to rest and play between visits to the viewpoints. The park combines nature, adventure and leisure in one peaceful setting.",
            'scope' => 'Glass skywalk, Hilltop park layout and landscaping, Dome attraction, Children\'s play area, Visitor facilities',
            'specifications' => 'Format: Hilltop natural park | Attractions: Glass skywalk, viewpoints and children\'s play area | Setting: Green hills and forested valleys | Audience: Families, nature lovers and tourists',
            'sort_order' => (int) Project::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
