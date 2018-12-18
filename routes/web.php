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

Route::get('/home','DrakorController@index');
Route::get('/show/{id}','DrakorController@show');
Route::get('/genre/{id}','DrakorController@genre');
//admin
Route::get('/admin','adminController@index');
Route::get('/admin/tambahbaru','adminController@create');
Route::post('/admin/tambahbaru','adminController@simpan');
Route::get('/admin/edit/{id}','adminController@edit');
Route::get('/admin/hapus/{id}','adminController@delete');
Route::post('/admin/update','adminController@update');