<?php

use Illuminate\Support\Facades\Route;

Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

Route::resource('permissions', 'PermissionsController');
