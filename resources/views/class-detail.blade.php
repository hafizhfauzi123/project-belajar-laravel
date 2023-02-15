@extends('layout.mainlayout')

@section('title','Class-Detail')

@section('content')

    <h2>Anda sedang melihat data Class dari {{$class->name}}
    </h2>

    <div class="mt-5">
        <h4><strong>Home Dosen : </strong>{{$class->homeroomDosen->name}}</h4>
    </div>
    
    <div class="mt-5">
        <h4>List Mahasiswa</h4>
        <ol>
        @foreach($class->mahasiswas as $item)
        <li>{{$item->name}}<li>
        @endforeach
        </ol>
    </div>
@endsection