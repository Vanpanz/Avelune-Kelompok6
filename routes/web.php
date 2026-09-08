<?php
Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/accommodation', 'accomodation')->name('accommodation');

Route::view('/amenities', 'amenties')->name('amenities');

Route::view('/about-us', 'about')->name('about-us');

Route::view('/reservation', 'reservation')->name('reservation');