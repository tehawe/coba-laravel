@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-register m-auto justify-content-center">
            <form action="/register" method="POST">
                @csrf
                <img class="mb-2" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_IA9qzE5rTJ2is8vq-Zzwkz6UFgwTvJjNBg&usqp=CAU" alt="login" height="57">
                <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                <div class="form-floating">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="your name" name="name" required value="{{ old('name') }}">
                    <label for="name">Name</label>
                    @error('name')
                    <div class="invalid-feedback mt-0 mb-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name="username" required value="{{ old('username') }}">
                    <label for="username">Username</label>
                    @error('username')
                    <div class="invalid-feedback mt-0 mb-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback mt-0 mb-3">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password" required>
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback mt-0 mb-3">{{ $message }}</div>
                    @enderror
                </div>
                <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Register</button>
            </form>
            <p class="my-3 text-body-secondary text-center">Already Registered? <a href="/login">Login</a></p>
        </main>
    </div>
</div>
@endsection