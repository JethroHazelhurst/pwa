<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
