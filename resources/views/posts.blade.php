@extends('layouts.main')

@section('container')
    <h2 class="mb-3 text-center">{{ $title }}</h2>

    <div class="row justify-content-center mb-2">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" id="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" id="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control border-primary" placeholder="Search..." value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/blog/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <p><small>By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/blog/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>


        <div class="container p-0">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-sm-4 pb-3">
                        <div class="card overflow-hidden">
                            <div class="position-absolute px-2 py-1" style="background-color: rgba(0, 0, 0, 0.7);">
                                <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none text-light">{{ $post->category->name }}</a>
                            </div>
                            <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}">
                            <div class="card-body">
                                <h4><a href="/blog/post/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h4>
                                <p><small>By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/blog/post/{{ $post->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="my-5 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    @else
        <div class="p-3 mb-2 bg-info text-white text-center rounded-pill">NO POST FOUND</div>
    @endif
@endsection
