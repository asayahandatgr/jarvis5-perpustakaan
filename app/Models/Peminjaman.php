<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $table = 'peminjaman';
    protected $fillable = ['nama_peminjam', 'mulai', 'selesai', 'ktm', 'genre_id', 'buku_id', 'petugas_id', 'status_peminjam'];

    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function buku(){
        return $this->belongsTo(Buku::class);
    }
    public function petugas(){
        return $this->belongsTo(Petugas::class);
    }

   
}
