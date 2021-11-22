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

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugas4', function () {
    return view('tug4');
});

Route::get('praktikum2', 'ViewController@showPraktikum2');
Route::get('ets', 'ViewController@showEts');

Route::get('formpenjumlahan', 'ViewController@formLuas');
Route::post('hasilpenjumlahan', 'ViewController@luasfunc');

//route CRUD
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');

//edit
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');

//delete
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');


//tugas===============================================================================
//route CRUD
Route::get('/tugas','TugasController@index');

Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');

Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');

Route::get('/tugas/hapus/{id}','TugasController@hapus');
