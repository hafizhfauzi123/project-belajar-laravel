@extends('layout.mainlayout')

@section('title','Dosen')

@section('content')
<h1>halaman Dosen</h1>

<div class="my-5">
    <a href="" class="btn btn-primary">Tambah Data</a>
</div>

<h3>Dosen List</h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
          @foreach ($DosenList as $item)
          <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td><a href="dosen-detail/{{$item->id}}">detail</a></td>
          </tr>
          @endforeach  
    </tbody>
</table>
@endsection