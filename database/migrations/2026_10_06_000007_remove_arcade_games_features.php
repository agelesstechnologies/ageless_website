<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Product::where('slug', 'arcade-games')->update(['features' => '']);
    }

    public function down(): void
    {
        // Preserve subsequent administrator edits.
    }
};
