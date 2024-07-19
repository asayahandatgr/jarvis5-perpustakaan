<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Buku::create([
            'title' => 'Laskar Pelangi',
            'isbn' => '9793062797',
            'deskripsi' => 'Action',
            'penulis' => 'Andrea Hirata',
            'penerbit' => 'Bentang Pustaka',
            'genre_id' => 2, 
            'harga' => '150.000', 
        ]);

        Buku::create([
            'title' => 'Sang Pemimpi',
            'isbn' => '9793062924',
            'deskripsi' => 'Hidup sebatang Kara',
            'penulis' => 'Andrea Hirata',
            'penerbit' => 'Bentang Pustaka',
            'genre_id' => 1, 
            'harga' => '120.000', 

        ]);
        Buku::create([
            'title' => 'Ederson',
            'isbn' => '9789791227025',
            'deskripsi' => 'Ciri Khas Ederson',
            'penulis' => 'Andrea Hirata',
            'penerbit' => 'Bentang Pustaka',
            'genre_id' => 1, 
            'harga' => '100.000', 
        ]);
        Buku::create([
            'title' => 'One Piece',
            'isbn' => '9781587659553',
            'deskripsi' => 'Raja Bajak Laut',
            'penulis' => 'Eiichiro Oda',
            'penerbit' => 'Shueisha',
            'genre_id' => 3, 
            'harga' => '200.000', 
        ]);
        Buku::create([
            'title' => 'Si Juki Komik Strip',
            'isbn' => '9786022201397',
            'deskripsi' => 'Anti Mainstream',
            'penulis' => 'Faza Meonk',
            'penerbit' => 'Bukune',
            'genre_id' => 4,
            'harga' => '75.000', 
        ]);
        Buku::create([
            'title' => 'Si Juki Lika-Liku Anak Kos',
            'isbn' => '9786020287140',
            'deskripsi' => 'Keseharian Juki',
            'penulis' => 'Faza Meonk',
            'penerbit' => 'Bukune',
            'genre_id' => 4,
            'harga' => '70.000', 
        ]); 
    }
}
