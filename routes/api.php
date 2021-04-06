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


Route::get('profile', 'UserController@getAuthenticatedUser')->middleware('jwt.verify');;

Route::post('register','UserController@register');
Route::post('login','UserController@login');

Route::get('/', function(){
    return "Welcome to Baduma Api Services!";
})->middleware('jwt.verify');


