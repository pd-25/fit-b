
<!-- Here all super admin routes is decleared -->

<?php

use App\Http\Controllers\Admin\Dashboard\DashboardController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\CustomAuth\AdminAuthController;
use Illuminate\Support\Facades\Route;


/*  Admin Route   */

Route::prefix('superadmin')->group( function () {
Route::get('login', [AdminAuthController::class, 'index'])->name('admin.login');
Route::post('login', [AdminAuthController::class, 'login'])->name('admin.loggedin');

});

Route::middleware('adminAuth')->prefix('superadmin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource("users", UserController::class);
    Route::get('logout', [DashboardController::class, 'logout'])->name('admin.logout');

});


/*  Admin Route End   */
Route::get('/', function () {
    // echo);exit;
    return view('User.Home.index');
});

//next login logic

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
