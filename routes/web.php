<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RestaurantController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Admin\DashboardController;      // ← tambahkan ini
use App\Http\Controllers\VoucherClaimController;
use App\Http\Controllers\AdminProfileController;


// Kelola klaim voucher (admin)
Route::get('/admin/voucher-claims', [VoucherClaimController::class, 'index'])->name('kelolavoucher');


// Frontend routes (User) yang bisa diakses tanpa login
Route::get('/', [RestaurantController::class, 'index'])->name('frontend.home');
Route::get('/restaurants', [RestaurantController::class, 'index'])->name('frontend.restaurants.index');
Route::get('/restaurants/{id}', [RestaurantController::class, 'show'])->name('frontend.restaurants.show');
Route::get('/restaurants/{id}/claim', [RestaurantController::class, 'showClaimForm'])->name('frontend.restaurants.claim');
Route::post('/restaurants/{id}/claim', [RestaurantController::class, 'submitClaimForm'])->name('frontend.restaurants.claim.submit');

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

        // Profil Admin
        Route::get('profile', [\App\Http\Controllers\AdminProfileController::class, 'show'])->name('showprofiladmin');
        Route::get('profile/edit', [\App\Http\Controllers\AdminProfileController::class, 'edit'])->name('editprofiladmin');
        // Route::post('profile/update', [\App\Http\Controllers\AdminProfileController::class, 'update'])->name('admin.profile.update');
        Route::put('profile', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    });
    
});

Route::prefix('super-admin')->group(function () {
    Route::get('login', [\App\Http\Controllers\Auth\SuperAdminLoginController::class, 'showLoginForm'])->name('super_admin.login');
    Route::post('login', [\App\Http\Controllers\Auth\SuperAdminLoginController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\Auth\SuperAdminLoginController::class, 'logout'])->name('super_admin.logout');
});

Route::prefix('super-admin')->middleware(['auth:super_admins'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\Admin\SuperAdminDashboardController::class, 'index'])->name('super_admin.dashboard');
    Route::resource('admins', \App\Http\Controllers\Admin\SuperAdminController::class);
});

