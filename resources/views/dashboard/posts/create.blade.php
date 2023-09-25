@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 pb-5">
                <h2 class="py-3 border-bottom">Create New Post</h2>
                <form action="/dashboard/posts" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title') }}">
                        @error('title')
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
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Category</label>
                        <select class="form-select" name="category_id" id="category_id" required>
                            <option value="">--Category--</option>
                            @foreach ($categories as $category)
                                @if (old('category_id') == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback mt-0 mb-3">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="body" class="form-label">Body</label>
                        @error('body')
                            <small class="d-block text-danger mb-2 bt-0">{{ $message }}</small>
                        @enderror
                        <input id="body" type="hidden" name="body" value="{{ old('body') }}" required>
                        <trix-editor input="body"></trix-editor>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="bi-file-earmark-plus"></i> Create</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            fetch('/dashboard/posts/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug);
        });

        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
