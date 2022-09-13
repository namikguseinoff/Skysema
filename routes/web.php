<?php

use Illuminate\Support\Facades\Route;

$ControllersPath = 'App\Http\Controllers';

// Route::get('/', $ControllersPath.'\CommController@index');

Route::get('/', function() {
    return view('login');
});

Route::get('/login', $ControllersPath.'\CommController@index');

Route::get('/register', $ControllersPath.'\CommController@index');

Route::get('/contact', $ControllersPath.'\CommController@index');

Route::get('/about', $ControllersPath.'\CommController@index');