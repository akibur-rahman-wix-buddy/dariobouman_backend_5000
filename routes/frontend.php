<?

use App\Http\Controllers\Web\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->name('home.')->controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('index');
});