<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Blog extends Model
{
    protected $fillable = ['title','slug','excerpt','content','image','status','published_at'];
    protected $casts = ['published_at' => 'date'];
}
