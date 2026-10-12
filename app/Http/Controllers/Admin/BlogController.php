<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(20);
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $this->validated($request);
        $data['slug'] = $this->uniqueSlug($data['title']);

        if ($request->hasFile('image')) {
    $file = $request->file('image');
    $filename = $file->hashName();

    $uploadPath = public_path('storage/blogs');

    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0775, true);
    }

    $file->move($uploadPath, $filename);
    @copy($uploadPath . '/' . $filename, storage_path('app/public/blogs/' . $filename));
    $data['image'] = 'blogs/' . $filename;
}
        Blog::create($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog added successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function update(Request $request, Blog $blog)
    {
        $data = $this->validated($request);

        if ($blog->title !== $data['title']) {
            $data['slug'] = $this->uniqueSlug($data['title'], $blog->id);
        }

        if ($request->hasFile('image')) {
    $file = $request->file('image');
    $filename = $file->hashName();

    $uploadPath = public_path('storage/blogs');

    if (!file_exists($uploadPath)) {
        mkdir($uploadPath, 0775, true);
    }

    $file->move($uploadPath, $filename);
    @copy($uploadPath . '/' . $filename, storage_path('app/public/blogs/' . $filename));
    $data['image'] = 'blogs/' . $filename;
}

        $blog->update($data);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();

        return redirect()->route('admin.blogs.index')->with('success', 'Blog deleted successfully.');
    }

    private function validated(Request $request): array
    {
        return $request->validate([
            'title' => 'required|string|max:255',
            'excerpt' => 'nullable|string',
            'content' => 'required|string',
            'image' => 'nullable|image|max:4096',
            'status' => 'required|in:draft,published',
            'published_at' => 'nullable|date',
        ]);
    }

    private function uniqueSlug(string $title, ?int $ignoreId = null): string
    {
        $base = Str::slug($title) ?: 'blog';
        $slug = $base;
        $i = 2;

        while (
            Blog::where('slug', $slug)
                ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
                ->exists()
        ) {
            $slug = $base . '-' . $i++;
        }

        return $slug;
    }
}
