<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mahasiswa::insert([
            ['nim' => '2011523019', 'nama' => 'kemal', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'Padang', 'created_at' => now(), 'updated_at' => now()],
            ['nim' => '2011523000', 'nama' => 'ajo', 'jenis_kelamin' => 'laki-laki', 'alamat' => 'Pariaman', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
