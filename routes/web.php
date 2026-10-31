<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminFaqController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminProjectController;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SitemapController;

Route::post('/chat', \App\Http\Controllers\ChatController::class)->middleware('throttle:30,1')->name('chat.answer');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::redirect('/products/jaint-swing', '/products/giant-swing', 301);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
Route::get('/', [FaqController::class, 'home'])->name('pages.home');
Route::view('/about-company', 'pages.about-company')->name('pages.about-company');
Route::redirect('/about', '/about-company');
Route::redirect('/about-us', '/about-company');
Route::view('/contact', 'pages.contact')->name('pages.contact');
Route::view('/dome-cinema', 'pages.dome-cinema')->name('pages.dome-cinema');
Route::view('/flying-cinema', 'pages.flying-cinema')->name('pages.flying-cinema');
Route::view('/interactive-room', 'pages.interactive-room')->name('pages.interactive-room');
Route::view('/rope-rider', 'pages.rope-rider')->name('pages.rope-rider');

// Template/demo leftovers: not part of the site, so keep them out of search.
// Pages with an equivalent real page redirect there; the rest return 410 Gone.
foreach (['services' => '/products', 'services-details' => '/products', 'project-details' => '/projects',
          'team' => '/about-company', 'team-details' => '/about-company', 'testimonials' => '/about-company'] as $old => $new) {
    Route::redirect('/' . $old, $new, 301);
}
Route::get('/{leftover}', fn () => abort(410))->whereIn('leftover', ['404', 'ai', 'slider', 'test', 'seo-strategy']);

Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::redirect('/faq', '/#home-faq', 301);
Route::redirect('/faqs', '/#home-faq', 301);

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.submit');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login.post');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('admin.auth')->group(function () {
        Route::resource('projects', AdminProjectController::class)->except('show');
        Route::resource('products', AdminProductController::class)->except('show');
        Route::redirect('/', '/admin/blogs');

        Route::resource('blogs', AdminBlogController::class);
        Route::get('/contacts', [AdminContactController::class, 'index'])->name('contacts.index');
        Route::resource('faqs', AdminFaqController::class);
    });
});
