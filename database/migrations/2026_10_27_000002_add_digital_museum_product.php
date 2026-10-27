<?php

use Database\Seeders\DigitalMuseumProductSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        (new DigitalMuseumProductSeeder)->run();
    }

    public function down(): void
    {
        // Preserve catalog content and subsequent administrator edits.
    }
};
