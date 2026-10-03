<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Faq extends Model
{
    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->latest()->orderByDesc('id');
    }

    protected $fillable = [
        'question',
        'answer',
        'sort_order',
        'status',
        'image',
    ];
}
