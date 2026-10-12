<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('products')->where('slug', 'softplay')->update(['features' => '']);
    }

    public function down(): void
    {
        DB::table('products')->where('slug', 'softplay')->update([
            'features' => "Ball pits and slides\nMulti-level play structures\nClimbing and activity zones\nIndoor family entertainment",
        ]);
    }
};
