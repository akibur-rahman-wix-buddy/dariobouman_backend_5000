<?php

use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\Product\InventoryController;
use App\Http\Controllers\Web\Frontend\Product\SalesController;
use App\Http\Controllers\Web\Frontend\ProfileController;
use App\Http\Controllers\Web\Frontend\Setting\StockXController;
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



Route::prefix('/settings')->name('settings.')->group(function () {
    Route::prefix('/stockx')->name('stockx.')->controller(StockXController::class)->group(function () {
        Route::get('/', 'edit')->name('edit');
        Route::put('/', 'update')->name('update');
    });
});