<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OffersController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\RoomsPageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('hotel-index');
Route::get('/index', [IndexController::class, 'index'])->name('hotel-index-long');
Route::get('/about', [AboutController::class, 'index'])->name('hotel-about');
Route::get('/offers', [OffersController::class, 'index'])->name('hotel-offers');
Route::get('/rooms', [RoomsController::class, 'index'])->name('hotel-rooms');
Route::get('/rooms/{id}', [RoomsPageController::class, 'load'])->name('hotel-rooms-detail');
Route::get('/contact', [ContactController::class, 'index'])->name('hotel-contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
    Route::get('/activities/add', [ActivityController::class, 'create'])->name('activities.create');
    Route::post('/activities/add', [ActivityController::class, 'store'])->name('activities.store');
    Route::get('/activities/edit/{id}', [ActivityController::class, 'edit'])->name('activities.edit');
    Route::put('/activities/edit/{id}', [ActivityController::class, 'update'])->name('activities.update');
    Route::delete('/activities/delete/{id}', [ActivityController::class, 'destroy'])->name('activities.destroy');
});

require __DIR__.'/auth.php';
