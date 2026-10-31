<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use \App\Models\Concerns\HasCatalogImage;

    protected $fillable = [
        'category_key', 'category', 'spec_badge', 'features',
        'name',
        'slug',
        'image',
        'short_description',
        'description',
        'sort_order',
        'status',
        'gallery',
        'seo_title', 'seo_description',
    ];

    protected $casts = ['gallery' => 'array'];

    public function getGalleryImagesAttribute(): array
    {
        // The admin's main image must lead every frontend product gallery.
        return array_values(array_unique(array_merge([$this->image_url], $this->gallery_urls)));
    }
}
