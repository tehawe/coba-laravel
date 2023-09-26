@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row pb-3">
            <div class="col-md-8">
                <h3 class="mt-2 mb-4">{{ $post->title }}</h3>
                <a href="/dashboard/posts" class="btn btn-info"><i class="bi-arrow-left"></i> Back to All Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi-pencil-square"></i> Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger border-0" onclick="return confirm('Are you sure?')"><i class="bi-trash"></i> Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid mt-3" alt="{{ $post->category->name }}">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <small class="d-block mb-5">This post has
                    @if ($post->created_at == $post->updated_at)
                        created at {{ $post->created_at->diffForHumans() }}
                    @else
                        updated at {{ $post->updated_at->diffForHumans() }}
                    @endif
                </small>
            </div>
        </div>
    </div>
@endsection
