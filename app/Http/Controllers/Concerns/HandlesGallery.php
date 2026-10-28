<?php

namespace App\Http\Controllers\Concerns;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait HandlesGallery
{
    public const GALLERY_RULES = [
        'gallery_files' => 'nullable|array|max:20',
        'gallery_files.*' => 'image|max:4096',
        'remove_gallery' => 'nullable|array',
        'remove_gallery.*' => 'string',
    ];

    /** Applies removals and new uploads to the current gallery and returns the new list. */
    protected function galleryFromRequest(Request $request, string $folder, ?array $current = null): array
    {
        $gallery = array_values(array_diff($current ?? [], (array) $request->input('remove_gallery', [])));

        foreach ((array) $request->file('gallery_files', []) as $file) {
            $path = public_path('storage/'.$folder);
            File::ensureDirectoryExists($path);
            $name = $file->hashName();
            $file->move($path, $name);
            @chmod($path.DIRECTORY_SEPARATOR.$name, 0644);
            $gallery[] = $folder.'/'.$name;
        }

        return $gallery;
    }
}
