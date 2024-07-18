<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $table = "genre";
    protected $fillable = ['nama'];
    
    public function buku(){
        return $this->hasMany(Buku::class);
    }
    public function peminjaman(){
        return $this->hasMany(Peminjaman::class);
    }
}
