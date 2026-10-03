<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $name = $request->input('name');
        if (!$name) {
            $name = trim($request->input('firstname', '') . ' ' . $request->input('lastname', ''));
        }

        $request->validate([
            'email' => 'required|email|max:255',
            'phone' => 'required|max:50',
        ]);

        if (empty($name)) {
            $name = 'Prospective Client';
        }

        $message = $request->input('message', '');
        $projectType = $request->input('project_type');
        $location = $request->input('location');
        $siteArea = $request->input('site_area');

        $extraDetails = [];
        if ($projectType) $extraDetails[] = "Project Type: " . $projectType;
        if ($location) $extraDetails[] = "Location: " . $location;
        if ($siteArea) $extraDetails[] = "Site Area / Req: " . $siteArea;

        if (!empty($extraDetails)) {
            $message = implode("\n", $extraDetails) . "\n\n" . $message;
        }

        ContactEnquiry::create([
            'name' => $name,
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $projectType ?? $request->input('subject', 'General Project Enquiry'),
            'message' => $message ?: 'Project enquiry from website.',
        ]);

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['success' => true, 'message' => 'Your enquiry has been submitted successfully.']);
        }

        return back()->with('success', 'Your enquiry has been submitted successfully.');
    }
}