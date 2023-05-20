<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MataKuliah extends Model
{
    use HasFactory;

    protected $table = 'mata_kuliah';
    protected $primaryKey = 'kode';
    public $incrementing = false;
    protected $keyType = 'string';

    public function studi(){
        return $this->hasMany(Studi::class);
    }
}
