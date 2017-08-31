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


Route::get('/', 'CariController@index2');

Route::get('/pencairan', 'PencairanController@index');
Route::get('/pencairan/showmahasiswa/{sk_id}', 'PencairanController@showmahasiswa');