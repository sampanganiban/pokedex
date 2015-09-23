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
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Create a route for where the registration form will go
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('pokecentre', 'PokecentreController@index');
Route::get('pokecentre/capture', 'PokecentreController@capture');
Route::post('pokecentre/capture', 'PokecentreController@postCapture');

// Display the pokedex
Route::get('pokedex', 'PokedexController@index');
Route::get('pokedex/{name}', 'PokedexController@show');
