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
            'title' => 'Kuntilanak Pohon Mangga',
            'isbn' => '1234567890',
            'deskripsi' => 'Horor n Mistis',
            'penulis' => 'Senja Matahari',
            'penerbit' => 'PT. Mencari Cinta',
            'genre_id' => 1, 
        ]);

        Buku::create([
            'title' => 'Maju Kena Mundur Kena',
            'isbn' => '0987654321',
            'deskripsi' => 'Komedi ala Warkop',
            'penulis' => 'Tegar Asyh',
            'penerbit' => 'PT. Bale Bambu',
            'genre_id' => 2, 
        ]);
    }
}
