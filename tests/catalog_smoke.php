<?php

require dirname(__DIR__).'/vendor/autoload.php';
$app = require dirname(__DIR__).'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

function check(bool $condition, string $message): void
{
    if (!$condition) throw new RuntimeException($message);
    echo "PASS: $message\n";
}

View::share('errors', new Illuminate\Support\ViewErrorBag());
$app['session']->start();
foreach (['products' => Product::class, 'projects' => Project::class] as $type => $model) {
    echo "$type database rows: ".$model::count()."\n";
    $records = json_decode(file_get_contents(database_path("data/$type.json")), true);
    foreach ($records as $record) {
        $saved = $model::where('slug', Illuminate\Support\Str::slug($record[$type === 'products' ? 'name' : 'title']))->first();
        check($saved !== null && is_file(public_path('storage/'.$saved->image)), "Imported record and image: ".$record[$type === 'products' ? 'name' : 'title']);
    }
    $publicClass = 'App\\Http\\Controllers\\'.($type === 'products' ? 'Product' : 'Project').'Controller';
    $html = (new $publicClass)->index()->render();
    $class = $type === 'products' ? 'premium-product-card product-item' : 'portfolio-project-card project-portfolio-item';
    check(substr_count($html, $class) === $model::where('status', 1)->count(), "$type listings contain exactly the active database records");
    check(strlen(view("admin.$type.create")->render()) > 0, "$type create form renders");
    $var = $type === 'products' ? 'product' : 'project';
    check(strlen(view("admin.$type.edit", [$var => $model::first()])->render()) > 0, "$type edit form renders");
}

DB::beginTransaction();
try {
    $before = [Product::count(), Project::count()];
    $imported = Product::where('slug', 'apex-falcon-swing-tower')->firstOrFail();
    $imported->update(['name' => 'Administrator edited name']);
    (new Database\Seeders\CatalogSeeder())->run();
    check([Product::count(), Project::count()] === $before && $imported->fresh()->name === 'Administrator edited name', 'Repeat import preserves records and administrator edits');
    foreach (['Product', 'Project'] as $name) {
        $model = 'App\\Models\\'.$name;
        $admin = 'App\\Http\\Controllers\\Admin'.$name.'Controller';
        $public = 'App\\Http\\Controllers\\'.$name.'Controller';
        $controller = new $admin;
        $field = $name === 'Product' ? 'name' : 'title';
        $data = [$field => 'Catalog smoke verification 947281', 'category_key' => 'cinema', 'category' => 'Cinema', 'sort_order' => 0, 'status' => 1, 'description' => 'Test description'];
        $controller->store(Request::create('/', 'POST', $data));
        $record = $model::where($field, $data[$field])->firstOrFail();
        $temporaryImage = tempnam(sys_get_temp_dir(), 'catalog');
        file_put_contents($temporaryImage, base64_decode('R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7'));
        $upload = new Illuminate\Http\UploadedFile($temporaryImage, 'pixel.gif', 'image/gif', null, true);
        $uploadRequest = Request::create('/', 'PUT', $data, [], ['image' => $upload]);
        $controller->update($uploadRequest, $record);
        $imagePath = $record->fresh()->image;
        try {
            check(is_file(public_path('storage/'.$imagePath)), "$name uploaded image is publicly available");
            $controller->update(Request::create('/', 'PUT', $data), $record);
            check($record->fresh()->image === $imagePath, "$name edit without upload retains image");
        } finally {
            if (is_file(public_path('storage/'.$imagePath))) unlink(public_path('storage/'.$imagePath));
            if (is_file($temporaryImage)) unlink($temporaryImage);
        }
        $controller->store(Request::create('/', 'POST', $data));
        check($model::where($field, $data[$field])->count() === 2, "$name duplicate names receive unique slugs");
        check(strlen((new $public)->show($record->slug)->render()) > 0, "$name detail renders");
        $slug = $record->slug;
        $data[$field] .= ' edited';
        $data['status'] = 0;
        $controller->update(Request::create('/', 'PUT', $data), $record);
        check($record->fresh()->slug === $slug && !$record->fresh()->status, "$name edits persist with stable URLs");
        try {
            (new $public)->show($slug);
            throw new RuntimeException('Inactive detail is accessible');
        } catch (Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            echo "PASS: $name inactive detail hidden\n";
        }
        try {
            $controller->store(Request::create('/', 'POST', array_merge($data, ['category_key' => 'invalid'])));
            throw new RuntimeException('Invalid category accepted');
        } catch (Illuminate\Validation\ValidationException $e) {
            echo "PASS: $name category validation\n";
        }
        $controller->destroy($record);
        check(!$model::whereKey($record->id)->exists(), "$name delete persists");
    }
} finally {
    DB::rollBack();
}

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
foreach (['products', 'projects'] as $type) {
    $response = $kernel->handle(Request::create("/admin/$type", 'GET'));
    check($response->isRedirect() && str_ends_with($response->headers->get('Location'), '/admin/login'), "$type admin requires login");
}
