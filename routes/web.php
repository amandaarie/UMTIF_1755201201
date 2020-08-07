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
Route::get('/', 'MahasiswaController@index');

    //Mahasiswa (Route dengan detail satu persatu)
Route::get('/mhs', 'MahasiswaController@index')->name('mhs.index');
Route::get('/mhs/list', 'MahasiswaController@mhs_list')->name('mhs.list');
Route::get('/mhs/create', 'MahasiswaController@create')->name('mhs.create');
Route::post('/mhs/store', 'MahasiswaController@store');
Route::get('/mhs/edit/{nim}', 'MahasiswaController@edit');
Route::put('/mhs/update/{mahasiswa:nim}', 'MahasiswaController@update')->name('mhs.update');
Route::get('/mhs/delete/{mahasiswa:nim}', 'MahasiswaController@destroy')->name('mhs.delete');

    //Prodi (Route Framework)
Route::get('/prodi', 'ProdiController@index')->name('prodi.index');
Route::get('/prodi/list', 'ProdiController@prodi_list')->name('prodi.list');
Route::resource('/prodi', 'ProdiController');

// Dosen
Route::get('/dosen', 'DosenController@index')->name('dosen.index');
Route::get('/dosen_list', 'DosenController@dosen_list')->name('dosen_list');
Route::get('/dosen/create', 'DosenController@create');
Route::post('/dosen/store', 'DosenController@store');
Route::get('/dosen/edit/{kode_dosen}', 'DosenController@edit');
Route::put('/dosen/update/{dosen:kode_dosen}', 'DosenController@update')->name('dosen.update');
Route::get('/dosen/delete/{dosen:kode_dosen}', 'DosenController@destroy')->name('dosen.delete');