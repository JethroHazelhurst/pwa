<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

/**
 * Resource routes are protected from unauthenticated users
 */
Route::group(['middleware' => 'auth:api'], function () {
    Route::resource('/task', 'TaskController');
    Route::resource('/category', 'CategoryController');
    Route::get('/category/{category}/tasks', 'CategoryController@tasks');
});
