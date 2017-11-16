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

//Route::get('/TambahMahasiswa', function () {
  //  return view('servis/TambahMahasiswa');
//});

Route::get('/TambahMahasiswa','MahasiswaController@create');
Route::get('/StoreTambahMahasiswa','MahasiswaController@store');
Route::get('/ListMahasiswa','MahasiswaController@list');
