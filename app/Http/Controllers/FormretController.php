<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Petugas;
use Illuminate\Http\Request;

class FormretController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::all();
        $buku = Buku::all();
        $petugas = Petugas::all();

        $formret = Pengembalian::with('peminjaman', 'petugas', 'buku')->get();

        return view('formret.index', compact('buku', 'petugas', 'peminjaman', 'formret'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'peminjaman_id' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah_hari' => 'required',
            'buku_id' => 'required',
            'petugas_id' => 'required',
        ]);

        $pengembalian = Pengembalian::create([
            'peminjaman_id' => $validatedData['peminjaman_id'],
            'tanggal_kembali' => $validatedData['tanggal_kembali'],
            'jumlah_hari' => $validatedData['jumlah_hari'],
            'buku_id' => $validatedData['buku_id'],
            'petugas_id' => $validatedData['petugas_id'],
        ]);

        return redirect()->route('formret.show', ['id' => $pengembalian->id])
            ->with('success', 'Data Pengembalian berhasil disimpan');
    }

    public function show($id)
    {
        $formret = Pengembalian::with('buku', 'peminjaman', 'petugas')->findOrFail($id);

        return view('formret.show', compact('formret'));
    }
}
