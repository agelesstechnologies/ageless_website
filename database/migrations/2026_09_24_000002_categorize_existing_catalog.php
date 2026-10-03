<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $categories = [
            'indoor-snow-park-design-installation' => ['indoor', 'Indoor FEC & Edutainment'],
            '12d-theatre-interactive-immersive-rooms' => ['cinema', 'Immersive Cinema & VR'],
            'flying-theatre-flight-simulator' => ['cinema', 'Immersive Cinema & VR'],
            '360-dome-cinema-planetarium' => ['cinema', 'Immersive Cinema & VR'],
            'rope-rider-adventure-circuits' => ['adventure', 'Adventure & Aerial Parks'],
            'traffic-park-vehicles-irido-ev' => ['indoor', 'Indoor FEC & Edutainment'],
        ];
        foreach ($categories as $slug => [$key, $label]) {
            DB::table('products')->where('slug', $slug)->whereNull('category')->update(['category_key' => $key, 'category' => $label]);
        }
        foreach (['Immersive Cinema' => 'cinema', 'Adventure & Aerial' => 'adventure', 'Indoor FEC' => 'indoor'] as $label => $key) {
            DB::table('projects')->where('category', $label)->where('category_key', 'theme')->update(['category_key' => $key]);
        }
    }

    public function down(): void
    {
        // Preserve administrator-managed categories when rolling back.
    }
};
