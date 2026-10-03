<?php

require dirname(__DIR__).'/vendor/autoload.php';
$app = require dirname(__DIR__).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Services\OllamaChat;
use App\Services\WebsiteChat;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Support\Facades\Http;

function checkOllama(bool $condition, string $description): void
{
    if (!$condition) {
        throw new RuntimeException($description);
    }
    echo "PASS: $description\n";
}

function fakeOllama($responses = null): void
{
    Http::swap(new Illuminate\Http\Client\Factory);
    Http::preventStrayRequests();
    Http::fake($responses);
}

$model = 'hf.co/braydenh563/Qwen3.6-35B-Uncensored-HauhauCS-1M-MTP-Ollama:Q4_K_M';
config([
    'chat.provider' => 'ollama',
    'chat.ollama_url' => 'http://127.0.0.1:11434/',
    'chat.ollama_model' => $model,
    'chat.ollama_timeout' => 120,
    'chat.huggingface_token' => 'must-not-be-sent',
]);
$service = new OllamaChat;
$context = ['answer' => 'We build amusement parks.', 'sources' => [['title' => 'Home', 'url' => 'http://localhost/']]];
$fallback = $context + ['mode' => 'website'];
fakeOllama(['127.0.0.1:11434/api/chat' => Http::response([
    'message' => ['content' => 'We can help build your amusement park.', 'thinking' => 'Private reasoning'],
])]);
$result = $service->answer('What do you do?', $context);
checkOllama($result['mode'] === 'ai' && $result['sources'] === $context['sources'], 'Ollama reply preserves verified sources');
checkOllama($result['answer'] === 'We can help build your amusement park.', 'Only final content is displayed');
$request = Http::recorded()->last()[0];
checkOllama($request->url() === 'http://127.0.0.1:11434/api/chat' && $request['model'] === $model, 'Exact model is sent to local Ollama');
checkOllama(!$request->hasHeader('Authorization'), 'Hosted inference token is not sent to Ollama');
checkOllama($request['stream'] === false && $request['think'] === false, 'Response is non-streaming with thinking disabled');
checkOllama(str_contains($request['messages'][1]['content'], $context['answer']), 'Public website evidence is sent with question');
checkOllama((new WebsiteChat)->answer('Hello')['mode'] === 'ai', 'Website chatbot routes to Ollama');

foreach ([404, 429, 500, 503] as $status) {
    fakeOllama(['127.0.0.1:11434/api/chat' => Http::response([], $status)]);
    checkOllama($service->answer('Question', $context) === $fallback, "HTTP $status preserves website fallback");
    checkOllama(Http::recorded()->count() === 1, 'Provider failure does not send a hosted request');
}
foreach ([[], ['message' => ['content' => '  ']], ['message' => ['thinking' => 'No final answer']]] as $body) {
    fakeOllama(['127.0.0.1:11434/api/chat' => Http::response($body)]);
    checkOllama($service->answer('Question', $context) === $fallback, 'Missing or blank final content preserves fallback');
}
fakeOllama(function () { throw new ConnectionException('Test timeout'); });
checkOllama($service->answer('Question', $context) === $fallback, 'Offline server or timeout preserves fallback');
config(['chat.ollama_model' => '']);
fakeOllama();
checkOllama($service->answer('Question', $context) === $fallback && Http::recorded()->isEmpty(), 'Missing model makes no HTTP request');
config(['chat.provider' => 'website']);
checkOllama((new WebsiteChat)->answer('Hello')['mode'] === 'website' && Http::recorded()->isEmpty(), 'Website-only mode makes no HTTP request');
