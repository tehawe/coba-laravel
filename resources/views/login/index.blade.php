@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin m-auto justify-content-center">
                <form action="/login" method="POST">
                    @csrf
                    <img class="mb-2" src="https://cdn-icons-png.flaticon.com/512/295/295128.png" alt="login" height="57">
                    <h1 class="h3 mb-3 fw-normal">Please Login</h1>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name='email' id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback mb-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100 py-2 mt-3" type="submit">Login</button>
                </form>
                <p class="my-3 text-body-secondary text-center">Not Registered? <a href="/register">Register Now!</a></p>
            </main>
        </div>
    </div>
@endsection
