<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::ordered()->paginate(10);
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
            'sort_order' => 'nullable|integer',
            'status' => 'required|boolean',
            'image' => 'nullable|image|max:4096',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->hashName();
            $uploadPath = public_path('storage/faqs');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }
            $file->move($uploadPath, $filename);
            @copy($uploadPath . '/' . $filename, storage_path('app/public/faqs/' . $filename));
            $data['image'] = 'faqs/' . $filename;
        }

        Faq::create($data);

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ added successfully.');
    }

    public function edit(Faq $faq)
    {
        return view('admin.faqs.edit', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $data = $request->validate([
            'question' => 'required|max:255',
            'answer' => 'required',
            'sort_order' => 'nullable|integer',
            'status' => 'required|boolean',
            'image' => 'nullable|image|max:4096',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = $file->hashName();
            $uploadPath = public_path('storage/faqs');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }
            $file->move($uploadPath, $filename);
            @copy($uploadPath . '/' . $filename, storage_path('app/public/faqs/' . $filename));
            $data['image'] = 'faqs/' . $filename;
        }

        $faq->update($data);


        return redirect()->route('admin.faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function destroy(Faq $faq)
    {
        $faq->delete();

        return redirect()->route('admin.faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
