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

Route::get('/', function () {
    return view('welcome');
});
//------------------------------------------
// Room Routes
//------------------------------------------
Route::post('/room', 'App\Http\Controllers\RoomController@store');
Route::get('/room{room}', 'App\Http\Controllers\RoomController@show');
Route::get('/online/{room}', 'App\Http\Controllers\RoomController@online');

//------------------------------------------
Route::post('/sdp/{room}', 'App\Http\Controllers\SdpController@store');
