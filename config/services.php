<?php

return [
    'emailjs' => [
        'service_id' => env('EMAILJS_SERVICE_ID'),
        'template_id' => env('EMAILJS_TEMPLATE_ID'),
        'public_key' => env('EMAILJS_PUBLIC_KEY'),
        'private_key' => env('EMAILJS_PRIVATE_KEY'),
        'recipient' => env('ENQUIRY_MAIL_TO', 'sales@agelessind.com'),
    ],
];
