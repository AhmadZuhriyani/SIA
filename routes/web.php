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



Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm');

// dashboard
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// data admin
Route::get('/data-admin', 'HomeController@dataadmin')->name('dataadmin');
Route::get('/data-admin/tambah', 'HomeController@tambahdataadmin')->name('tambahdataadmin');
Route::post('/data-admin/tambah', 'HomeController@submittambahdataadmin')->name('submittambahdataadmin');
Route::get('/data-admin/{Id}/edit', 'HomeController@editdataadmin')->name('editdataadmin');
Route::post('/data-admin/{Id}/edit', 'HomeController@submiteditdataadmin')->name('submiteditdataadmin');
Route::GET('/data-admin/{Id}/hapus', 'HomeController@hapusdataadmin')->name('hapusdataadmin');

// data mahasiswa
Route::get('/data-mahasiswa', 'HomeController@datamahasiswa')->name('datamahasiswa');
Route::get('/data-mahasiswa/tambah', 'HomeController@tambahdatamahasiswa')->name('tambahdatamahasiswa');
Route::post('/data-mahasiswa/tambah', 'HomeController@submittambahdatamahasiswa')->name('submittambahdatamahasiswa');
Route::get('/data-mahasiswa/{Id}/edit', 'HomeController@editdatamahasiswa')->name('editdatamahasiswa');
Route::post('/data-mahasiswa/{Id}/edit', 'HomeController@submiteditdatamahasiswa')->name('submiteditdatamahasiswa');
Route::GET('/data-mahasiswa/{Id}/hapus', 'HomeController@hapusdatamahasiswa')->name('hapusdatamahasiswa');

// data matakuliah
Route::get('/data-matakuliah', 'HomeController@datamatakuliah')->name('datamatakuliah');
Route::get('/data-matakuliah/tambah', 'HomeController@tambahdatamatakuliah')->name('tambahdatamatakuliah');
Route::post('/data-matakuliah/tambah', 'HomeController@submittambahdatamatakuliah')->name('submittambahdatamatakuliah');
Route::get('/data-matakuliah/{Id}/edit', 'HomeController@editdatamatakuliah')->name('editdatamatakuliah');
Route::post('/data-matakuliah/{Id}/edit', 'HomeController@submiteditdatamatakuliah')->name('submiteditdatamatakuliah');
Route::GET('/data-petugas/{Id}/hapus', 'HomeController@hapusdatamatakuliah')->name('hapusdatamatakuliah');

// data jurusan
Route::get('/data-jurusan', 'HomeController@datajurusan')->name('datajurusan');
Route::get('/data-jurusan/tambah', 'HomeController@tambahdatajurusan')->name('tambahdatajurusan');
Route::post('/data-jurusan/tambah', 'HomeController@submittambahdatajurusan')->name('submittambahdatajurusan');
Route::get('/data-jurusan/{Id}/edit', 'HomeController@editdatajurusan')->name('editdatajurusan');
Route::post('/data-jurusan/{Id}/edit', 'HomeController@submiteditdatajurusan')->name('submiteditdatajurusan');
Route::GET('/data-jurusan/{Id}/hapus', 'HomeController@hapusdatajurusan')->name('hapusdatajurusan');

