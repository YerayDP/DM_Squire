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
Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');
Route::get('spells', 'API\FiltroAPIController@spellGlobalList');
Route::get('weapons', 'API\FiltroAPIController@weaponGlobalList');
Route::get('backgrounds', 'API\FiltroAPIController@backgroundGlobalList');
Route::get('races', 'API\FiltroAPIController@raceGlobalList');
Route::get('categories', 'API\FiltroAPIController@categoryGlobalList');
Route::get('PJs', 'API\FiltroAPIController@PJGlobalList');
Route::post('createPJ', 'API\FiltroAPIController@createPJ');
Route::post('deletePJ', 'API\FiltroAPIController@deletePJ');