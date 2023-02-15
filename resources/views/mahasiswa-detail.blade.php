@extends('layout.mainlayout')

@section('title','Mahasiswa-Detail')

@section('content')

    <h2>Anda sedang melihat data detail dari mahasiswa {{$mahasiswa->name}}
    </h2>
    

    <div class="mt-5">
    <table class="table table-bordered">
        <tr>
            <th>NIM</th>
            <th>Gender</th>
            <th>class</th>
            <th>Dosen</th>
        </tr>
        <tr>
            <td>{{$mahasiswa->nim}}</td>
            <td>
                @if($mahasiswa->gender == 'P')
                    Perempuan
                @elseif($mahasiswa->gender == 'L')
                    Laki-Laki
                @endif
            </td>
            <td>{{$mahasiswa->class->name}}</td>
            <td>{{$mahasiswa->class->homeroomDosen->name}}</td>
        </tr>
    </table>
    </div>

    <div>
        <h3>Organisasi</h3>
        <ol>
            @foreach($mahasiswa->organisasis as $item)
                <li>{{$item->name}}</li>
            @endforeach
        </ol>
    </div>
    <style>
        th{
            width:25%;
        }
    </style>
@endsection