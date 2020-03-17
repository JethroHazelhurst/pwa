<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 *
 */
Route::post('login', 'UserController@login');

/**
 *
 */
Route::post('register', 'UserController@register');

/**
 *
 */
Route::resource('/task', 'TaskController');

/**
 *
 */
Route::get('/category/{category}/tasks', 'CategoryController@tasks');

/**
 *
 */
Route::resource('/category', 'CategoryController');
