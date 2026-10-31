<?php

require dirname(__DIR__).'/vendor/autoload.php';
$app = require dirname(__DIR__).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();
config(['chat.provider' => 'website', 'chat.huggingface_token' => '']);
Illuminate\Support\Facades\View::share('errors', new Illuminate\Support\ViewErrorBag());
$app['session']->start();

function verifyChat(bool $condition, string $message): void
{
    if (!$condition) {
        throw new RuntimeException($message);
    }
    echo "PASS: $message\n";
}

$chat = new App\Services\WebsiteChat;
$documents = $chat->documents();
verifyChat(count($documents) >= 15, 'Public page content is indexed');
foreach (['Products', 'Projects', 'Contact', 'Dome cinema'] as $question) {
    $answer = $chat->answer($question);
    verifyChat(count($answer['sources']) > 0 && !str_contains($answer['answer'], "couldn't find"), "Relevant answer for $question");
    echo $answer['answer']."\n";
}
verifyChat(str_contains($chat->answer('zzzxxyy987654')['answer'], "couldn't find"), 'Unknown questions fall back without inventing facts');
verifyChat($chat->answer('Hello')['sources'] === [], 'Greeting supported');

Illuminate\Support\Facades\DB::beginTransaction();
try {
    $product = App\Models\Product::where('status', 1)->firstOrFail();
    $product->update(['name' => 'Chatunique947281', 'description' => 'Verified published description.']);
    verifyChat(str_contains($chat->answer('Chatunique947281')['answer'], 'Verified published description'), 'Published database edits are immediately searchable');
    $product->update(['status' => 0]);
    verifyChat(str_contains($chat->answer('Chatunique947281')['answer'], "couldn't find"), 'Inactive products are excluded');
} finally {
    Illuminate\Support\Facades\DB::rollBack();
}

foreach (['pages.home', 'pages.contact', 'pages.about-company', 'layouts.app'] as $view) {
    $html = ($view === 'pages.home' ? app(App\Http\Controllers\FaqController::class)->home() : view($view))->render();
    verifyChat(substr_count($html, 'id="website-chat"') === 1, "One widget rendered in $view");
}
$request = Illuminate\Http\Request::create('/chat', 'POST', ['message' => str_repeat('a', 501)]);
try {
    (new App\Http\Controllers\ChatController)($request, $chat);
    throw new RuntimeException('Oversized message was accepted');
} catch (Illuminate\Validation\ValidationException $exception) {
    verifyChat(isset($exception->errors()['message']), 'Oversized messages rejected');
}
