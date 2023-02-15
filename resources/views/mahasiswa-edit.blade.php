@extends('layout.mainlayout')

@section('title','Mahasiswa | Add Update ')

@section('content')

    <div class="mt-5 col-8 m-auto">
        <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" value="{{$mahasiswa->name}}" required>
            </div>

            <div class="mb-3">
                <label for="gender">Jenis Kelamin</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="{{$mahasiswa->gender}}">{{$mahasiswa->gender}}</option>
                    @if ($mahasiswa->gender =='L')
                         <option value="P">P</option>
                    @else
                        <option value="L">L</option>
                    @endif
                </select>
            </div>
            <div class="mb-3">
                <label for="nim"> NIM </label>
                <input type="text" name="nim" class="form-control" id="nim" value="{{$mahasiswa->nim}}" required>
            </div>
            <div class="mb-3">
                <label for="class">Kelas</label>
                <select name="class_id" id="class" class="form-control" required>
                    <option value="{{$mahasiswa->class->id}}">{{$mahasiswa->class->name}}</option>
                    @foreach ($class as $item)
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <button class="btn btn-success" type="submit">Update</button>
            </div>
        </form>
    </div>

@endsection