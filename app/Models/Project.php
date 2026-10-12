<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use \App\Models\Concerns\HasCatalogImage;

    protected $fillable = [
        'category_key', 'location', 'year', 'capacity', 'scope', 'specifications', 'sort_order', 'status',
        'title',
        'slug',
        'category',
        'image',
        'short_description',
        'description',
    ];
    public function getGalleryImagesAttribute(): array
    {
        if ($this->slug === 'funtoppia') {
            return [
                $this->image_url,
                asset('assets/img/projects/funtoppia-arcade-games.jpg'),
                asset('assets/img/projects/funtoppia-multiplayer-games.jpg'),
            ];
        }

        if ($this->slug === 'seaview-park') {
            return [
                $this->image_url,
                asset('assets/img/projects/seaview-park-houseboat.jpg'),
                asset('assets/img/projects/seaview-park-canal-wall.webp'),
            ];
        }

        if ($this->slug === 'dtpc-ernakulam-marine-drive') {
            return [
                $this->image_url,
                asset('assets/img/projects/dtpc-cochin-logo.jpg'),
            ];
        }

        if ($this->slug === 'hilite-boulevard') {
            return [
                $this->image_url,
                asset('assets/img/projects/hilite-boulevard-panorama.jpg'),
                asset('assets/img/projects/hilite-boulevard-aerial.jpg'),
            ];
        }

        if ($this->slug === 'misty-land-natural-park') {
            return [
                $this->image_url,
                asset('assets/img/projects/misty-land-glass-skywalk.jpg'),
                asset('assets/img/projects/misty-land-garden-pool.jpg'),
            ];
        }

        if ($this->slug === 'grand-lemurian-park') {
            return [
                $this->image_url,
                asset('assets/img/projects/grand-lemurian-park-aerial.jpg'),
                asset('assets/img/projects/grand-lemurian-park-pirate-ship.jpg'),
            ];
        }

        if ($this->slug === 'fantasy-park') {
            return [
                $this->image_url,
                asset('assets/img/projects/fantasy-park-water-slides.jpg'),
                asset('assets/img/projects/fantasy-park-splash-zone.jpg'),
            ];
        }

        if ($this->slug === 'active-planet') {
            return [
                $this->image_url,
                asset('assets/img/projects/active-planet-slide-tower.webp'),
                asset('assets/img/projects/active-planet-play-area.jpg'),
            ];
        }

        // These three photographs document the same Indriya park.
        if (str_starts_with($this->slug ?? '', 'indriya-')) {
            $photos = [
                asset('assets/img/projects/indriya-adventure-park.avif'),
                asset('assets/img/projects/indriya-adventure-park-entrance.jpg'),
                asset('assets/img/projects/indriya-sky-cycling.webp'),
            ];
            return array_slice(array_values(array_unique(array_merge([$this->image_url], $photos))), 0, 3);
        }

        // Do not substitute photographs of an unrelated project.
        return array_fill(0, 3, $this->image_url);
    }
}
