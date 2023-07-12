<!-- Begin Page Content -->
@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Row -->

    <div class="row mx-1">
        <div class="card shadow col m-0 p-0">
            <div class="card-header font-weight-bold text-black">
                Edit post
            </div>
            <div class="card-body">

                <form method="post" action="/dashboard/posts/{{ $post->slug }}" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Title" id="title" name="title" value="{{ old('title', $post->title) }}" required>
                        @error('title')
                        <div class="invalid-veedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="slug">Blog URL : {{ url('/post').'/' }}</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" id="slug" name="slug" readonly value="{{ old('slug', $post->slug) }}">
                        @error('slug')
                        <div class="invalid-veedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="custom-select" name="category_id">

                        @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                        @endforeach

                      </select>
                    </div>

                    <div class="container m-0 p-0">
                        <div class="row m-b-1 ">
                          <div class="col">
                            <label for="input_image">Add image</label>
                            <button type="button" class="btn btn-primary btn-block" onclick="document.getElementById('input_image').click()">Add Image</button>
                            @if($post->input_image)
                            <img src="{{ asset('storage/' . $post->input_image) }}" class="img-preview img-fluid my-3 col-sm-5 p-0" id="frameImageEdit">
                            @else
                            <img class="img-preview img-fluid my-3 col-sm-5 p-0" id="frameImageEdit">
                            @endif
                            <div class="form-group inputDnD">
                              <label class="sr-only" for="input_image">File Upload</label>
                              <input type="file" class="form-control-file text-secondary font-weight-bold mt-2  @error('input_image') is-invalid @enderror" id="input_image" name="input_image" accept="image/*" onchange="readUrl(this); previewImage()" data-title="Drag and drop a file">
                            </div>
                          </div>
                        </div>
                        @error('input_image')
                        <div class="invalid-veedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="body">body</label>
                        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
                        <trix-editor input="body"></trix-editor>
                        @error('body')
                        <div class="invalid-veedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Update post</button>
                </form>

            </div>
            </div>
    </div>

@endsection
<!-- /.container-fluid -->