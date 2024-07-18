<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Pengembalian;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index(){
        $pengembalian = Pengembalian::all();

        return view('admin.pengembalian.index', compact("pengembalian"));
    }
    public function create(){
        $peminjaman = Peminjaman::all();
        $buku = Buku::all();
        $petugas = Petugas::all();
        return view('admin.pengembalian.create', compact('peminjaman', 'buku', 'petugas'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'peminjaman_id' => 'required',
            'tanggal_kembali' => 'required',
            'jumlah_hari' => 'required',
            'buku_id' => 'required',
            'petugas_id' => 'required',
        ]);

        if (isset($request->id)) {
            $pengembalian = Pengembalian::find($request->id);
            $pengembalian->update($data);
        } else {
            Pengembalian::create($data);
        }

        return redirect()->route('pengembalian.index');
    }

    public function delete(string $id){
        $pengembalian = Pengembalian::find($id);
        $pengembalian->delete();
        return redirect()->route('pengembalian.index');
    }

    public function edit(string $id){
        $pengembalian = Pengembalian::find($id);
        $peminjaman = Peminjaman::all();
        $buku = Buku::all();
        $petugas = Petugas::all();
        if (!$pengembalian){
            return redirect()->back();
        }

        return view('admin.pengembalian.edit', compact('pengembalian', 'peminjaman', 'buku', 'petugas'));
    }
}
