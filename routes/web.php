<?php

use App\Http\Controllers\GuruController;
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



Route::get('/login', function () {
    return view('Pengguna.Login');
})->name('login');

Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    route::get('/beranda', 'BerandaController@index');
});

Route::get('/data-guru', 'GuruController@index')->name('data-guru');
Route::get('/create-guru', 'GuruController@create')->name('create-guru');
Route::post('/simpan-guru', 'GuruController@store')->name('simpan-guru');
Route::get('/Guru/{id}/edit', 'GuruController@edit')->name('edit-guru');
Route::patch('/Guru/{id}', 'GuruController@update')->name('update-guru');
Route::get('/Guru/{id}', 'GuruController@destroy')->name('delete-guru');


Route::get('/data-jadwal', 'JadwalController@index')->name('data-jadwal');
Route::get('/create-jadwal', 'JadwalController@create')->name('create-jadwal');
Route::post('/simpan-jadwal', 'JadwalController@store')->name('simpan-jadwal');
Route::get('/Jadwal/{id}/edit', 'JadwalController@edit')->name('edit-jadwal');
Route::patch('/Jadwal/{id}', 'JadwalController@update')->name('update-jadwal');
Route::get('/Jadwal/{id}', 'JadwalController@destroy')->name('delete-jadwal');

Route::get('/data-kelas', 'KelasController@index')->name('data-kelas');
Route::get('/create-kelas', 'KelasController@create')->name('create-kelas');
Route::post('/simpan-kelas', 'KelasController@store')->name('simpan-kelas');
Route::get('/Kelas/{id}/edit', 'KelasController@edit')->name('edit-kelas');
Route::patch('/Kelas/{id}', 'KelasController@update')->name('update-kelas');
Route::get('/Kelas/{id}', 'KelasController@destroy')->name('delete-kelas');

Route::get('/data-mapel', 'MapelController@index')->name('data-mapel');
Route::get('/create-mapel', 'MapelController@create')->name('create-mapel');
Route::post('/simpan-mapel', 'MapelController@store')->name('simpan-mapel');
Route::get('/Mapel/{id}/edit', 'MapelController@edit')->name('edit-mapel');
Route::patch('/Mapel/{id}', 'MapelController@update')->name('update-mapel');
Route::get('/Mapel/{id}', 'MapelController@destroy')->name('delete-mapel');

Route::get('/data-siswa', 'SiswaController@index')->name('data-siswa');
Route::get('/create-siswa', 'SiswaController@create')->name('create-siswa');
Route::post('/simpan-siswa', 'SiswaController@store')->name('simpan-siswa');
Route::get('/Siswa/{id}/edit', 'SiswaController@edit')->name('edit-siswa');
Route::patch('/Siswa/{id}', 'SiswaController@update')->name('update-siswa');
Route::get('/Siswa/{id}', 'SiswaController@destroy')->name('delete-siswa');