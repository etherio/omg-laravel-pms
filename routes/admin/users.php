<?php

use Illuminate\Support\Facades\Route;

Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

Route::resource('users', 'UsersController');
