<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MataKuliah;

class MataKuliahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MataKuliah::insert([
            ['kode' => 'JSI123', 'nama' => 'Struktur Data', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'JSI122', 'nama' => 'Algoritma', 'sks' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['kode' => 'JSI121', 'nama' => 'Basis Data', 'sks' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
