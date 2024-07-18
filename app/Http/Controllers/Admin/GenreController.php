<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index(){
        $genre = Genre::all();

        return view('admin.genre.index', compact("genre"));
    }
    public function create(){
        return view('admin.genre.create');
    }
    public function store(Request $request){
        // dd($request);
         $data = $request->validate([
            "nama" => 'required'
         ]);
         if (isset($request->id)) {
            $genre = Genre::find($request->id);
            $genre->update([
                "nama" => $request->nama
            ]);
         } else {
            Genre::create($data);
         }
         return redirect()->route('genre.index');
    }
    public function delete(string $id){
        $genre = Genre::find($id);
        $genre->delete();

        return redirect()->route('genre.index');
    }
    public function edit(string $id){
        $genre = Genre::find($id);
        if (!$genre){
            return redirect()->back();
        }
        return view('admin.genre.edit', compact('genre'));
    }
}
