<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class DtpcErnakulamProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'dtpc-ernakulam-marine-drive'], [
            'title' => 'DTPC Ernakulam, Marine Drive',
            'category_key' => 'theme',
            'category' => 'Tourism & Waterfront Projects',
            'location' => 'Marine Drive, Kochi, Kerala',
            'image' => 'assets/img/projects/dtpc-ernakulam-logo.jpg',
            'short_description' => 'The District Tourism Promotion Council (DTPC) Ernakulam manages boat cruise terminals, visitor centres and backwater tourism activities at Marine Drive, Kochi.',
            'description' => "The District Tourism Promotion Council (DTPC) Ernakulam manages boat cruise terminals, visitor centres and backwater tourism activities at Marine Drive, Kochi, one of the city's best-loved waterfront destinations.\n\nThe DTPC Boat Cruise Terminal is located near the Kettuvallom Bridge on the northern side of Marine Drive. It serves as a hub for backwater cruises and local ferry services, giving visitors an easy way to see Kochi from the water.\n\nThe DTPC Visitor Facilitation Centre provides tourist information, guidance and assistance to travellers visiting Kochi, helping them plan their days and find the best experiences in and around the city.\n\nMarine Drive is also a venue for regional water events and boat races, including the Indira Gandhi Ever Rolling Trophy and the Champions Boat League (CBL), which bring crowds to the waterfront each season.",
            'scope' => 'Waterfront tourism, Boat cruise terminal, Visitor facilitation centre, Water sports and boat race events',
            'specifications' => 'Client: DTPC Ernakulam | Location: Marine Drive, Kochi, Kerala | Facilities: Boat cruise terminal and visitor facilitation centre | Events: Boat races and water sports',
            'sort_order' => (int) Project::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
