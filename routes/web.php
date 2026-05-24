<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\BloodRequestController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (auth()->check()) {
        if (auth()->user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('dashboard');
    }
    return app(\App\Http\Controllers\HomeController::class)->index();
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/donors', [DonorController::class, 'index'])->name('donors.index');

    Route::get('/need-blood', [BloodRequestController::class, 'create'])->name('blood_requests.create');
    Route::post('/need-blood', [BloodRequestController::class, 'store'])->name('blood_requests.store');
    Route::get('/requests', [BloodRequestController::class, 'index'])->name('blood_requests.index');

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
});

require __DIR__.'/auth.php';
