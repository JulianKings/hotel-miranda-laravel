<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('hotel.about-page');
});

Route::get('/offers', function () {
    return view('hotel.offers-page');
});

Route::get('/rooms', function () {
    return view('hotel.rooms-page');
});

Route::get('/contact', function () {
    return view('hotel.contact-page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/activities', [ActivityController::class, 'index'])->name('activities.get');
    Route::get('/activities/add', [ActivityController::class, 'create'])->name('activities.create');
    Route::post('/activities/add', [ActivityController::class, 'store'])->name('activities.store');
    Route::get('/activities/edit/{id}', [ActivityController::class, 'edit'])->name('activities.edit');
    Route::put('/activities/edit/{id}', [ActivityController::class, 'update'])->name('activities.update');
    Route::get('/activities/delete/{id}', [ActivityController::class, 'destroy'])->name('activities.destroy');
});

require __DIR__.'/auth.php';
