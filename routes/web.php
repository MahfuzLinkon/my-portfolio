<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\AboutMultiImageController;
use App\Http\Controllers\admin\AdminProfileController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\SliderController;
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
Route::get('/about', [FrontendController::class, 'about'])->name('front.about');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    // Admin profile route
    Route::get('/admin-profile', [AdminProfileController::class, 'adminProfile'])->name('admin.profile');
    Route::get('/admin-profile-edit/{id}', [AdminProfileController::class, 'adminProfileEdit'])->name('admin.profile-edit');
    Route::post('/admin-profile-update/{id}', [AdminProfileController::class, 'adminProfileUpdate'])->name('admin.profile-update');
    Route::get('/admin-password-change', [AdminProfileController::class, 'adminPasswordChange'])->name('admin.password-change');
    Route::post('/admin-password-update', [AdminProfileController::class, 'adminPasswordUpdate'])->name('admin.password-update');

    // Slider Route
    Route::resource('sliders', SliderController::class);
    Route::get('/slider/active/{id}', [SliderController::class, 'sliderActive'])->name('slider.active');
    // About Route
    Route::resource('abouts', AboutController::class);
    Route::resource('about-images', AboutMultiImageController::class);
    Route::get('/multi-image/status/{id}', [AboutMultiImageController::class, 'multiImageStatus'])->name('multi-image.status');

});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/phpinfo', function() {
//     return phpinfo();
// });

require __DIR__.'/auth.php';
