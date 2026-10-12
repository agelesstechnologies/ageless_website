<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('products')->where('slug', 'alpine-coaster')->update(['features' => '']);
    }

    public function down(): void
    {
        // Preserve subsequent administrator edits.
    }
};
