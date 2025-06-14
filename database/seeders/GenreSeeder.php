<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Roman'
        ]);

        Genre::create([
            'nama' => 'Novel'
        ]);

        Genre::create([
            'nama' => 'Fantasi'
        ]);

        Genre::create([
            'nama' => 'Komedi'
        ]);
        
        Genre::create([
            'nama' => 'Horor'
        ]);

    }
}
