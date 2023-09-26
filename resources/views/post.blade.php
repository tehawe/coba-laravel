@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center pb-3 mb-5">
            <div class="col-md-8">
                <h3 class="mt-2">{{ $post->title }}</h3>
                <p><small>By. <a href="//blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></small></p>
                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->category->name }}">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <hr>
                <a href="/blog" class="btn btn-primary">Back to posts</a>
            </div>
        </div>
    </div>
@endsection
