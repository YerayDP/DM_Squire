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
Route::get('/userPanel', 'UsersController@userP')->name('user');
Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('login');
 })->name('logout');

Route::resource('admin','UsersController');
