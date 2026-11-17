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

Route::view('/accommodation', 'accomodation')->name('accommodation');

Route::view('/amenities', 'amenities')->name('amenities');

Route::view('/about-us', 'about')->name('about-us');

Route::view('/reservation', 'reservation')->name('reservation');

Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');

Route::view('/profiles', 'profile')->name('profiles');

Route::get('/amenities/{name}', function ($name) {
    return view('amenities-detail');
});

Route::get('/profiles/{id}', function ($id) {
    return view('reservation-detail');
});
