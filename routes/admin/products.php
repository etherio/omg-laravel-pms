<?php

use Illuminate\Support\Facades\Route;

Route::delete('products/destroy', 'ProductController@massDestroy')->name('products.massDestroy');

Route::post('products/media', 'ProductController@storeMedia')->name('products.storeMedia');

Route::post('products/ckmedia', 'ProductController@storeCKEditorImages')->name('products.storeCKEditorImages');

Route::resource('products', 'ProductController');
