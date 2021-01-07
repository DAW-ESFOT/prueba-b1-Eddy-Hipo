<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('movies', 'App\Http\Controllers\MovieController@index');
Route::get('movies/{movie}', 'App\Http\Controllers\MovieController@show');
Route::post('movies', 'App\Http\Controllers\MovieController@store');
Route::put('movies/{movie}', 'App\Http\Controllers\MovieController@update');
Route::delete('movies/{movie}', 'App\Http\Controllers\MovieController@delete');

Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('users/{user}', 'App\Http\Controllers\UserController@show');
Route::post('users', 'App\Http\Controllers\UserController@store');
Route::put('users/{user}', 'App\Http\Controllers\UserController@update');
Route::delete('users/{user}', 'App\Http\Controllers\UserController@delete');

Route::get('genres', 'App\Http\Controllers\GenreController@index');
Route::get('genres/{genre}', 'App\Http\Controllers\GenreController@show');
Route::post('genres', 'App\Http\Controllers\GenreController@store');
Route::put('genres/{genre}', 'App\Http\Controllers\GenreController@update');
Route::delete('genres/{genre}', 'App\Http\Controllers\GenreController@delete');


//literal f
Route::get('genres/{genre}/movies', 'App\Http\Controllers\GenreController@showGenre');

//literal g
Route::get('users/{user}/genres', 'App\Http\Controllers\UserController@showUser');
