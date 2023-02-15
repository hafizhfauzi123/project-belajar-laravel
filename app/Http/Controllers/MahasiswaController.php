<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\ClassRoom;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::get();
        return view('mahasiswa',['MahasiswaList'=>$mahasiswa]);
    }

    public function show($id)
    {
        $mahasiswa= Mahasiswa::with(['class.homeroomDosen','organisasis'])->findOrFail($id);
        return view('mahasiswa-detail',['mahasiswa'=>$mahasiswa]);
    }

    public function create()
    {
        $class = ClassRoom::select('id','name')->get();
        return view('mahasiswa-add',['class'=>$class]);
    }

    public function store(Request $request)
    {
        $mahasiswa = new Mahasiswa;
        $mahasiswa ->name = $request->name;
        $mahasiswa ->gender = $request->gender;
        $mahasiswa ->nim = $request->nim;
        $mahasiswa ->class_id= $request->class_id;
        $mahasiswa->save();
        // $mahasiswa = Mahasiswa::create($request->all());
        if($mahasiswa){
            Session::flash('status','success');
            Session::flash('message','add new Mahasiswa success!');
        }
        return redirect('/mahasiswas');
    }

    public function edit(Request $request, $id)
    {
        $mahasiswa= Mahasiswa::with('class')->findOrFail($id);
        $class = ClassRoom::where('id','!=',$mahasiswa->class_id)->get(['id','name']);
        return view('mahasiswa-edit',['mahasiswa'=>$mahasiswa, 'class'=>$class]);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $mahasiswa->update($request->all());
        return redirect('/mahasiswas');
    }
}
