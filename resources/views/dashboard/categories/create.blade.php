@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pb-5">
                <h2 class="py-3 border-bottom">Create New Post</h2>
                <form action="/dashboard/categories" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Category Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback mt-0 mb-3">{{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="form-label">Slug</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug') }}">
                        @error('slug')
                            <div class="invalid-feedback mt-0 mb-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi-file-earmark-plus"></i> Create</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');

        name.addEventListener('change', function() {
            fetch('/dashboard/categories/checkSlug?name=' + name.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });
    </script>
@endsection
