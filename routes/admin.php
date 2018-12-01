<?php

Route::group([
    'middleware' => ['auth', 'admin'],
    'as' => 'admin.',
    'prefix' => 'admin',
    'namespace' => 'Admin',
], function() {
    // Photos
    Route::get('/', 'AdminPhotosController@index')->name('photos');
    Route::get('/photos/{photo}/delete', 'AdminPhotosController@destroy')->name('photos.delete');
    Route::get('/photos/{photo}/toggle', 'AdminPhotosController@toggle')->name('photos.toggle');
});
