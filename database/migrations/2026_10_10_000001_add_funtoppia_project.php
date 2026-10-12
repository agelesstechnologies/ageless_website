<?php

use Database\Seeders\FuntoppiaProjectSeeder;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        (new FuntoppiaProjectSeeder)->run();
    }

    public function down(): void
    {
        // Preserve project content and subsequent administrator edits.
    }
};
