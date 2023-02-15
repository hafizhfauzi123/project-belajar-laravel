@extends('layout.mainlayout')

@section('title','Home')

@section('content')
<h1>halaman Home</h1>
<h2>selamat datang {{$name}}, anda adalah {{$role}}</h2>
@endsection