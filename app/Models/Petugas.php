<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table = 'petugas';
    protected $fillable = ['nama', 'gender', 'jam_mulai', 'jam_selesai', 'telepon', 'alamat' ];
    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
    public function pengembalian(){
        return $this->hasMany(Pengembalian::class);
    }
    public function pembelian(){
        return $this->hasMany(Pembelian::class);
    }
}
