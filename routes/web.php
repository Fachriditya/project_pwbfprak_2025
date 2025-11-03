<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\JenisHewanController;
use App\Http\Controllers\Admin\RasHewanController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\KategoriKlinisController;
use App\Http\Controllers\Admin\TindakanTerapiController;
use App\Http\Controllers\Admin\PetController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;

Route::get('/cek-koneksi', [SiteController::class, 'cekKoneksi'])->name('site.cek-koneksi');

Route::get('/', [SiteController::class, 'index'])->name('site.home');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('site.home');
})->name('site.home');

Route::get('/tentang-kami', function () {
    return view('site.tentang-kami');
})->name('site.tentang-kami');

Route::get('/layanan', function () {
    return view('site.layanan');
})->name('site.layanan');

Route::get('/kontak', function () {
    return view('site.kontak');
})->name('site.kontak');

Route::get('/admin/jenis-hewan', [JenisHewanController::class, 'index'])
->name('admin.jenis-hewan.index');

Route::get('/admin/ras-hewan', [RasHewanController::class, 'index'])
->name('admin.ras-hewan.index');

Route::get('/admin/kategori', [KategoriController::class, 'index'])
->name('admin.kategori.index');

Route::get('/admin/kategori-klinis', [KategoriKlinisController::class, 'index'])
->name('admin.kategori-klinis.index');

Route::get('/admin/tindakan-terapi', [TindakanTerapiController::class, 'index'])
->name('admin.tindakan-terapi.index');

Route::get('/admin/pet', [PetController::class, 'index'])
->name('admin.pet.index');

Route::get('/admin/role', [RoleController::class, 'index'])
->name('admin.role.index');

Route::get('/admin/user', [UserController::class, 'index'])
->name('admin.user.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
