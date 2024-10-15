<?php

use App\Http\Controllers\Web\Backend\HomeController;
use App\Http\Controllers\Web\Backend\Setting\MailController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->name('home.')->controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
});


// Routes for managing dates in the admin panel.
// This includes viewing, creating, editing, and deleting dates.
Route::prefix('setting/mail')->name('setting.mail.')->controller(MailController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::post('/', 'store')->name('store');
});