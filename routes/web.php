<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\WelcomeController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/tambah', [KategoriController::class, 'create']);
Route::post('/kategori/store', [KategoriController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('/kategori/update/{id}', [KategoriController::class, 'update']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'delete']);
Route::get('/kategori/destroy/{id}', [KategoriController::class, 'destroy']);

Route::post('/Order', [WelcomeController::class, 'CreateInformasi'])->name('information');
Route::get('/informasi', [InformasiController::class, 'index']);
Route::get('/', [WelcomeController::class, 'index']);

Route::get('/informasi/cetak', [InformasiController::class, 'cetak']);