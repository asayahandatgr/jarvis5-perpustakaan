<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Pembelian;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function index(){
        $pembelian = Pembelian::all();
        return view('admin.pembelian.index', compact("pembelian"));
    }

    public function create(){
        $buku = Buku::all();
        $petugas = Petugas::all();
        return view('admin.pembelian.create', compact('buku', 'petugas'));
    }

    public function store(Request $request){
        $data = $request->validate([
            "tanggal" => 'required',
            "nama_pembeli" => 'required',
            "telefon" => 'required',
            "buku_id" => 'required',
            "harga" => 'required',
            "petugas_id" => 'required',
            "status_pembelian" => 'required',
        ]);

        if (isset($request->id)) {
            $pembelian = Pembelian::find($request->id);
            $pembelian->update($data);
        } else {
            Pembelian::create($data);
        }

        return redirect()->route('pembelian.index');
    }

    public function delete(string $id){
        $pembelian = Pembelian::find($id);
        $pembelian->delete();
        return redirect()->route('pembelian.index');
    }

    public function edit(string $id){
        $pembelian = Pembelian::find($id);
        $buku = Buku::all();
        $petugas = Petugas::all();

        if (!$pembelian) {
            return redirect()->back();
        }

        return view('admin.pembelian.edit', compact('pembelian', 'buku', 'petugas'));
    }
}
