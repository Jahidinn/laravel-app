@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row jusify-content-center">
        <div class="col-md-8">
            <h2>{{ $post->title }}</h2>
            <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            <hr>
            <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" class="img-fluid" alt="$post->category->name">
            <article class="my-3">
                {!! $post->body !!}
            </article>
            <p><a href="/posts"><< Back</a></p>
        </div>
    </div>
</div>
@endsection