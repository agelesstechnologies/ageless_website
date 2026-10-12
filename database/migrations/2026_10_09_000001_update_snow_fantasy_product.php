<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('products')->where('slug', 'snow-park')->update([
            'name' => 'Snow Fantasy',
            'image' => 'assets/img/snow1.jpeg',
        ]);
    }

    public function down(): void
    {
        DB::table('products')->where('slug', 'snow-park')->update([
            'name' => 'Snow park',
            'image' => null,
        ]);
    }
};
