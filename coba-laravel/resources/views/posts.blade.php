@extends('layouts/main')

@section('container')
    <h1 class="mb-5">{{ $title }}</h1>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
                <small class="text-body-secondary">
                    <p>By, <a href="/authors/{{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/categories/{{ $posts[0]->category->slug }}"
                            class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}</p>
                </small>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a </div>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute bg-dark px-3 py-2"><a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <small class="text-body-secondary">
                                <p>By, <a href="/authors/{{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a>
                                    {{ $posts[0]->created_at->diffForHumans() }}</p>
                            </small>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
