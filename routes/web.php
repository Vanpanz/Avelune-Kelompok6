<?php

use App\Http\Controllers\RootController;

Route::get('/', [RootController::class, 'index'])->name('home');

Route::get('/login', [RootController::class, 'login'])->name('login');

Route::view('/accommodation', 'accomodation')->name('accommodation');

Route::view('/amenities', 'amenities')->name('amenities');

Route::view('/about-us', 'about')->name('about-us');

Route::view('/reservation', 'reservation')->name('reservation');

Route::view('/profiles', 'profile')->name('profiles');

Route::get('/amenities/{name}', function ($name) {
    return view('amenities-detail');
});

Route::get('/profiles/{id}', function ($id) {
    return view('reservation-detail');
});
