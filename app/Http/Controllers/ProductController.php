<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->orderBy('sort_order')->orderBy('id')->get();

        return view('products.index', compact('products'));
    }

    public function show($slug)
    {
        $product = Product::where('status', 1)->where('slug', $slug)->firstOrFail();

        return view('products.show', compact('product'));
    }
}
