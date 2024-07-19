<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetugasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Petugas::create([
            'nama' => 'Asep',
            'gender' => 'Laki-laki',
            'jam_mulai' => '08:00:00',
            'jam_selesai' => '16:00:00',
            'telepon' => '1234567890',
            'alamat' => '123 Main Street'
        ]);

        Petugas::create([
            'nama' => 'Tini Wini',
            'gender' => 'Perempuan',
            'jam_mulai' => '16:00:00',
            'jam_selesai' => '00:00:00',
            'telepon' => '0987654321',
            'alamat' => '456 Elm Street'
        ]);
    }
}
