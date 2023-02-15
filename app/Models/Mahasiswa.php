<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Organisasi;


class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'nim',
        'class_id',
    ];

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }
    public function organisasis()
    {
        return $this->belongsToMany(Organisasi::class,'mahasiswa_organisasi', 'mahasiswa_id','organisasi_id');
    }
}
