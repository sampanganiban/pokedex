<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

// Create a route to the register page
Route::get('auth/register', 'Auth\AuthController@getRegister');

// Create a route for where the registration form will go
Route::post('auth/register', 'Auth\AuthController@postRegister');
