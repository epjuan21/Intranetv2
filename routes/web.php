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

Route::get('/', 'MyController@index');
Route::get('/crear', 'MyController@create');
Route::get('/articulos', 'MyController@store');
Route::get('/mostrar', 'MyController@show');

Route::get('/indicadores', 'IndicadoresController@indicadores');