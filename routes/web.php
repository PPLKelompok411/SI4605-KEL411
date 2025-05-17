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


// Frontend routes (User)
Route::group(['middleware' => 'guest'], function () {
    Route::get('/', [App\Http\Controllers\RestaurantController::class, 'index'])->name('frontend.home');
    Route::get('/restaurants', [App\Http\Controllers\RestaurantController::class, 'index'])->name('restaurants.index');
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
        \App\Http\Middleware\IsAdmin::class,  // ← pakai FQCN di sini
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

