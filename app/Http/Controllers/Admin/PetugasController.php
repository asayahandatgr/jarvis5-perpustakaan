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
}
