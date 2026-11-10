<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::controller(UserController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/accommodation', 'accommodation')->name('accommodation');
    Route::get('/amenities', 'amenities')->name('amenities');
    Route::get('/about-us', 'about')->name('about-us');
    Route::get('/reservation', 'reservation')->name('reservation');
    Route::get('/profiles', 'profiles')->name('profiles');

    Route::get('/amenities/{name}', 'amenityDetail')->name('amenities.detail');
    Route::get('/profiles/{id}', 'profileDetail')->name('profiles.detail');
});

Route::prefix('admin')
    ->name('admin.')
    ->controller(AdminController::class)
    ->group(function () {
        Route::get('/bookings', 'bookings')->name('bookings');
        Route::get('/available-room', 'availableRooms')->name('available-room');
        Route::get('/cancelled-room', 'cancelledRooms')->name('cancelled-room');
    });
