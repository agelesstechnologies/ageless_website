<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class HiliteBoulevardProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'hilite-boulevard'], [
            'title' => 'HiLITE Boulevard',
            'category_key' => 'theme',
            'category' => 'Upcoming Project',
            'location' => 'Near CIFT Junction, Willingdon Island, Thoppumpady, Kochi, Kerala',
            'image' => 'assets/img/projects/hilite-boulevard-promenade.jpg',
            'short_description' => 'HiLITE Boulevard is an upcoming waterfront retail and leisure project by the HiLITE Group, located near the CIFT Junction on Willingdon Island, close to Thoppumpady in Kochi, Kerala.',
            'description' => "HiLITE Boulevard is an upcoming waterfront retail and leisure project by the HiLITE Group, located near the CIFT Junction on Willingdon Island, close to Thoppumpady in Kochi, Kerala.\n\nThe project is planned as a lively destination on the Kochi waterfront, bringing together shopping, dining and leisure experiences in one place for families, friends and visitors to the city. Its location on Willingdon Island, close to Thoppumpady, places it within easy reach of Kochi's main commercial and tourist areas.\n\nThe HiLITE Group is known for large retail and lifestyle destinations across Kerala, and HiLITE Boulevard continues that approach with a waterfront setting. Further details of the project, including attractions and opening plans, will be announced as development progresses.",
            'scope' => 'Waterfront retail and leisure destination, Family entertainment planning, Visitor experience design',
            'specifications' => 'Project stage: Upcoming | Developer: HiLITE Group | Location: Near CIFT Junction, Willingdon Island, Kochi | Format: Waterfront retail and leisure destination',
            'sort_order' => (int) Project::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
