<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;

    protected $table='class';

    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class,'class_id','id');
    }
    public function homeroomDosen()
    {
        return $this->belongsTo(Dosen::class,'dosen_id','id');
    }
}
