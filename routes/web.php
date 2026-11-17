<?php

use App\Http\Controllers\InquiryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Texora Sourcing
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/quality-compliance', [PageController::class, 'qualityCompliance'])->name('quality-compliance');
Route::get('/buyers', [PageController::class, 'buyers'])->name('buyers');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/company-profile', [PageController::class, 'companyProfile'])->name('company-profile');

Route::post('/inquiry', [InquiryController::class, 'store'])->name('inquiry.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
