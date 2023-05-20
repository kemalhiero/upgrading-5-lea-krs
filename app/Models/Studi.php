<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studi extends Model
{
    use HasFactory;

    protected $table = 'studi';

    public function mata_kuliah(){
        return $this->belongsTo(MataKuliah::class);
    }

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'kelas', 'id_studi', 'nim_mhs');
    }
}
