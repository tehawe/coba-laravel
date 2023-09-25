@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row">
            <h2 class="py-3 border-bottom">My Posts</h2>
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="table-responsive small">
                <a href="/dashboard/posts/create" class="btn btn-info mb-3"><i class="bi-plus-circle"></i> Add New Post</a>
                <table class="table table-striped table-sm">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Title</th>
                            <th scope="col">Category</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->category->name }}</td>
                                <td>
                                    <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><i class="bi-journal-check"></i></a>
                                    <a href="" class="badge bg-warning"><i class="bi-pencil-square"></i></a>
                                    <a href="" class="badge bg-danger"><i class="bi-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
