<?php

use Database\Seeders\ArcadeGamesSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        (new ArcadeGamesSeeder)->run();
    }

    public function down(): void
    {
        // Preserve catalog content and subsequent administrator edits.
    }
};
