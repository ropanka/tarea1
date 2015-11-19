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

Route::get('/', function () {
    return view('auth.login');
});
Route::get('/main', function () {
    return view('template.main');
});

// Authentication routes...
Route::get('/login', [
	'uses'	=>'Auth\AuthController@getLogin',
	'as'	=>'login']);
Route::post('/login', [
	'uses' 	=>'Auth\AuthController@postLogin',
	'as'	=>'login']);
Route::get('/logout', [
	'uses'	=>'Auth\AuthController@getLogout',
	'as'	=>'logout']);