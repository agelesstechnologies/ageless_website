<?php

namespace App\Http\Controllers;

use App\Models\Faq;

class FaqController extends Controller
{
    public function home()
    {
        $faqs = Faq::where('status', 1)->ordered()->get();

        return view('pages.home', compact('faqs'));
    }

    public function index()
    {
        return redirect()->route('privacy-policy', [], 301);
    }
}
