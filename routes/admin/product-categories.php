<?php

use Illuminate\Support\Facades\Route;

Route::delete('product-categories/destroy', 'ProductCategoryController@massDestroy')->name('product-categories.massDestroy');

Route::post('product-categories/media', 'ProductCategoryController@storeMedia')->name('product-categories.storeMedia');

Route::post('product-categories/ckmedia', 'ProductCategoryController@storeCKEditorImages')->name('product-categories.storeCKEditorImages');

Route::resource('product-categories', 'ProductCategoryController');
