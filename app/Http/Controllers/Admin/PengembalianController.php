<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengembalian;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index(){
        $pengembalian = Pengembalian::all();

        return view('admin.pengembalian.index', compact("pengembalian"));
    }
}
