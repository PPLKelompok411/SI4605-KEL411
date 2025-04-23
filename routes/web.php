<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;      // ← tambahkan ini


// Frontend routes (User)
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [App\Http\Controllers\RestaurantController::class, 'index'])->name('frontend.home');
    Route::get('/restaurants', [App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurants.index');
    // Route untuk menampilkan form pencarian
    Route::get('/restaurants/search', [RestaurantController::class, 'search'])->name('restaurants.search');
});





// Default login route (required by Laravel for redirect)
Route::get('login', function() {
    return redirect()->route('admin.login');
})->name('login');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminLoginController::class, 'login']);
    Route::post('logout', [AdminLoginController::class, 'logout'])->name('admin.logout');



    Route::middleware([
        'auth:admins',
        \App\Http\Middleware\IsAdmin::class,
    ])->group(function () {
        Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        // CRUD restaurants
        Route::resource('restaurants', \App\Http\Controllers\Admin\RestaurantController::class);
    });
    
});