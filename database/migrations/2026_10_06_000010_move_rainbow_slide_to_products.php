<?php

use Database\Seeders\RainbowSlideProductSeeder;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::transaction(function () {
            (new RainbowSlideProductSeeder)->run();
            DB::table('projects')->where('slug', 'rainbow-slide')->delete();
        });
    }

    public function down(): void
    {
        // Preserve catalog content and subsequent administrator edits.
    }
};
