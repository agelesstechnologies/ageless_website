<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class IndriyaAdventureProjectsSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Indriya Adventure Park',
                'slug' => 'indriya-adventure-park',
                'image' => 'assets/img/projects/indriya-adventure-park.avif',
                'short_description' => 'An outdoor adventure destination in Ernakulam, Kerala.',
                'description' => 'Indriya Adventure Park brings outdoor recreation and adventure experiences together in Ernakulam, Kerala.',
            ],
            [
                'title' => 'Indriya Adventure Park Entrance',
                'slug' => 'indriya-adventure-park-entrance',
                'image' => 'assets/img/projects/indriya-adventure-park-entrance.jpg',
                'short_description' => 'A colourful dolphin-themed entrance at Indriya Adventure Park.',
                'description' => 'The entrance at Indriya Adventure Park features dolphin artwork, an ocean-inspired signboard, and a bright structural frame overlooking the waterfront.',
            ],
            [
                'title' => 'Sky Cycling',
                'slug' => 'indriya-sky-cycling',
                'image' => 'assets/img/projects/indriya-sky-cycling.webp',
                'short_description' => 'An elevated cycling adventure above the water at Indriya Adventure Park.',
                'description' => 'Sky Cycling offers a suspended bicycle experience above the water. The attraction combines elevated cycling with views of the surrounding waterfront and greenery.',
            ],
        ];

        foreach ($projects as $project) {
            $record = Project::firstOrCreate(['slug' => $project['slug']], array_merge($project, [
                'category_key' => 'adventure',
                'category' => 'Adventure & Aerial Parks',
                'location' => 'Ernakulam, Kerala',
                'scope' => '',
                'specifications' => '',
                'sort_order' => (int) Project::max('sort_order') + 1,
                'status' => 1,
            ]));

            if (!$record->image) {
                $record->update(['image' => $project['image']]);
            }
        }
    }
}
