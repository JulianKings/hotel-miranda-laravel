<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('hotel.index');
Route::get('/index', [IndexController::class, 'index'])->name('hotel.index.long');
Route::get('/about', [AboutController::class, 'index'])->name('hotel.about');
Route::get('/offers', [RoomsController::class, 'offers'])->name('hotel.offers');
Route::get('/rooms', [RoomsController::class, 'index'])->name('hotel.rooms');
Route::get('/rooms/{id}', [RoomsController::class, 'show'])->name('hotel.rooms.detail');
Route::post('/rooms/{id}', [RoomsController::class, 'storeBooking'])->name('hotel.rooms.details.send');
Route::get('/contact', [ContactController::class, 'index'])->name('hotel.contact');
Route::post('/contact', [ContactController::class, 'store'])->name('hotel.contact.store');

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

    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
});

require __DIR__.'/auth.php';
