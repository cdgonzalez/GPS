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

use Illuminate\Http\Request;


/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'PrincipalController@Principal');

Route::post('/Login', 'PrincipalController@Login');

Route::get('/administrador/{nombreAdmin}', function($nombre){
    return view('administrador')->with('nombre',$nombre);
});

Route::get('/consejales', function () {
    return view('mis_consejales');
});

Route::get('login', 'Auth\PrincipalController@getLogin');
Route::post('login', ['as' =>'login', 'uses' => 'Auth\PrincipalController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\PrincipalController@getLogout']);


