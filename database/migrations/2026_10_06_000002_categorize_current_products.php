<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $categories = [
            'outdoor' => ['Outdoor Theme Parks', ['amusement-park', 'dome-tents']],
            'adventure' => ['Adventure & Aerial Parks', ['rope-rider', 'hanging-bridges', 'glass-bridge', 'sky-cycle', 'roller-coaster-zipline', 'rope-courses', 'zipline', 'net-games']],
            'cinema' => ['Immersive Cinema & VR', ['flying-cinema', 'dome-cinema360', 'planetarium', '12d-theater', 'arcade-vr-solutions']],
            'indoor' => ['Indoor FEC & Edutainment', ['snow-park', 'traffic-park-vehicles', 'trampoline-park', 'inflatable-park', 'horror-house', 'mirror-maze']],
        ];

        foreach ($categories as $key => [$label, $slugs]) {
            DB::table('products')
                ->whereIn('slug', $slugs)
                ->where('category_key', 'outdoor')
                ->where(function ($query) {
                    $query->whereNull('category')->orWhere('category', '');
                })
                ->update(['category_key' => $key, 'category' => $label]);
        }
    }

    public function down(): void
    {
        // Keep catalog classifications and subsequent administrator edits.
    }
};
