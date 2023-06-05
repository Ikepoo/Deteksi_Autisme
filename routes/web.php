<?php

use App\Http\Controllers\C_home;
use Illuminate\Support\Facades\Route;
use App\Models\M_pakar;

use App\Http\Controllers\DC_riwayat;
use App\Http\Controllers\DC_form_riwayat_diagnosa;
use App\Http\Controllers\DC_hasil;
use App\Http\Controllers\DC_form_hasil;
use App\Http\Controllers\DC_perkembangan;
use App\Http\Controllers\DC_form_perkembangan;

use App\Http\Controllers\PC_jadwal;
use App\Http\Controllers\PC_form_jadwal;
use App\Http\Controllers\PC_riwayat;
use App\Http\Controllers\PC_form_riwayat;

use App\Http\Controllers\AC_aturan;
use App\Http\Controllers\AC_form_aturan;
use App\Http\Controllers\AC_gejala;
use App\Http\Controllers\AC_form_gejala;
use App\Http\Controllers\AC_jenis;
use App\Http\Controllers\AC_form_jenis;
use App\Http\Controllers\AC_penanganan;
use App\Http\Controllers\AC_form_penanganan;
use App\Http\Controllers\C_pakar;
use App\Http\Controllers\DB_jenis;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home_page');
});

Route::get('/home_dasboard', [C_home::class, 'tampil'])->name('home_dasboard');

// menu diagnosa
Route::resource('hasil_diagnosa', DC_hasil::class)->names([
    'index' => 'hasil',
    'create' => 'hasil.tambah',
    'edit' => 'hasil.edit',
    'update' => 'hasil.perbarui',
    'destroy' => 'hasil.hapus',
    'store' => 'hasil.upload',
    'show' => 'hasil.tampil'
]);
Route::get('/report_diagnosa', [DC_hasil::class, 'generatePDF'])->name('pdf_diagnosa');


Route::get('/riwayat', [DC_riwayat::class, 'tampil'])->name('riwayat_diagnosa');
// Route::get('/hasil_diagnosa', [DC_hasil::class, 'tampil'])->name('hasil_diagnosa');
Route::get('/perkembangan', [DC_perkembangan::class, 'tampil'])->name('perkembangan');

Route::get('/form_riwayat_diagnosa', [DC_form_riwayat_diagnosa::class, 'tampil'])->name('form_riwayat_diagnosa');
// Route::get('/form_hasil', [DC_form_hasil::class, 'tampil'])->name('form_hasil');
Route::get('/form_perkembangan', [DC_form_perkembangan::class, 'tampil'])->name('form_perkembangan');

// menu pakarx 
Route::resource('jadwal_Konsultasi', PC_jadwal::class)->names([
    'index' => 'jadwal',
    'create' => 'jadwal.tambah',
    'edit' => 'jadwal.edit',
    'update' => 'jadwal.perbarui',
    'destroy' => 'jadwal.hapus',
    'store' => 'jadwal.upload'
]);
Route::resource('riwayat_konsul', PC_riwayat::class)->names([
    'index' => 'riwayat',
    'create' => 'riwayat.tambah',
    'edit' => 'riwayat.edit',
    'update' => 'riwayat.perbarui',
    'destroy' => 'riwayat.hapus',
    'store' => 'riwayat.upload'
]);
Route::get('/report_jadwal', [PC_jadwal::class, 'generatePDF'])->name('pdf_jadwal');
Route::get('/report_konsultasi', [PC_riwayat::class, 'generatePDF'])->name('pdf_konsultasi');


// menu autisme
Route::resource('jenis', AC_jenis::class)->names([
    'index' => 'jenis',
    'create' => 'jenis.tambah',
    'edit' => 'jenis.edit',
    'update' => 'jenis.perbarui',
    'destroy' => 'jenis.hapus',
    'store' => 'jenis.upload'
]);
Route::resource('gejala', AC_gejala::class)->names([
    'index' => 'gejala',
    'create' => 'gejala.tambah',
    'edit' => 'gejala.edit',
    'update' => 'gejala.perbarui',
    'destroy' => 'gejala.hapus',
    'store' => 'gejala.upload'
]);
Route::resource('penanganan', AC_penanganan::class)->names([
    'index' => 'penanganan',
    'create' => 'penanganan.tambah',
    'edit' => 'penanganan.edit',
    'update' => 'penanganan.perbarui',
    'destroy' => 'penanganan.hapus',
    'store' => 'penanganan.upload'
]);
Route::resource('aturan', AC_aturan::class)->names([
    'index' => 'aturan',
    'create' => 'aturan.tambah',
    'edit' => 'aturan.edit',
    'update' => 'aturan.perbarui',
    'destroy' => 'aturan.hapus',
    'store' => 'aturan.upload'
]);
Route::get('/report_gejala', [AC_gejala::class, 'generatePDF'])->name('pdf_gejala');
Route::get('/report_aturan', [AC_aturan::class, 'generatePDF'])->name('pdf_aturan');
Route::get('/report_jenis', [AC_jenis::class, 'generatePDF'])->name('pdf_jenis');
Route::get('/report_penanganan', [AC_penanganan::class, 'generatePDF'])->name('pdf_penanganan');


Route::resource('pakar', C_pakar::class)->names([
    'index' => 'pakar',
    'create' => 'pakar.tambah',
    'edit' => 'pakar.edit',
    'update' => 'pakar.perbarui',
    'destroy' => 'pakar.hapus',
    'store' => 'pakar.upload'
]);
Route::get('/report_pakar', [C_pakar::class, 'generatePDF'])->name('pdf_pakar');
