<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Pembelian;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class FormbuyController extends Controller
{
    // Menampilkan halaman form
    public function index()
    {
        // Mengambil semua data buku dan petugas
        $buku = Buku::all();
        $petugas = Petugas::all();

        // Mengambil semua data pembelian beserta relasinya
        $formbuy = Pembelian::with('buku', 'petugas')->get();

        // Menampilkan view dengan data yang diperlukan
        return view('formbuy.index', compact('buku', 'petugas', 'formbuy'));
    }

    // Menyimpan data pembelian
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'nama_pembeli' => 'required|string|max:255',
            'telefon' => 'required|string|max:20',
            'buku_id' => 'required|exists:buku,id',
            'harga_buku' => 'required|numeric',
            'petugas_id' => 'required|exists:petugas,id',
            'status_pembelian' => 'required|in:Berhasil,Gagal',
        ]);

        // Simpan data ke tabel pembelian
        $pembelian = Pembelian::create([
            'tanggal' => $validatedData['tanggal'],
            'nama_pembeli' => $validatedData['nama_pembeli'],
            'telefon' => $validatedData['telefon'],
            'buku_id' => $validatedData['buku_id'],
            'harga_buku' => $validatedData['harga_buku'],
            'petugas_id' => $validatedData['petugas_id'],
            'status_pembelian' => $validatedData['status_pembelian'],
        ]);

        return redirect()->route('formbuy.show', ['id' => $pembelian->id])
            ->with('success', 'Data Pembelian berhasil disimpan');
    }

    // Menampilkan detail pembelian
    public function show($id)
    {
        // Mencari data pembelian berdasarkan ID
        $formbuy = Pembelian::with('buku', 'petugas')->findOrFail($id);

        // Menampilkan view dengan data pembelian
        return view('formbuy.show', compact('formbuy'));
    }
}
