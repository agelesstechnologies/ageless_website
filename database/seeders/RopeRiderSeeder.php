<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class RopeRiderSeeder extends Seeder
{
    public function run(): void
    {
        $variants = [
            'rope-rider' => [
                'name' => 'High Rope Rider',
                'image' => 'assets/img/rope3.jpg',
                'short_description' => 'Elevated rope challenges with suspended bridges, balance obstacles, and harness-supported crossings for adventure parks.',
                'description' => 'High Rope Rider combines elevated rope crossings, suspended stepping elements, and balance challenges in an exciting aerial course. Routes and obstacle difficulty can be tailored to the available site and intended participants.\n\nCourse planning includes support structures, access platforms, appropriate safety systems, and operator supervision. Participant requirements and operating procedures are confirmed for the selected configuration.',
                'spec_badge' => 'Elevated Rope Adventure',
                'features' => '',
            ],
            'low-rope-rider' => [
                'name' => 'Low Rope Rider',
                'image' => 'assets/img/rope4.jpg',
                'short_description' => 'Lower-level rope crossings and balance activities designed for an approachable adventure experience.',
                'description' => 'Low Rope Rider introduces rope-course adventure through lower-level suspended crossings, stepping elements, and balance activities. The course supports confidence building and coordination, with obstacle difficulty tailored to the intended participants.\n\nLayouts can be planned for resorts, activity zones, and adventure parks. Platform heights, safety equipment, participant eligibility, and supervision requirements are confirmed during site planning.',
                'spec_badge' => 'Lower-Level Rope Adventure',
                'features' => '',
            ],
        ];

        foreach ($variants as $slug => $attributes) {
            $attributes['description'] = str_replace('\\n', "\n", $attributes['description']);
            $product = Product::firstOrNew(['slug' => $slug]);
            if (! $product->exists) {
                $product->sort_order = (int) Product::max('sort_order') + 1;
            }
            $product->fill($attributes + [
                'category_key' => 'adventure',
                'category' => 'Adventure & Rope Courses',
                'status' => 1,
            ])->save();
        }
    }
}
