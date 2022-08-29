@extends('layouts.main')

@section('container')    
    <h1>Halaman About</h1>
    <h2>name : {{ $name }}</h1>
    <h2>email : {{ $email }}</h1>
    <img src="img/{{ $image }}" alt="{{ $image }}">
@endsection
