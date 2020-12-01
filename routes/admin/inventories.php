<?php

use Illuminate\Support\Facades\Route;

Route::delete('inventories/destroy', 'InventoryController@massDestroy')->name('inventories.massDestroy');

Route::resource('inventories', 'InventoryController');
