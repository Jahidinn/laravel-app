<!-- Begin Page Content -->
@extends('dashboard.layouts.main')

@section('container')
   
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="mb-3">{{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-info"><i class="fas fa-arrow-left"></i> Back to all post</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-success"><i class="far fa-edit"></i> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn px-2 btn-danger" onclick="return confirm('Are you sure?')"><i class="far fa-times-circle"></i> Delete</button>
                </form>
            <hr>
            @if ($post->input_image) 
            <div class="case-image-post-view">
                <img class="image-post-view" src="{{ asset('storage/' . $post->input_image) }}" class="img-fluid" alt="$post->category->name">
            </div>
            @else   
            <img src="https://source.unsplash.com/1200x300?{{ $post->category->name }}" class="img-fluid" alt="$post->category->name">
            @endif
            <article class="my-3">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>

@endsection
<!-- /.container-fluid -->