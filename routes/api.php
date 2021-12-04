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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('articles', '\App\Http\Controllers\ArticlesController@returnArticles');
Route::get('/users', '\App\Http\Controllers\UserController@userlistsAPI');
Route::get('/userlist', '\App\Http\Controllers\UserController@userlistsAPI');

Route::post('/register', '\App\Http\Controllers\UserController@register');
