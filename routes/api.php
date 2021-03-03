<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

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

Route::get('/posts','App\Http\Controllers\PostsApiController@index');

Route::post('/posts','App\Http\Controllers\PostsApiController@store');

Route::patch('/posts/{post}','App\Http\Controllers\PostsApiController@update');

Route::delete('/posts/{post}','App\Http\Controllers\PostsApiController@destroy');
