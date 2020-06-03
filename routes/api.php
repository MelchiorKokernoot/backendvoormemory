<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


Route::post('login', 'PlayerController@login');
Route::get('/user/{user}', 'PlayerController@show');
Route::put('user/{user}', 'PlayerController@update');
Route::post('user', 'PlayerController@store');

Route::get('/games', 'GameController@index');
Route::get('/games/{game}', 'GameController@show');

Route::get('/topscores/{game}', 'HighScoreController@show');
Route::get('/myscores/{user}', 'HighScoreController@myscores');
Route::post('myscores', 'HighScoreController@update');


Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
//    Route::post('/login', 'AuthController@login')->name('login');
//    Route::post('/refresh', 'AuthController@refresh')->name('refresh');

});
