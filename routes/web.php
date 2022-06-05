<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Redirect::to('login');
});
Route::get('/login', function () {
    return Redirect::to('login');
});

Auth::routes();

Route::get('/admin', 'UsersController@index')->name('admin');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 })->name('logout');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('admin','UsersController');
    Route::resource('races', 'RaceController');
    Route::resource('background', 'BackgroundController');
    Route::resource('categories', 'CategoryController');
    Route::resource('spells', 'SpellController');
    Route::resource('items', 'ItemController');
    Route::resource('weapons', 'WeaponController');
    Route::resource('users', 'UsersController');
    Route::resource('PJs', 'PJController');

 });

 
Route::post('user/activate/{id}', 'UsersController@activate')->name('activar');
Route::post('user/deactivate/{id}','UsersController@deactivate')->name('desactivar');