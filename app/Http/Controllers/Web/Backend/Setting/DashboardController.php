<?php

namespace App\Http\Controllers\Web\Backend\Setting;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use App\Models\Campaign;
use App\Models\FAQ;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Subscribe;
use App\Models\UpcomingProject;
use App\Models\User;
use Illuminate\View\View;

class DashboardController extends Controller {
    /**
     * Display the backend dashboard.
     *
     * @return View
     */
    public function dashboard() {
        return view('backend.layout.dashboard');
    }
}
