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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PrincipalController@Principal');

Route::post('/login', 'PrincipalController@Login');


Route::get('/consejales', function () {
    return view('mis_consejales');
});

Route::get('login', 'Auth\PrincipalController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\PrincipalController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\PrincipalController@getLogout']);


