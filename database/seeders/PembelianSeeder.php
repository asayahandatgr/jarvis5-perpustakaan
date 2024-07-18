<?php

namespace Database\Seeders;

use App\Models\Pembelian;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pembelian::create([
            'tanggal' => '2024-07-05',
            'nama_pembeli' => 'Alwi Smith',
            'telefon' => '08577456738',
            'buku_id' => 2, 
            'harga' => 100000, 
            'petugas_id' => 2,
            'status_pembelian' => 'Berhasil'
        ]);
    }
}
