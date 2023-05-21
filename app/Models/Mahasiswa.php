<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nim', 'nama', 'jenis_kelamin', 'alamat'];

    public function studi()
    {
        return $this->belongsToMany(Studi::class, 'kelas', 'nim_mhs', 'id_studi');
    }
}
