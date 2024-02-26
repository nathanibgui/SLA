<?php

use Illuminate\Http\Request;

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

Route::get('', function () {
    return response()->json(['hello' => 'world']);
});

Route::get('/health', 'HealthController@index');
Route::get('/message', 'ChatController@list');
Route::post('/message', 'ChatController@create');
