@extends('layout.mainlayout')

@section('title','Mahasiswa')

@section('content')
<h1>halaman Mahasiswa</h1>

<div class="my-5">
    <a href="mahasiswa-add" class="btn btn-primary">Tambah Data</a>
</div>

@if(Session::has('status'))
    <div class="alert alert-sucess"role="alert">
        {{Session::get('message')}}
    </div>
@endif

<h3>Mahasiswa List</h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Gender</th>
            <th>Nim</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($MahasiswaList as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->gender}}</td>
            <td>{{$data->nim}}</td>
            <td>
                <a href="mahasiswa/{{$data->id}}">detail</a>
                <a href="mahasiswa-edit/{{$data->id}}">edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection