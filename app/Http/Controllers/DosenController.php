<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index(){
        $dosen = Dosen::all();
        return view('dosen',['DosenList'=>$dosen]);
    }
    public function show($id)
    {
        $dosen = Dosen::with('class.mahasiswas')->findOrFail($id);
        return view('dosen-detail',['dosen'=>$dosen]);
    }
}
