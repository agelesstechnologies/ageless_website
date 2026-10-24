<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $order = [
            'flying-cinema',
            'dome-cinema360',
            'rope-rider-ride',
            'interactive-immersive-zone',
            'net-games',
            'interactive-entertainments',
        ];

        foreach ($order as $position => $slug) {
            DB::table('products')->where('slug', $slug)->update(['sort_order' => $position]);
        }

        // Keep every other product after the featured six.
        DB::table('products')
            ->whereNotIn('slug', $order)
            ->where('sort_order', '<', count($order))
            ->update(['sort_order' => count($order)]);
    }

    public function down(): void
    {
        // Ordering is administrator-managed; nothing to revert.
    }
};
