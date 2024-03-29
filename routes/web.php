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
Route::get('/', 'AuthController@ReadLoginPage')->name('login.read');
Route::get('/home', 'HomeController@ReadDashboard')->name('home');
Route::get('/datatable', 'DataController@ReadDataTable')->name('datatable.read');
Route::get('/datatable/{id}', 'DataController@DetailDataTable')->name('datatable.detail');
Route::get('/editdatatable/{id}', 'DataController@EditDataTable')->name('datatable.edit');
Route::post('/datatable/edit/post', 'DataController@PostEditDataTable')->name('datatable.edit.post');
Route::post('/datatable/delete', 'DataController@DeleteDataTable')->name('datatable.delete');
Route::post('/datatable/post', 'DataController@PostDataTable')->name('datatable.post');
Route::get('/datagrafik', 'DataController@ReadDataGrafik')->name('datagrafik.read');
Route::get('/datamaps', 'DataController@ReadDataMaps')->name('datamaps.read');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
