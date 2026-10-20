<?php

use Database\Seeders\RopeRiderRideProductSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        (new RopeRiderRideProductSeeder)->run();
    }

    public function down(): void
    {
        // Preserve catalog content and subsequent administrator edits.
    }
};
