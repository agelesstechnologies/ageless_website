<?php

use Database\Seeders\AquariumProductSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        (new AquariumProductSeeder)->run();
    }

    public function down(): void
    {
        // Preserve catalog content and subsequent administrator edits.
    }
};
