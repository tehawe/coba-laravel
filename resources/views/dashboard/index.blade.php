@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
        </div>
    </div>
@endsection
