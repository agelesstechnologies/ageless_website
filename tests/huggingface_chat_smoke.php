<?php

require dirname(__DIR__).'/vendor/autoload.php';
$app = require dirname(__DIR__).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Services\HuggingFaceChat;
use Illuminate\Support\Facades\Http;

function checkHf(bool $condition, string $description): void
{
    if (!$condition) {
        throw new RuntimeException($description);
    }
    echo "PASS: $description\n";
}

function fakeHf($responses = null): void
{
    Http::swap(new Illuminate\Http\Client\Factory);
    Http::preventStrayRequests();
    Http::fake($responses);
}
Http::preventStrayRequests();
$service = new HuggingFaceChat;
$context = ['answer' => 'We build amusement parks.', 'sources' => [['title' => 'Home', 'url' => 'http://localhost/']]];
config(['chat.provider' => 'huggingface', 'chat.huggingface_token' => '', 'chat.huggingface_model' => 'test/model']);
fakeHf();
checkHf($service->answer('What do you do?', $context)['mode'] === 'website', 'Missing token uses website fallback');
checkHf(Http::recorded()->isEmpty(), 'Missing token makes no external request');

config(['chat.huggingface_token' => 'test-token']);
fakeHf(['router.huggingface.co/*' => Http::response(['choices' => [['message' => ['content' => 'We can help you build an amusement park.']]]])]);
$result = $service->answer('What do you do?', $context);
checkHf($result['mode'] === 'ai' && $result['sources'] === $context['sources'], 'AI reply keeps server-selected source links');
$request = Http::recorded()->last()[0];
checkHf($request->hasHeader('Authorization', 'Bearer test-token') && $request['model'] === 'test/model', 'Token and configured model sent server-side');
checkHf(str_contains($request['messages'][1]['content'], $context['answer']), 'Website evidence included in prompt');

foreach ([401, 402, 429, 503] as $status) {
    fakeHf(['router.huggingface.co/*' => Http::response([], $status)]);
    checkHf($service->answer('Question', $context) === $context + ['mode' => 'website'], "HTTP $status preserves fallback");
}
fakeHf(['router.huggingface.co/*' => Http::response(['choices' => []])]);
checkHf($service->answer('Question', $context)['mode'] === 'website', 'Malformed response uses fallback');
fakeHf(function () { throw new Illuminate\Http\Client\ConnectionException('Test timeout'); });
checkHf($service->answer('Question', $context)['mode'] === 'website', 'Connection timeout uses fallback');

fakeHf(['router.huggingface.co/*' => Http::response(['choices' => [['message' => ['content' => 'Hello from the AI assistant.']]]])]);
checkHf((new App\Services\WebsiteChat)->answer('Hello')['mode'] === 'ai', 'Existing website chat reaches AI service');
