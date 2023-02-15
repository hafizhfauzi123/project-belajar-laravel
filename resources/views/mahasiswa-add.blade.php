@extends('layout.mainlayout')

@section('title','Mahasiswa | Add New')

@section('content')

        <div class="mt-5 col-8 m-auto">
            <form action="mahasiswa" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>

                <div class="mb-3">
                    <label for="gender">Jenis Kelamin</label>
                    <select name="gender" id="gender" class="form-control" required>
                        <option value="">Pilih Satu</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="nim"> NIM </label>
                    <input type="text" name="nim" class="form-control" id="nim" required>
                </div>

                <div class="mb-3">
                    <label for="class">Kelas</label>
                    <select name="class_id" id="class" class="form-control" required>
                        <option value="">Pilih Satu</option>
                        @foreach ($class as $item)
                            <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </div>
            </form> 
        </div>

@endsection