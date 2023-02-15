<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mahasiswa;

class Organisasi extends Model
{
    use HasFactory;

    public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class,'mahasiswa_organisasi', 'organisasi_id','mahasiswa_id');
    }
}
