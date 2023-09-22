@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row pb-3">
            <div class="col-md-8">
                <h3 class="mt-2">{{ $post->title }}</h3>
                <a href="/dashboard/posts" class="btn btn-info"><i class="bi-arrow-left"></i> Back to All Post</a>
                <a href="" class="btn btn-warning"><i class="bi-pencil-square"></i> Edit</a>
                <a href="" class="btn btn-danger"><i class="bi-trash"></i> Delete</a>
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
