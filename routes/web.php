<?php


use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


require __DIR__ . '/auth.php';

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
    Route::post('/avatar', 'avatar')->name('avatar');
    Route::get('/destroy/{user}', 'destroy')->name('destroy')->middleware('password.confirm');
});