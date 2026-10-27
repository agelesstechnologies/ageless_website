<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        foreach (['products', 'projects'] as $table) {
            Schema::table($table, function (Blueprint $table) {
                $table->json('gallery')->nullable();
            });
        }

        // Move the photo sets that used to be hardcoded in views/models into the database
        // so they can be managed from the admin panel.
        $prefixes = ['rope-rider-ride' => 'rope-rider', 'dome-cinema360' => 'dome-cinema'];
        foreach (DB::table('products')->get(['id', 'slug']) as $product) {
            $prefix = $prefixes[$product->slug] ?? $product->slug;
            $files = glob(public_path('assets/img/products/'.$prefix.'-[0-9]*.*')) ?: [];
            natsort($files);
            $paths = array_map(fn ($f) => 'assets/img/products/'.basename($f), array_values($files));
            if ($product->slug === 'shooting-and-archery') {
                $paths = ['assets/img/products/shooting-and-archery-indoor.jpg', 'assets/img/products/shooting-and-archery-outdoor.jpg'];
            }
            if ($paths) {
                DB::table('products')->where('id', $product->id)->update(['gallery' => json_encode($paths)]);
            }
        }

        $p = fn (string ...$names) => array_map(fn ($n) => 'assets/img/projects/'.$n, $names);
        $indriya = $p('indriya-adventure-park.avif', 'indriya-adventure-park-entrance.jpg', 'indriya-sky-cycling.webp');
        $projects = [
            'funtoppia' => $p('funtoppia-arcade-games.jpg', 'funtoppia-multiplayer-games.jpg'),
            'seaview-park' => $p('seaview-park-houseboat.jpg', 'seaview-park-canal-wall.webp'),
            'dtpc-ernakulam-marine-drive' => $p('dtpc-cochin-logo.jpg'),
            'hilite-boulevard' => $p('hilite-boulevard-panorama.jpg', 'hilite-boulevard-aerial.jpg'),
            'misty-land-natural-park' => $p('misty-land-glass-skywalk.jpg', 'misty-land-garden-pool.jpg'),
            'grand-lemurian-park' => $p('grand-lemurian-park-aerial.jpg', 'grand-lemurian-park-pirate-ship.jpg'),
            'fantasy-park' => $p('fantasy-park-water-slides.jpg', 'fantasy-park-splash-zone.jpg'),
            'active-planet' => $p('active-planet-slide-tower.webp', 'active-planet-play-area.jpg'),
            'indriya-adventure-park' => $indriya,
            'indriya-adventure-park-entrance' => $indriya,
            'indriya-sky-cycling' => $indriya,
        ];
        foreach ($projects as $slug => $paths) {
            DB::table('projects')->where('slug', $slug)->update(['gallery' => json_encode($paths)]);
        }
    }

    public function down(): void
    {
        foreach (['products', 'projects'] as $table) {
            Schema::table($table, fn (Blueprint $t) => $t->dropColumn('gallery'));
        }
    }
};
