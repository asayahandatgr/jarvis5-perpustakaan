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
            'nama_pembeli' => 'Tegar Asayahanda',
            'telefon' => '08577456738',
            'buku_id' => 2, 
            'buku_id' => 2, 
            'petugas_id' => 1,
            'status_pembelian' => 'Berhasil'
        ]);
    }
}
