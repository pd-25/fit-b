<!-- Here GymOwner route is declared -->
<?php

use App\Http\Controllers\CustomAuth\SellerAuthController;
use App\Http\Controllers\Mygym\Dashboard\GymDashboardController;
use App\Http\Controllers\Mygym\Event\EventController;
use Illuminate\Support\Facades\Route;

/*  GymOwner Route   */

Route::prefix('my-gym/'.request()->ip().'/access')->group( function () {
    // dd("hello");
    Route::get('register', [SellerAuthController::class, 'showRegisterForm'])->name('mygym.showRegisterForm');

    Route::get('login', [SellerAuthController::class, 'index'])->name('mygym.login');
    Route::post('login', [SellerAuthController::class, 'login'])->name('mygym.loggedin');
    
});

Route::middleware('mygym')->prefix('gym-administrator')->group(function () {
    Route::get('mygym-dashboard', [GymDashboardController::class, 'myGymDashboard'])->name('mygym.dashboard');
    Route::resource('gym-my-events', EventController::class);
    Route::get('logout', [GymDashboardController::class, 'logout'])->name('mygym.logout');

});
