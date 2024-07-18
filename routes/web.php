<?php

use App\Http\Controllers\Admin AS ADMIN;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin', [ADMIN\DashboardController::class, 'index']);

// Genre
Route::get('admin/genre', [ADMIN\GenreController::class, 'index'])->name('genre.index');

// Buku
Route::get('admin/buku', [ADMIN\BukuController::class, 'index'])->name('buku.index');

// Petugas
Route::get('admin/petugas', [ADMIN\PetugasController::class, 'index'])->name('petugas.index');

// Peminjaman
Route::get('admin/peminjaman', [ADMIN\PeminjamanController::class, 'index'])->name('peminjaman.index');

// Pengembalian
Route::get('admin/pengembalian', [ADMIN\PengembalianController::class, 'index'])->name('pengembalian.index');
