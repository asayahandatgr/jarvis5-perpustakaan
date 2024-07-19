<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    protected $table = 'pembelian';
    protected $fillable = ['tanggal', 'nama_pembeli', 'telefon', 'buku_id', 'petugas_id', 'status_pembelian'];

    public function buku(){
        return $this->belongsTo(Buku::class);
    }
    public function petugas(){
        return $this->belongsTo(Petugas::class);
    }
}
