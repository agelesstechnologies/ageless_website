<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Product;
use App\Models\Project;

class FaqController extends Controller
{
    public function home()
    {
        $faqs = Faq::where('status', 1)->ordered()->get();
        $aboutProducts = Product::where('status', 1)->orderBy('sort_order')->orderBy('id')->get()
            ->filter(function ($product) {
                return $product->slug !== 'roller-coaster-zipline'
                    && str_starts_with($product->image ?? '', 'assets/img/products/')
                    && is_file(public_path($product->image));
            })->values();

        $projects = Project::where('status', 1)->orderBy('sort_order')->orderBy('id')->get();

        return view('pages.home', compact('faqs', 'aboutProducts', 'projects'));
    }

    public function index()
    {
        return redirect()->route('privacy-policy', [], 301);
    }
}
