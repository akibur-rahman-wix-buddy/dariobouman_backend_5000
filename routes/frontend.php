<?

use App\Http\Controllers\Web\Frontend\HomeController;
use App\Http\Controllers\Web\Frontend\ProductController;
use Illuminate\Support\Facades\Route;


/**
 * Home Routes
 *
 * This group handles all routes related to the home page.
 * It uses the HomeController to manage the functionality of these routes.
 */
Route::prefix('/')->name('home.')->controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});


/**
 * Product Routes
 *
 * This group manages routes related to products.
 * It uses the ProductController to handle requests for product-related functionality.
 */
Route::prefix('/products')->name('products.')->controller(ProductController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});