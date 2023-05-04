
@extends('layouts.main')

@section('container')
    
    <h1>Halaman About</h1>
    <h1>{{ $name }}</h1>
    <p>{{ $email }}</p>
    <p>{{ $image }}</p>
    
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
    
@endsection