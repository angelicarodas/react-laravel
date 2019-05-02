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
    return view('welcome');
});

Auth::routes();

Route::get('/logout', function(){
    Auth::logout();
    return view('auth/login');
});


Route::get('usuario', 'UserController@index');
Route::get('usuario/create', 'UserController@create');
Route::get('usuario/edit', 'UserController@edit');
Route::get('usuario/show', 'UserController@viewShow');
Route::get('users', 'UserController@getUser');
Route::get('users/{id}', 'UserController@show');
Route::post('users', 'Auth\RegisterController@create');
Route::put('users/{id}', 'UserController@update');
Route::delete('users/{id}', 'UserController@delete');

Route::get('/home', 'HomeController@index')->name('home');
