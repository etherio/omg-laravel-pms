<?php

use Illuminate\Support\Facades\Route;

Route::delete('product-tags/destroy', 'ProductTagController@massDestroy')->name('product-tags.massDestroy');

Route::resource('product-tags', 'ProductTagController');
