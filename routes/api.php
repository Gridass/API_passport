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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/hello', function (){
    return ['Hello'];
})->middleware(['auth:api', 'scope:hello']);

Route::get('/goodbye', function (){
    return ['Goodbye'];
})->middleware(['auth:api', 'scope:goodbye']);