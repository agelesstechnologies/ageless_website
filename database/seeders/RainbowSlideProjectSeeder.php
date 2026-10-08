<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class RainbowSlideProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::firstOrCreate(['slug' => 'rainbow-slide'], [
            'title' => 'Rainbow Slide',
            'category_key' => 'theme',
            'category' => 'Theme & Amusement Parks',
            'image' => 'assets/img/projects/rainbow-slide.jpeg',
            'short_description' => 'A colourful outdoor rainbow slide with sweeping lanes and a scenic seaside setting.',
            'description' => 'Rainbow Slide brings a vibrant splash of colour to the amusement park with a wide, multicoloured sliding surface. Set against a seaside backdrop, the attraction creates a striking focal point for the outdoor entertainment area.',
            'scope' => '',
            'specifications' => '',
            'sort_order' => (int) Project::max('sort_order') + 1,
            'status' => 1,
        ]);
    }
}
