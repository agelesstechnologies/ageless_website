<?php

require dirname(__DIR__).'/vendor/autoload.php';
$app = require dirname(__DIR__).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Http\Controllers\Admin\BlogController;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\MessageBag;
use Illuminate\Support\ViewErrorBag;
use Illuminate\Validation\ValidationException;

function check(bool $condition, string $message): void
{
    if (! $condition) throw new RuntimeException($message);
    echo "PASS: $message\n";
}

$app['session']->start();
View::share('errors', new ViewErrorBag());
$controller = new BlogController();
$files = [];
DB::beginTransaction();
try {
    check(str_contains($controller->create()->render(), 'name="_token"'), 'Add Blog form renders with CSRF token');
    $data = ['title' => 'Blog smoke '.bin2hex(random_bytes(6)), 'excerpt' => str_repeat('Long excerpt. ', 60), 'content' => '<p>Article content.</p>', 'status' => 'published', 'published_at' => '2026-10-09'];
    $response = $controller->store(Request::create('/admin/blogs', 'POST', $data));
    $blog = Blog::where('title', $data['title'])->firstOrFail();
    check($response->isRedirect(route('admin.blogs.index')) && $blog->excerpt === $data['excerpt'], 'Blog with excerpt over 500 characters saves and redirects');
    check($blog->image === null, 'Blog saves without an optional image');
    $controller->store(Request::create('/admin/blogs', 'POST', $data));
    check(Blog::where('title', $data['title'])->distinct()->count('slug') === 2, 'Duplicate titles receive unique URLs');

    $temporary = tempnam(sys_get_temp_dir(), 'blog');
    $files[] = $temporary;
    file_put_contents($temporary, base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'));
    $upload = new UploadedFile($temporary, 'pixel.gif', 'image/gif', null, true);
    $files[] = public_path('storage/blogs/'.$upload->hashName());
    $files[] = storage_path('app/public/blogs/'.$upload->hashName());
    $imageData = $data;
    $imageData['title'] .= ' with image';
    $controller->store(Request::create('/admin/blogs', 'POST', $imageData, [], ['image' => $upload]));
    $imageBlog = Blog::where('title', $imageData['title'])->firstOrFail();
    check(is_file(public_path('storage/'.$imageBlog->image)), 'Blog saves with a publicly available uploaded image');
    $controller->update(Request::create('/admin/blogs/'.$imageBlog->id, 'PUT', $imageData), $imageBlog);
    check($imageBlog->fresh()->image === $imageBlog->image, 'Edit without an upload keeps the existing image');
    check(str_contains($controller->edit($imageBlog)->render(), 'name="_method" value="PUT"'), 'Edit form renders with PUT method');

    try {
        $invalid = $data;
        $invalid['content'] = '';
        $controller->store(Request::create('/admin/blogs', 'POST', $invalid));
        throw new RuntimeException('Missing content was accepted');
    } catch (ValidationException $e) {
        View::share('errors', (new ViewErrorBag())->put('default', new MessageBag($e->errors())));
        foreach (['create', 'edit'] as $view) {
            check(str_contains(view('admin.blogs.'.$view, ['blog' => $imageBlog])->render(), $e->errors()['content'][0]), "$view form displays validation errors");
        }
    }
    $symbolData = $data;
    $symbolData['title'] = '!!!';
    $controller->store(Request::create('/admin/blogs', 'POST', $symbolData));
    check(Blog::where('title', '!!!')->where('slug', '!=', '')->exists(), 'Symbol-only title receives a usable URL');
} finally {
    DB::rollBack();
    foreach (array_unique($files) as $file) {
        if (is_file($file)) unlink($file);
    }
}
