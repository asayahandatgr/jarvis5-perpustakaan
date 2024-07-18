<?php

namespace Database\Seeders;

use App\Models\Pengembalian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengembalianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengembalian::create([
            'peminjaman_id' => 1, 
            'tanggal_kembali' => '2024-07-16',
            'jumlah_hari' => 15,
            'buku_id' => 1, 
            'petugas_id' => 1,
        ]);

        Pengembalian::create([
            'peminjaman_id' => 2, 
            'tanggal_kembali' => '2024-07-21',
            'jumlah_hari' => 16,
            'buku_id' => 2, 
            'petugas_id' => 2,
        ]);
    }
}
