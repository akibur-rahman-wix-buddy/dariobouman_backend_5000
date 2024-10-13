<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\ProductController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('/index', function () {
    return view('backend.layouts.index');
});
Route::get('/general', function () {
    return view('backend.layouts.settings.general');
});
Route::get('/mail', function () {
    return view('backend.layouts.settings.mail');
});




/**
 * Home Routes
 *
 * This group handles all routes related to the home page.
 * It uses the HomeController to manage the functionality of these routes.
 */
Route::prefix('/')->name('home.')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});


/**
 * Product Routes
 *
 * This group manages routes related to products.
 * It uses the ProductController to handle requests for product-related functionality.
 */
Route::prefix('/products')->name('products.')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});