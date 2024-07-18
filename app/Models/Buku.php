<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";
    protected $fillable = ['title', 'isbn', 'deskripsi', 'penulis', 'penerbit', 'genre_id'];
    
    public function genre(){
        return $this->belongsTo(Genre::class);
    }
    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
    public function pembelian(){
        return $this->hasMany(Pembelian::class);
    }
    public function pengembalian(){
        return $this->hasMany(Pengembalian::class);
    }
}
