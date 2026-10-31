<?php

require dirname(__DIR__).'/vendor/autoload.php';
$app = require dirname(__DIR__).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Http\Controllers\ContactController;
use App\Models\ContactEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;

function check(bool $condition, string $message): void
{
    if (!$condition) throw new RuntimeException($message);
    echo "PASS: $message\n";
}

config(['services.emailjs' => [
    'service_id' => 'test-service', 'template_id' => 'test-template',
    'public_key' => 'test-public', 'private_key' => 'test-private',
    'recipient' => 'sales@agelessind.com',
]]);
Http::preventStrayRequests();
$payload = [
    'firstname' => 'Test', 'lastname' => 'Lead', 'email' => 'lead@example.com',
    'phone' => '+91 9876543210', 'location' => 'Kochi', 'site_area' => '10 acres',
    'message' => 'Please contact us about our project.',
];
$submit = function (array $data) {
    return (new ContactController())->store(Request::create('/contact-submit', 'POST', $data, [], [], ['HTTP_ACCEPT' => 'application/json']));
};

DB::beginTransaction();
try {
    Http::fake(['api.emailjs.com/*' => Http::response('OK', 200)]);
    $result = $submit($payload)->getData(true);
    check($result['success'] && $result['email_sent'], 'Successful submission reports email delivery accepted');
    Http::assertSent(fn ($request) => $request['template_params']['to_email'] === 'sales@agelessind.com'
        && $request['template_params']['reply_to'] === 'lead@example.com'
        && $request['template_params']['name'] === 'Test Lead'
        && str_contains($request['template_params']['message'], 'Location: Kochi')
        && str_contains($request['template_params']['message'], 'Site Area / Req: 10 acres')
        && str_contains($request['template_params']['message'], $payload['message']));
    check(true, 'Email targets sales and includes lead contact and project details');

    Http::swap(new \Illuminate\Http\Client\Factory());
    Http::preventStrayRequests();
    Http::fake(['api.emailjs.com/*' => Http::response('Unavailable', 503)]);
    $before = ContactEnquiry::count();
    $result = $submit($payload)->getData(true);
    check(!$result['email_sent'] && ContactEnquiry::count() === $before + 1, 'Provider failure preserves the lead and reports the email failure');

    config(['services.emailjs.service_id' => '']);
    Http::swap(new \Illuminate\Http\Client\Factory());
    Http::fake();
    $result = $submit($payload)->getData(true);
    check(!$result['email_sent'], 'Missing credentials report email unavailable');
    Http::assertNothingSent();

    $before = ContactEnquiry::count();
    try {
        $submit(array_replace($payload, ['email' => 'invalid']));
        throw new RuntimeException('Invalid email accepted');
    } catch (ValidationException $exception) {
        check(ContactEnquiry::count() === $before, 'Invalid submissions do not save leads or send email');
    }
} finally {
    DB::rollBack();
}
