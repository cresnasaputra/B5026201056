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

//route CRUD Pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
//edit
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
//delete
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
//cari
Route::get('/pegawai/cari','PegawaiController@cari');
//detail
Route::get('/pegawai/view/{id}','PegawaiController@detail');


//route CRUD tugas
Route::get('/tugas','TugasController@index');
Route::get('/tugas/tambah','TugasController@tambah');
Route::post('/tugas/store','TugasController@store');
Route::get('/tugas/edit/{id}','TugasController@edit');
Route::post('/tugas/update','TugasController@update');
Route::get('/tugas/hapus/{id}','TugasController@hapus');


//absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');

//agen
Route::get('/agen','AgenController@index');
Route::get('/agen/view/{id}','AgenController@detail');
Route::get('/agen/tambah','AgenController@tambah');
Route::post('/agen/store','AgenController@store');
Route::get('/agen/hapus/{id}','AgenController@hapus');
Route::get('/agen/cari','AgenController@cari');
Route::get('/agen/edit/{id}','AgenController@edit');
Route::post('/agen/update','AgenController@update');
