<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::transaction(function () {
            DB::table('products')->where('slug', '!=', 'rope-rider-ride')->increment('sort_order');
            DB::table('products')->where('slug', 'rope-rider-ride')->update(['sort_order' => 0]);
        });
    }

    public function down(): void
    {
        // Preserve subsequent administrator ordering changes.
    }
};
