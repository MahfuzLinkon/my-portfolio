<?php

use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('frontend.home.index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [FrontendController::class, 'index'])->name('front.home');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // Admin profile route
    Route::get('/admin-profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::get('/admin-profile-update', [AdminProfileController::class, 'adminProfileUpdate'])->name('admin.profile-update');


});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
