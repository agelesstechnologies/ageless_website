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
}
