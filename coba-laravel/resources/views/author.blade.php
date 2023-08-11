@extends('layouts/main')

@section('container')
<h1 class="">Post by {{ $author->name }}</h1>
  @foreach ($posts as $post)
  <article class="mb-5 pb-4 border-bottom">
    <h2>
      <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
    </h2>
    <p>By, <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
    <p>{{ $post->excerpt }}</p>
    
  <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
  </article>
  @endforeach

@endsection