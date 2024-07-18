<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peminjaman::create([
            'nama_peminjam' => 'Layla Johnson',
            'mulai' => '2024-07-01',
            'selesai' => '2024-07-15',
            'ktm' => '1234567890',
            'genre_id' => 1,
            'buku_id' => 1, 
            'petugas_id' => 1,
            'status_peminjam' => 'Pending'
        ]);

        Peminjaman::create([
            'nama_peminjam' => 'Alwi Smith',
            'mulai' => '2024-07-05',
            'selesai' => '2024-07-20',
            'ktm' => '0987654321',
            'genre_id' => 2,
            'buku_id' => 2, 
            'petugas_id' => 2,
            'status_peminjam' => 'Berhasil'
        ]);
    }
}
