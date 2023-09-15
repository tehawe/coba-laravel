@extends('layouts.main')

@section('container')
<div class="container">
    <h1>Halaman About</h1>
    <h3>{{ $name }}</h3>
    <h4>{{ $email }}</h4>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded">
</div>
@endsection
