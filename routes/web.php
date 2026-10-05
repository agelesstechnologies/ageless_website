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

Route::post('/chat', \App\Http\Controllers\ChatController::class)->middleware('throttle:30,1')->name('chat.answer');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/', [FaqController::class, 'home'])->name('pages.home');
Route::view('/404', 'pages.404')->name('pages.404');
Route::view('/about-company', 'pages.about-company')->name('pages.about-company');
Route::redirect('/about', '/about-company');
Route::redirect('/about-us', '/about-company');
Route::view('/ai', 'pages.ai')->name('pages.ai');
Route::view('/contact', 'pages.contact')->name('pages.contact');
Route::view('/dome-cinema', 'pages.dome-cinema')->name('pages.dome-cinema');
Route::view('/flying-cinema', 'pages.flying-cinema')->name('pages.flying-cinema');
Route::view('/interactive-room', 'pages.interactive-room')->name('pages.interactive-room');
Route::view('/project-details', 'pages.project-details')->name('pages.project-details');
Route::view('/rope-rider', 'pages.rope-rider')->name('pages.rope-rider');
Route::view('/services-details', 'pages.services-details')->name('pages.services-details');
Route::view('/services', 'pages.services')->name('pages.services');
Route::view('/slider', 'pages.slider')->name('pages.slider');
Route::view('/team-details', 'pages.team-details')->name('pages.team-details');
Route::view('/team', 'pages.team')->name('pages.team');
Route::view('/test', 'pages.test')->name('pages.test');
Route::view('/testimonials', 'pages.testimonials')->name('pages.testimonials');
Route::view('/seo-strategy', 'pages.seo-strategy')->name('pages.seo-strategy');

Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::redirect('/faq', '/privacy-policy', 301)->name('faq.index');
Route::redirect('/faqs', '/privacy-policy', 301);

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::post('/contact-submit', [ContactController::class, 'store'])->name('contact.submit');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
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
