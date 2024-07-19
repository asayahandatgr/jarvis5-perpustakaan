<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Genre;
use App\Models\Peminjaman;
use App\Models\Petugas;
use Illuminate\Http\Request;

class FormborController extends Controller
{
    // Menampilkan halaman form
    public function index()
    {
        // Mengambil semua data buku dan petugas
        $genre = Genre::all();
        $buku = Buku::all();
        $petugas = Petugas::all();

        // Mengambil semua data Peminjaman beserta relasinya
        $formborrow = Peminjaman::with('genre', 'petugas', 'buku')->get();

        // Menampilkan view dengan data yang diperlukan
        return view('formborrow.index', compact('buku', 'petugas', 'genre', 'formborrow'));
    }

    // Menyimpan data Peminjaman
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'nama_peminjam' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'ktm' => 'required',
            'genre_id' => 'required',
            'buku_id' => 'required',
            'petugas_id' => 'required',
            'status_peminjam' => 'required',
        ]);

        // Simpan data ke tabel Peminjaman
        $peminjaman = Peminjaman::create([
            'nama_peminjam' => $validatedData['nama_peminjam'],
            'mulai' => $validatedData['mulai'],
            'selesai' => $validatedData['selesai'],
            'ktm' => $validatedData['ktm'],
            'genre_id' => $validatedData['genre_id'],
            'buku_id' => $validatedData['buku_id'],
            'petugas_id' => $validatedData['petugas_id'],
            'status_peminjam' => $validatedData['status_peminjam'],
        ]);

        return redirect()->route('formborrow.show', ['id' => $peminjaman->id])
            ->with('success', 'Data Peminjaman berhasil disimpan');
    }

    // Menampilkan detail Peminjaman
    public function show($id)
    {
        // Mencari data Peminjaman berdasarkan ID
        $formborrow = Peminjaman::with('buku', 'genre', 'petugas')->findOrFail($id);

        // Menampilkan view dengan data Peminjaman
        return view('formborrow.show', compact('formborrow'));
    }
}
