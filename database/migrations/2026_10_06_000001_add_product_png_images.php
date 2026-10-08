<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    private const SLUGS = [
        'hanging-bridges', 'sky-cycle', 'roller-coaster-zipline',
        'rope-courses', 'inflatable-park', 'zipline', 'mirror-maze',
    ];

    public function up(): void
    {
        foreach (self::SLUGS as $slug) {
            DB::table('products')->where('slug', $slug)->whereNull('image')->update([
                'image' => "assets/img/products/$slug.png",
            ]);
        }
    }

    public function down(): void
    {
        foreach (self::SLUGS as $slug) {
            DB::table('products')->where('slug', $slug)
                ->where('image', "assets/img/products/$slug.png")
                ->update(['image' => null]);
        }
    }
};
