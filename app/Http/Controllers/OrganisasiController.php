<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Organisasi;

class OrganisasiController extends Controller
{
    public function index()
    {
    $organisasi= Organisasi::get();
    return view('organisasi',['OrganisasiList'=>$organisasi]);
    }

    public function show($id)
    {
    $organisasi= Organisasi::with('mahasiswas')->findOrFail($id); 
    return view('organisasi-detail',['organisasi'=>$organisasi]);
    }
}
