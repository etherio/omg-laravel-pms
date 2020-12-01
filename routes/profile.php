<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
    Route::post('password', 'ChangePasswordController@update')->name('password.update');
    Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
    Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
});
