<?php

use Illuminate\Support\Facades\Route;

Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

Route::resource('roles', 'RolesController');
