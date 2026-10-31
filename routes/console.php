<?php

use App\Models\Product;
use App\Models\Project;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;

Artisan::command('media:repair', function () {
    $hostingerPublic = dirname(base_path()).'/public_html';
    $publicRoot = is_file($hostingerPublic.'/index.php') ? $hostingerPublic : public_path();
    $fixed = 0;
    $missing = 0;
    foreach ([Product::class, Project::class] as $model) {
        foreach ($model::cursor() as $record) {
            $gallery = $record->gallery;
            // Older imports may contain JSON encoded more than once.
            for ($depth = 0; is_string($gallery) && $depth < 3; $depth++) {
                $decoded = json_decode($gallery, true);
                if (json_last_error() !== JSON_ERROR_NONE) {
                    $gallery = [$gallery];
                    break;
                }
                $gallery = $decoded;
            }
            $gallery = is_array($gallery) ? $gallery : [];
            $paths = array_filter(array_merge([$record->image], $gallery), fn ($path) => is_string($path) && $path !== '');
            foreach (array_unique($paths) as $relative) {
                // Only operate on catalog upload paths, never arbitrary database paths.
                if (!preg_match('~^(products|projects)/[a-zA-Z0-9_. -]+$~D', $relative)) continue;
                $target = $publicRoot.'/storage/'.$relative;
                if (!is_file($target)) {
                    foreach ([base_path('public/storage/'.$relative), storage_path('app/public/'.$relative)] as $source) {
                        if (is_file($source)) {
                            File::ensureDirectoryExists(dirname($target), 0755, true);
                            File::copy($source, $target);
                            break;
                        }
                    }
                }
                if (!is_file($target)) {
                    $this->warn('Missing file: '.$target.' - upload this image again in admin.');
                    $missing++;
                    continue;
                }
                $ok = chmod($publicRoot.'/storage', 0755);
                $ok = chmod(dirname($target), 0755) && $ok;
                $ok = chmod($target, 0644) && $ok;
                if (!$ok) {
                    $this->error('Could not repair permissions: '.$target);
                    continue;
                }
                $fixed++;
            }
        }
    }
    $this->info("Public directory: $publicRoot");
    $this->info("Repaired $fixed catalog image permissions; $missing missing files.");
})->purpose('Repair public catalog upload permissions and recover misplaced images without overwriting files');
