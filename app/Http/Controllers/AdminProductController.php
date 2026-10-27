<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class AdminProductController extends Controller
{
    use \App\Http\Controllers\Concerns\HandlesGallery;

    public function index()
    {
        $products = Product::orderBy('sort_order')->orderByDesc('id')->paginate(10);

        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        Product::create($this->validatedData($request));

        return redirect()->route('admin.products.index')->with('success', 'Product added successfully.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update($this->validatedData($request, $product));

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    private function validatedData(Request $request, ?Product $record = null): array
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'category_key' => 'required|in:outdoor,adventure,cinema,indoor',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|max:4096',
            'short_description' => 'nullable|string',
            'description' => 'nullable|string',
            'sort_order' => 'required|integer|min:0',
            'status' => 'required|boolean',
            'spec_badge' => 'nullable|string|max:255',
            'features' => 'nullable|string',
        ] + self::GALLERY_RULES);
        // Keep published URLs stable when the name changes.
        if (! $record) {
            $base = Str::slug($data['name']) ?: 'product';
            $slug = $base;
            for ($suffix = 2; Product::where('slug', $slug)->exists(); $suffix++) {
                $slug = $base.'-'.$suffix;
            }
            $data['slug'] = $slug;
        }
        unset($data['image'], $data['gallery_files'], $data['remove_gallery']);
        $data['gallery'] = $this->galleryFromRequest($request, 'products', $record?->gallery);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->hashName();
            $path = public_path('storage/products');
            File::ensureDirectoryExists($path);
            $file->move($path, $filename);
            $data['image'] = 'products/'.$filename;
        }

        return $data;
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
