<?php
Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/accommodation', 'accomodation')->name('accommodation');

Route::view('/amenities', 'amenties')->name('amenities');

Route::view('/bookings', 'admin.bookings')->name('bookings');

Route::view('/cancel', 'admin.cancel')->name('cancel');

Route::view('/avaiable', 'admin.avaiable')->name('avaiable');