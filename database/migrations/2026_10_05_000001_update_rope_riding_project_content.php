<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('projects')->where('slug', 'highland-adventure-rope-rider')->update([
            'title' => 'Rope Riding',
            'short_description' => 'Experience the thrill of rope riding with suspended trails, treetop crossings, and aerial adventure routes.',
            'description' => 'Rope riding brings aerial adventure to life with elevated routes, suspended crossings, and harness-supported rides. Designed for adventure parks, the attraction combines outdoor exploration with an exciting journey above the ground.',
        ]);
    }

    public function down(): void
    {
        DB::table('projects')->where('slug', 'highland-adventure-rope-rider')->update([
            'title' => 'Highland Adventure Park Aerial Rope Rider Course',
            'short_description' => 'Multi-stage aerial glider course and suspended treetop obstacle circuits across hilly terrain.',
            'description' => 'Engineered steel towers, continuous safety lifeline harnesses, high-speed cable trolleys, and comprehensive operator safety certification achieving 100% accident-free operation.',
        ]);
    }
};
