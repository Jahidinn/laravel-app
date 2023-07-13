<!-- Begin Page Content -->
@extends('dashboard.layouts.main')

@section('container')
    <!-- Content Row -->

    <div class="row mx-1">
        <div class="card shadow col m-0 p-0">
            <div class="card-header font-weight-bold text-black">
                Create new category
            </div>
            <div class="card-body">

                <form method="post" action="/dashboard/categories">
                    @csrf
                    <div class="form-group">
                      <label for="name">Category name</label>
                      <input type="text" class="form-control input-slug @error('name') is-invalid @enderror" placeholder="Category" id="name" name="name" value="{{ old('name') }}" required>
                        @error('title')
                        <div class="invalid-veedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group">
                        <label for="slug2">Slug (auto)</label>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="Slug" id="slug" name="slug" readonly value="{{ old('slug') }}">
                        @error('slug')
                        <div class="invalid-veedback text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Add category</button>
                </form>

            </div>
            </div>
    </div>
@endsection
<!-- /.container-fluid -->