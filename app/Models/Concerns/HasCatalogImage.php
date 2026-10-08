<?php

namespace App\Models\Concerns;

trait HasCatalogImage
{
    public function getImageUrlAttribute(): string
    {
        // Refresh bundled catalog photography while preserving later admin uploads.
        $replacements = [
            'products/catalog-rope1.jpg' => 'Zipline10.jpg',
            'products/catalog-adventure.png' => 'Munnar Net park.png',
            'products/catalog-dome1.jpg' => '1920x1080.jpg',
            'products/dome-cinema-system.jpg' => '1920x1080.jpg',
            'projects/catalog-rope1.jpg' => 'Zipline10.jpg',
            'projects/catalog-dome1.jpg' => 'WhatsApp Image 2026-07-01 at 12.14.08 PM.jpeg',
            'projects/munnar-dome-project.jpg' => 'WhatsApp Image 2026-07-01 at 12.14.08 PM.jpeg',
        ];

        if (isset($replacements[$this->image])) {
            return asset('assets/img/'.rawurlencode($replacements[$this->image]));
        }

        if ($this->image && str_starts_with($this->image, 'assets/img/')) {
            return asset($this->image);
        }

        return $this->image
            ? asset('storage/'.$this->image)
            : asset('assets/img/roller1.jpg');
    }
}
