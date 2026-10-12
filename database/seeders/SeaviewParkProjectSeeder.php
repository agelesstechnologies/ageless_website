<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class SeaviewParkProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'seaview-park'], [
            'title' => 'Seaview Park',
            'category_key' => 'theme',
            'category' => 'Theme & Amusement Parks',
            'location' => 'Alappuzha, Kerala',
            'image' => 'assets/img/projects/seaview-park-lake-walkway.jpg',
            'short_description' => 'Seaview Park is an amusement and recreational park in Alappuzha, Kerala, offering boating facilities and a swimming pool.',
            'description' => "Seaview Park is an amusement park in Alappuzha, Kerala, created as a relaxed recreational destination for families, friends and visitors exploring the backwaters.\n\nBoating is a highlight of the park. Visitors can take short rides on the water in round boats and pedal boats, with options for different group sizes, and enjoy the calm canal setting shaded by tall trees.\n\nA swimming pool gives guests a place to cool off, while colourful street-art murals along the canal wall add a cheerful, creative touch to the walkways. Together, the water activities and bright artwork make Seaview Park an easy and enjoyable stop on a trip to Alappuzha.",
            'scope' => 'Boating facilities, Swimming pool, Themed murals and landscaping, Visitor walkways and amenities',
            'specifications' => 'Location: Alappuzha, Kerala | Format: Recreational amusement park | Attractions: Round boats, pedal boats and swimming pool | Audience: Families, friends and tourists',
            'sort_order' => (int) Project::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
