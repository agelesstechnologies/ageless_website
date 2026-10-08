<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ShootingAndArcherySeeder extends Seeder
{
    public function run(): void
    {
        Product::firstOrCreate(['slug' => 'shooting-and-archery'], [
            'name' => 'Shooting and Archery',
            'category_key' => 'adventure',
            'category' => 'Adventure & Aerial Parks',
            'image' => 'assets/img/products/shooting-and-archery-indoor.jpg',
            'short_description' => 'Bring focus, coordination, and friendly competition to your adventure park with dedicated shooting and archery target zones.',
            'description' => "Shooting and Archery adds a skill-based experience to adventure parks, resorts, and recreation centres. Dedicated target lanes encourage guests to practise concentration, hand-eye coordination, and accuracy through individual challenges or friendly group competitions.\n\nPlan indoor or outdoor archery lanes with clearly marked shooting positions, target boards, equipment storage, and a supervised participant briefing area. Recreational shooting options and the final equipment selection can be discussed during project planning.\n\nThe layout, lane count, target distances, protective barriers, and participant requirements are tailored to the available space and selected equipment. Contact our team to discuss site planning, installation, and operator guidance.",
            'spec_badge' => 'Skill-Based Adventure',
            'features' => "Indoor & Outdoor Layouts\nDedicated Target Lanes\nIndividual & Group Challenges",
            'sort_order' => 100,
            'status' => 1,
        ]);
    }
}
