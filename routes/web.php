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
//Index
Route::get('/', 'HomeController@index');

//Modul Mahasiswa
Route::get('/mahasiswa', 'ControllerMahasiswa@index');
Route::get('/tambahmahasiswa', 'ControllerMahasiswa@tambah');
Route::post('/savemahasiswa', 'ControllerMahasiswa@save');
Route::get('/ubahmahasiswa/{id}', 'ControllerMahasiswa@ubah');
Route::post('/updatemahasiswa/{id}', 'ControllerMahasiswa@update');
Route::get('/hapusmahasiswa/{id}', 'ControllerMahasiswa@hapus');
