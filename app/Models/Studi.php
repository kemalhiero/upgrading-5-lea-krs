<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studi extends Model
{
    use HasFactory;

    protected $table = 'studi';
    protected $guarded = ['id'];
    protected $fillable = ['kode_matkul', 'dosen', 'ruang', 'jadwal', 'periode'];

    public function matkul(){
        return $this->belongsTo(Matkul::class, 'kode_matkul', 'kode');
    }

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'kelas', 'id_studi', 'nim_mhs');
    }
}
