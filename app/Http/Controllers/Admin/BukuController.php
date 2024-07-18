<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Buku;
use App\Models\Genre;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();

        return view('admin.buku.index', compact("buku"));
    }
    public function create()
    {
        $genre = Genre::all();
        return view('admin.buku.create', compact('genre'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $data = $request->validate([
            'title' => 'required',
            'isbn' => 'required',
            'deskripsi' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'cover_img' => 'required',
            'genre_id' => 'required'
        ]);
        if (isset($request->id)) {
            $buku = Buku::find($request->id);
            if ($buku) {
                $buku->update($data);
            } else {
                return redirect()->route('buku.index')->withErrors(['buku' => 'Buku not found']);
            }
        } else {
            Buku::create($data);
        }

        return redirect()->route('buku.index');
    }
    public function delete(string $id)
    {
        $buku = Buku::find($id);
        $buku->delete();

        return redirect()->route('buku.index');
    }
    public function edit(string $id)
    {
        $buku = Buku::find($id);
        $genre = Genre::all();
        if (!$buku) {
            return redirect()->back();
        }
        return view('admin.buku.edit', compact('buku', 'genre'));
    }
}
