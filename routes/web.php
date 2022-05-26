<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\TalentController;
use App\Http\Requests\DaftarMahasiswa;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TalentaController;
use App\Http\Controllers\FileUploadController;

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
    return view('guesthome');
})->name('home');
Route::get('/findjob', function () {
    return view('daftar');
})->name('findjob');
Route::get('/findtalent', [TalentaController::class, 'index'])->name('findtalent');
Route::get('/cari', [TalentController::class, 'cari'])->name('cari');
Route::get('/profil/{id}', [PageController::class, 'profil'])->name('profil');
Route::get('/profil/own', [PageController::class, 'ownprofil'])->name('ownprofil');



Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/daftar', [TalentaController::class, 'create'])->name('daftar');


Route::get('/about', function () {
    return view('about');
})->name('about');

//Modul8
// Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
// Route::get('/insert-sql', [MahasiswaController::class, 'insertSql']);
// Route::get('/insert-timestamp', [MahasiswaController::class, 'insertTimeStamp']);
// Route::get('/insert-prepared', [MahasiswaController::class, 'insertPrepared']);
// Route::get('/insert-binding', [MahasiswaController::class, 'insertBinding']);
// Route::get('/update', [MahasiswaController::class, 'update']);
// Route::get('/delete', [MahasiswaController::class, 'delete']);
// Route::get('/select', [MahasiswaController::class, 'select']);
// Route::get('/select-tampil', [MahasiswaController::class, 'selectTampil']);
// Route::get('/select-view', [MahasiswaController::class, 'selectView']);
// Route::get('/select-where', [MahasiswaController::class, 'selectWhere']);
Route::get('/statement', [MahasiswaController::class, 'statement']);

//Modul09
// Route::get('/insert', [MahasiswaController::class, 'insert']);
// Route::get('/insert-banyak', [MahasiswaController::class, 'insertBanyak']);
// Route::get('/update', [MahasiswaController::class, 'update']);
// Route::get('/update-where', [MahasiswaController::class, 'updateWhere']);
// Route::get('/update-or-insert', [MahasiswaController::class, 'updateOrInsert']);
// Route::get('/delete', [MahasiswaController::class, 'delete']);
// Route::get('/get-tampil', [MahasiswaController::class, 'getTampil']);
// Route::get('/get-view', [MahasiswaController::class, 'getView']);
// Route::get('/get-where', [MahasiswaController::class, 'getWhere']);
// Route::get('/get-where', [MahasiswaController::class, 'getWhere']);
// Route::get('/select', [MahasiswaController::class, 'select']);
// Route::get('/take', [MahasiswaController::class, 'take']);
// Route::get('/first', [MahasiswaController::class, 'first']);
// Route::get('/find', [MahasiswaController::class, 'find']);
// Route::get('/raw', [MahasiswaController::class, 'raw']);

//ELOQUENT ORM
Route::get('/cek-object', [MahasiswaController::class, 'cekObject']);
Route::get('/insert2', [MahasiswaController::class, 'insert']);
Route::get('/mass-assigment', [MahasiswaController::class, 'massAssigment']);
Route::get('/mass-assigment2', [MahasiswaController::class, 'massAssigment2']);
Route::get('/update', [MahasiswaController::class, 'update']);
Route::get('/update-where', [MahasiswaController::class, 'updateWhere']);
Route::get('/mass-update', [MahasiswaController::class, 'massUpdate']);
Route::get('/delete', [MahasiswaController::class, 'delete']);
Route::get('/destroy', [MahasiswaController::class, 'destroy']);
Route::get('/mass-delete', [MahasiswaController::class, 'massDelete']);
Route::get('/all', [MahasiswaController::class, 'all']);
Route::get('/all-view', [MahasiswaController::class, 'allVieew']);
Route::get('/get-where', [MahasiswaController::class, 'getWhere']);
Route::get('/test-where', [MahasiswaController::class, 'testWhere']);
Route::get('/first', [MahasiswaController::class, 'first']);
Route::get('/find', [MahasiswaController::class, 'find']);
Route::get('/latest', [MahasiswaController::class, 'latest']);
Route::get('/limit', [MahasiswaController::class, 'limit']);
Route::get('/skip-take', [MahasiswaController::class, 'skipTake']);
Route::get('/soft-delete', [MahasiswaController::class, 'softDelete']);
Route::get('/with-trashed', [MahasiswaController::class, 'withTrashed']);
Route::get('/restore', [MahasiswaController::class, 'restore']);
Route::get('/all-tampil', [MahasiswaController::class, 'allTampil']);
Route::get('/force-delete', [MahasiswaController::class, 'forceDelete']);
//PENANGANAN FORM
// Route::get('/daftar', [MahasiswaController::class, 'index']);
Route::post('/proses-form', [MahasiswaController::class, 'prosesForm']);
Route::post('/proses-form-validator', [MahasiswaController::class, 'prosesFormValidator']);
Route::post('/proses-form-custom', [MahasiswaController::class, 'prosesFormCustom']);
//CRUD
Route::post('/proses-daftar', [TalentController::class, 'prosesDaftar']);
Route::post('/proses-masuk', [TalentaController::class, 'prosesMasuk']);
//
//CRUD RESTFULL
route::resource('/talentas', TalentaController::class);

//Upload
Route::get('/upload', [FileUploadController::class, 'fileUpload']);
Route::post('/proses-file-upload', [FileUploadController::class, 'prosesFileUpload']);

Route::post('/proses-logout', [TalentaController::class, 'prosesLogout']);
Route::get('/export-pdf', [TalentaController::class, 'exportPdf']);


