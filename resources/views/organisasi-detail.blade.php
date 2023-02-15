@extends('layout.mainlayout')

@section('title','Organisasi')

@section('content')

    <h2>Anda sedang melihat data Organisasi {{$organisasi->name}}</h2>

    <div class="mt-5">
        <h3>List Peserta</h3>
        @foreach($organisasi->mahasiswas as $item)
        <ol>
            <li>{{$item->name}}<li>
        </ol>
        @endforeach
    </div>

@endsection