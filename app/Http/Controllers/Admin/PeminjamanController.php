<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Genre;
use App\Models\Peminjaman;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index(){
        $peminjaman = Peminjaman::all();

        return view('admin.peminjaman.index', compact("peminjaman"));
    }
    public function create(){
        $genre = Genre::all();
        $buku = Buku::all();
        $petugas = Petugas::all();
        return view('admin.peminjaman.create', compact('genre', 'buku', 'petugas'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'nama_peminjam' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'ktm' => 'required',
            'genre_id' => 'required',
            'buku_id' => 'required',
            'petugas_id' => 'required',
            'status_peminjam' => 'required',
        ]);

        if (isset($request->id)) {
            $peminjaman = Peminjaman::find($request->id);
            $peminjaman->update($data);
        } else {
            Peminjaman::create($data);
        }

        return redirect()->route('peminjaman.index');
    }

    public function delete(string $id){
        $peminjaman = Peminjaman::find($id);
        $peminjaman->delete();
        return redirect()->route('peminjaman.index');
    }

    public function edit(string $id){
        $peminjaman = Peminjaman::find($id);
        $genre = Genre::all();
        $buku = Buku::all();
        $petugas = Petugas::all();
        if (!$peminjaman){
            return redirect()->back();
        }

        return view('admin.peminjaman.edit', compact('peminjaman', 'genre', 'buku', 'petugas'));
    }
}
