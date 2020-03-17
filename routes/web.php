<?php

use Illuminate\Support\Facades\Route;

/**
 * Vue app entry point
 */
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
