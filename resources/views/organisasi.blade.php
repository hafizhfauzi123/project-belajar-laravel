@extends('layout.mainlayout')

@section('title','Organisasi')

@section('content')
<h1>halaman Organisasi</h1>

<div class="my-5">
    <a href="" class="btn btn-primary">Tambah Data</a>
</div>

<h3>organisasi List</h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($OrganisasiList as $data)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$data->name}}</td>
            <td><a href="organisasi-detail/{{$data->id}}">detail</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection