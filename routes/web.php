<?php

use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RootController;

Route::get('/', [RootController::class, 'index'])->name('home');

Route::get('/login', [RootController::class, 'login'])->name('login');

Route::view('/register', 'register')->name('register');

Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])
    ->middleware('throttle:10,1')
    ->name('google.redirect');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])
    ->middleware('throttle:10,1')
    ->name('google.callback');

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/amenities', 'amenities')->name('amenities');

Route::view('/about-us', 'about')->name('about-us');

Route::view('/reservation', 'reservation')->name('reservation');

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::view('/profiles', 'profile')->name('profiles');

Route::get('/amenities/{name}', function ($name) {
    return view('amenities-detail');
});

Route::prefix('admin')
    ->name('admin.')
    ->controller(AdminController::class)
    ->group(function () {
        Route::get('/bookings', 'bookings')->name('bookings');
        Route::get('/available-room', 'availableRooms')->name('available-room');
        Route::get('/cancelled-room', 'cancelledRooms')->name('cancelled-room');
    });
