<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengembalian extends Model
{
    use HasFactory;
    protected $table = 'pengembalian';
    protected $fillable = ['peminjaman_id', 'tanggal_kembali', 'jumlah_hari', 'buku_id', 'petugas_id'];

    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class);
    }
    public function buku(){
        return $this->belongsTo(Buku::class);
    }
    public function petugas(){
        return $this->belongsTo(Petugas::class);
    }
}
