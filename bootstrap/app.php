<?php
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\OptimizeImages;
use App\Http\Middleware\SocialMeta;
$app = Application::configure(basePath: dirname(__DIR__))
    ->withRouting(web: __DIR__.'/../routes/web.php', commands: __DIR__.'/../routes/console.php', health: '/up')
    ->withMiddleware(function (Middleware $middleware) { $middleware->alias(['admin.auth' => AdminAuth::class]); $middleware->web(append: [SocialMeta::class, OptimizeImages::class]); })
    ->withExceptions(function (Exceptions $exceptions) {})
    ->create();

// Use Hostinger's web root for both admin uploads and Artisan commands.
$hostingerPublic = dirname($app->basePath()).'/public_html';
if (is_file($hostingerPublic.'/index.php')) {
    $app->usePublicPath($hostingerPublic);
}

return $app;
