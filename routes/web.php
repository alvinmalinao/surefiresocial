<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'LoginController@index')->name('login');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'LoginController@register');

Route::post('/createuser', 'LoginController@createuser');
Route::post('/login', 'LoginController@login');


