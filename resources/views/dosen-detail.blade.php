@extends('layout.mainlayout')

@section('title','Dosen-Detail')

@section('content')

        <h2>Anda sedang melihat data Dosen dari {{$dosen->name}}</h2>

        <div class="mt-5">
            <h3>Kelas : 
                @if ($dosen->class)
                {{$dosen->class->name}}
                @else
                    Tidak Mengajar kelas
                @endif
                </h3>
        </div>
        <div class="mt-5">
            <h4>Mahasiswa</h4>
            @if ($dosen->class)
                <ol>
                    @foreach($dosen->class->mahasiswas as $item)
                    <li>{{$item->name}}</li>
                    @endforeach
                </ol>
            @endif
        </div>
@endsection