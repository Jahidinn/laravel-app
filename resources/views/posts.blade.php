@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-2">
    <div class="col-md-8">
        <form action="/posts">

            @if(request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
            @endif

            @if(request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
            @endif

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search ..." name="search" value="{{ request('search'); }}">
                <button class="btn btn-success" type="submit">Button</button>
            </div> 
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">
        @if ($posts[0]->input_image)
            <div style="max-height: 200px; overflow:hidden;">
                <img style="max-width: 100%;max-height:100%;object-fit:cover;" src="{{ asset('storage/' . $posts[0]->input_image) }}" class="img-fluid" alt="$posts[0]->category->name">
            </div>
         @else   
            <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="$post->category->name">
        @endif
        
        <div class="card-body text-center">
        <h5 class="card-title"><a href="posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
        <p class="card-text">
            <small class="text-body-secondary">By : <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
            {{ $posts[0]->created_at->diffForHumans() }} </small>
        </p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>

        <a href="posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
        </div>
    </div>  

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 bg-dark text-white"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">Category : {{ $post->category->name }}</a></div>
                @if ($posts[0]->input_image)
                <div style="max-height: 300px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->input_image) }}" class="img-fluid" alt="$posts[0]->category->name">
                </div>
                @else   
                <img src="https://source.unsplash.com/500x300?{{ $post->category->name }}" class="card-img-top" alt="$post->category->name">
                @endif
                
                <div class="card-body">
                    <h5 class="card-title"> <a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                    <p class="card-text">
                        <small class="text-body-secondary">By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
                        {{ $post->created_at->diffForHumans() }} </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>
                    <a href="posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div> 
        @endforeach
    </div>
</div>
@else
    <p class="text-center fs-4">No Post</p>
@endif
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>

@endsection