<?php
namespace App\Http\Controllers;
use App\Models\Blog;
class BlogController extends Controller
{
    public function index(){ $blogs = Blog::where('status','published')->latest('published_at')->paginate(9); return view('blog.index', compact('blogs')); }
    public function show(string $slug){ $blog = Blog::where('slug',$slug)->where('status','published')->firstOrFail(); return view('blog.show', compact('blog')); }
}
