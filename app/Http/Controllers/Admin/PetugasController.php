<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index(){
        $petugas = Petugas::all();

        return view('admin.petugas.index', compact("petugas"));
    }
    public function create(){
        return view('admin.petugas.create');
    }
    public function store(Request $request){
        // dd($request);
         $data = $request->validate([
            "nama" => 'required',
            "gender" => 'required',
            "jam_mulai" => 'required',
            "jam_selesai" => 'required',
            "telepon" => 'required',
            "alamat" => 'required',
         ]);
         if (isset($request->id)) {
            $petugas = Petugas::find($request->id);
            $petugas->update([
                "nama" => $request->nama,
                "gender" => $request->gender,
                "jam_mulai" => $request->jam_mulai,
                "jam_selesai" => $request->jam_selesai,
                "telepon" => $request->telepon,
                "alamat" => $request->alamat
            ]);
         } else {
            Petugas::create($data);
         }
         return redirect()->route('petugas.index');
    }
    public function delete(string $id){
        $petugas = Petugas::find($id);
        $petugas->delete();

        return redirect()->route('petugas.index');
    }
    public function edit(string $id){
        $petugas = Petugas::find($id);
        if (!$petugas){
            return redirect()->back();
        }
        return view('admin.petugas.edit', compact('petugas'));
    }
}
