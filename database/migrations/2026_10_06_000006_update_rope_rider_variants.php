<?php

use Database\Seeders\RopeRiderSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        (new RopeRiderSeeder)->run();
    }

    public function down(): void
    {
        // Preserve catalog content and subsequent administrator edits.
    }
};
