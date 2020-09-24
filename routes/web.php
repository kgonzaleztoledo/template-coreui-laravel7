<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'LandingController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
