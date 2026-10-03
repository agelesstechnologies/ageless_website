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
    ];
}
