<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@shower')->name('home');
Route::get('/gallery', 'PagesController@gallery')->name('gallery');

Route::get('/account', 'UsersController@index')->name('account');

// RSVP
Route::post('/rsvp', 'RsvpsController@store')->name('rsvp');
// Gallery
Route::post('/photos/store', 'PhotosController@store')->name('photos.store');

Auth::routes();
