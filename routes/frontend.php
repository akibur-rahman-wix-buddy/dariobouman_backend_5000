<?php

use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\Product\InventoryController;
use App\Http\Controllers\Web\Frontend\Product\SalesController;
use App\Http\Controllers\Web\Frontend\ProfileController;
use Illuminate\Support\Facades\Route;


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
 * Routes for managing product inventories.
 * 
 * This route group handles all inventory-related endpoints under the 
 * /products/inventories prefix. The routes are prefixed with 'products.' 
 * and 'inventories.' to create namespaced routes for easier reference 
 * in the application.
 * 
 * Example routes:
 * - GET /products/inventories => products.inventories.index
 */
Route::prefix('/products')->name('products.')->group(function () {

    Route::prefix('/inventories')->name('inventories.')->controller(InventoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });

    Route::prefix('/sales')->name('sales.')->controller(SalesController::class)->group(function () {
        Route::get('/', 'index')->name('index');
    });
});


/**
 * Routes for managing user profiles.
 * 
 * This route group handles all endpoints related to user profile 
 * management under the /profile prefix. The routes are prefixed with 
 * 'profile.' for easy reference within the application.
 * 
 * Example routes:
 * - GET /profile => profile.edit
 * - PATCH /profile => profile.update
 * - GET /profile => profile.destroy
 */
Route::prefix('/profile')->name('profile.')->controller(ProfileController::class)->group(function () {
    Route::get('/', 'edit')->name('edit');
    Route::patch('/', 'update')->name('update');
    Route::patch('/password', 'updatePassword')->name('update.password');
    Route::get('/destroy', 'destroy')->name('destroy')->middleware('password.confirm');
});