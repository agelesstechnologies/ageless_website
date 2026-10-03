<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CatalogSeeder extends Seeder
{
    public function run(): void
    {
        DB::transaction(function () {
            foreach (['products' => Product::class, 'projects' => Project::class] as $type => $model) {
                $records = json_decode(File::get(database_path("data/$type.json")), true, 512, JSON_THROW_ON_ERROR);
                foreach ($records as $record) {
                    $name = $record[$type === 'products' ? 'name' : 'title'];
                    $record['slug'] = Str::slug($name);
                    $source = public_path($record['image']);
                    $image = "$type/catalog-".basename($record['image']);
                    $target = public_path("storage/$image");
                    File::ensureDirectoryExists(dirname($target));
                    if (! File::exists($target)) {
                        File::copy($source, $target);
                    }
                    $record['image'] = $image;
                    // Re-running this import must never overwrite admin edits.
                    $model::firstOrCreate(['slug' => $record['slug']], $record);
                }
            }
        });
    }
}
