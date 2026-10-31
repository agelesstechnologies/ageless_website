<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        $row = DB::table('products')->where('slug', 'jaint-swing')->first();
        if (! $row) {
            return;
        }

        DB::table('products')->where('id', $row->id)->update([
            'slug' => 'giant-swing',
            'name' => str_replace('Jaint', 'Giant', $row->name),
            'short_description' => str_replace('Jaint', 'Giant', (string) $row->short_description),
            'description' => str_replace('Jaint', 'Giant', (string) $row->description),
        ]);
    }

    public function down(): void
    {
        // Keep the corrected spelling.
    }
};
