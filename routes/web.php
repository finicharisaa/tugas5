<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/tambah', 'MahasiswaController@tambah');
Route::post('/mahasiswa/store','MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}','MahasiswaController@edit');
Route::put('/mahasiswa/update/{id}','MahasiswaController@update');
Route::get('/mahasiswa/hapus/{id}','MahasiswaController@delete');
