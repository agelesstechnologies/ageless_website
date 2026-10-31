<?php

namespace App\Http\Controllers;

use App\Models\ContactEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'firstname' => 'nullable|string|max:120',
            'lastname' => 'nullable|string|max:120',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:50',
            'message' => 'nullable|string|max:10000',
            'project_type' => 'nullable|string|max:255',
            'subject' => 'nullable|string|max:255',
            'location' => 'nullable|string|max:255',
            'site_area' => 'nullable|string|max:255',
        ]);

        $name = $request->input('name');
        if (!$name) {
            $name = trim($request->input('firstname', '') . ' ' . $request->input('lastname', ''));
        }

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

        $enquiry = ContactEnquiry::create([
            'name' => $name,
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'subject' => $projectType ?? $request->input('subject', 'General Project Enquiry'),
            'message' => $message ?: 'Project enquiry from website.',
        ]);

        $emailSent = false;
        try {
            $emailConfig = config('services.emailjs');
            foreach (['service_id', 'template_id', 'public_key', 'recipient'] as $key) {
                if (empty($emailConfig[$key])) {
                    throw new \RuntimeException('EmailJS configuration missing: ' . $key);
                }
            }
            $response = Http::timeout(15)->post('https://api.emailjs.com/api/v1.0/email/send', [
                'service_id' => $emailConfig['service_id'],
                'template_id' => $emailConfig['template_id'],
                'user_id' => $emailConfig['public_key'],
                'accessToken' => $emailConfig['private_key'],
                'template_params' => [
                    'to_email' => $emailConfig['recipient'],
                    'name' => $enquiry->name,
                    'email' => $enquiry->email,
                    'reply_to' => $enquiry->email,
                    'phone' => $enquiry->phone,
                    'subject' => str_replace(["\r", "\n"], ' ', $enquiry->subject),
                    'message' => $enquiry->message,
                ],
            ]);
            $emailSent = $response->successful();
            if (!$emailSent) {
                Log::error('Enquiry email failed', ['enquiry_id' => $enquiry->id, 'status' => $response->status()]);
            }
        } catch (\Throwable $e) {
            // The enquiry is already saved; a mail outage must not lose the lead or break the form.
            Log::error('Enquiry email failed: ' . $e->getMessage());
        }

        $feedback = $emailSent
            ? 'Your enquiry has been submitted successfully. Our team will contact you shortly.'
            : 'Your enquiry has been saved, but the email notification could not be sent. For urgent enquiries, please email sales@agelessind.com.';

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['success' => true, 'email_sent' => $emailSent, 'message' => $feedback]);
        }

        return back()->with($emailSent ? 'success' : 'warning', $feedback);
    }
}
