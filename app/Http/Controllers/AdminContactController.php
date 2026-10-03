<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;

class AdminContactController extends Controller
{
    public function index()
    {
        $enquiries = ContactEnquiry::latest()->paginate(15);
        return view('admin.contacts.index', compact('enquiries'));

    $sort = request('sort', 'new');

    $enquiries = \App\Models\ContactEnquiry::query()
        ->when($sort == 'old', function ($query) {
            $query->oldest();
        }, function ($query) {
            $query->latest();
        })
        ->paginate(15);

    return view('admin.contacts.index', compact('enquiries'));
}
    }
