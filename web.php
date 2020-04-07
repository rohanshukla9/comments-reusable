<?php

Route::get('listings/house-rentals/{slug}/reviews', 'Properties\PropertyCommentController@index')->name('rentals.showComments');
Route::post('listings/house-rentals/{slug}/reviews', 'Properties\PropertyCommentController@store')->name('rentals.storeComments');