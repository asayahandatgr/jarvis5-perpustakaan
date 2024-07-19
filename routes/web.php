<?php

use App\Http\Controllers\Admin AS ADMIN;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('/')->group(function () {

        Route::get('/admin', [ADMIN\DashboardController::class, 'index'])->name('admin.dashboard');

        // Genre
        Route::get('admin/genre', [ADMIN\GenreController::class, 'index'])->name('genre.index');
        Route::get('admin/genre/create', [ADMIN\GenreController::class, 'create'])->name('genre.create');
        Route::get('admin/genre/edit/{id}', [ADMIN\GenreController::class, 'edit'])->name('genre.edit');
        Route::post('admin/genre/store', [ADMIN\GenreController::class, 'store'])->name('genre.store');
        Route::delete('admin/genre/delete/{id}', [ADMIN\GenreController::class, 'delete'])->name('genre.delete');
        // Buku
        Route::get('admin/buku', [ADMIN\BukuController::class, 'index'])->name('buku.index');
        Route::get('admin/buku/create', [ADMIN\BukuController::class, 'create'])->name('buku.create');
        Route::get('admin/buku/edit/{id}', [ADMIN\BukuController::class, 'edit'])->name('buku.edit');
        Route::post('admin/buku/store', [ADMIN\BukuController::class, 'store'])->name('buku.store');
        Route::delete('admin/buku/delete/{id}', [ADMIN\BukuController::class, 'delete'])->name('buku.delete');
        
        // Petugas
        Route::get('admin/petugas', [ADMIN\PetugasController::class, 'index'])->name('petugas.index');
        Route::get('admin/petugas/create', [ADMIN\PetugasController::class, 'create'])->name('petugas.create');
        Route::get('admin/petugas/edit/{id}', [ADMIN\PetugasController::class, 'edit'])->name('petugas.edit');
        Route::post('admin/petugas/store', [ADMIN\PetugasController::class, 'store'])->name('petugas.store');
        Route::delete('admin/petugas/delete/{id}', [ADMIN\PetugasController::class, 'delete'])->name('petugas.delete');
        
        // Peminjaman
        Route::get('admin/peminjaman', [ADMIN\PeminjamanController::class, 'index'])->name('peminjaman.index');
        Route::get('admin/peminjaman/create', [ADMIN\PeminjamanController::class, 'create'])->name('peminjaman.create');
        Route::get('admin/peminjaman/edit/{id}', [ADMIN\PeminjamanController::class, 'edit'])->name('peminjaman.edit');
        Route::post('admin/peminjaman/store', [ADMIN\PeminjamanController::class, 'store'])->name('peminjaman.store');
        Route::delete('admin/peminjaman/delete/{id}', [ADMIN\PeminjamanController::class, 'delete'])->name('peminjaman.delete');
        
        // Pengembalian
        Route::get('admin/pengembalian', [ADMIN\PengembalianController::class, 'index'])->name('pengembalian.index');
        Route::get('admin/pengembalian/create', [ADMIN\PengembalianController::class, 'create'])->name('pengembalian.create');
        Route::get('admin/pengembalian/edit/{id}', [ADMIN\PengembalianController::class, 'edit'])->name('pengembalian.edit');
        Route::post('admin/pengembalian/store', [ADMIN\PengembalianController::class, 'store'])->name('pengembalian.store');
        Route::delete('admin/pengembalian/delete/{id}', [ADMIN\PengembalianController::class, 'delete'])->name('pengembalian.delete');
        
        // Pembelian
        Route::get('admin/pembelian', [ADMIN\PembelianController::class, 'index'])->name('pembelian.index');
        Route::get('admin/pembelian/create', [ADMIN\PembelianController::class, 'create'])->name('pembelian.create');
        Route::get('admin/pembelian/edit/{id}', [ADMIN\PembelianController::class, 'edit'])->name('pembelian.edit');
        Route::post('admin/pembelian/store', [ADMIN\PembelianController::class, 'store'])->name('pembelian.store');
        Route::delete('admin/pembelian/delete/{id}', [ADMIN\PembelianController::class, 'delete'])->name('pembelian.delete');
        

    });
});

require __DIR__.'/auth.php';
