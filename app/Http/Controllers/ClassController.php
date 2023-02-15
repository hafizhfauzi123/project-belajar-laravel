<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;

class ClassController extends Controller
{
    public function index()
    {
        $class = ClassRoom::all();

        $class = ClassRoom::get();
        return view('classroom',['classList'=>$class]);
    }
    public function show($id)
    {
        $class = ClassRoom::with(['mahasiswas','homeroomDosen'])->findOrFail($id);
        return view('class-detail',['class'=>$class]);
    }
    public function create()
    {
        # code...
    }
}
