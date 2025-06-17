@extends('admin.layouts.master')

@section('page-css')
    <link rel="stylesheet" href="{{ asset('public/vendor/laraberg/css/laraberg.css') }}">
    <script src="https://unpkg.com/react@17.0.2/umd/react.production.min.js"></script>
    <script src="https://unpkg.com/react-dom@17.0.2/umd/react-dom.production.min.js"></script>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Create Blog</h5>
            <a href="{{ route('admin.blog.index') }}" class="btn btn-primary rounded-0 float-end">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Enter Image Title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="keyword" class="form-label">Keyword</label>
                    <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Enter Keyword">
                    @error('keyword')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Short Description</label>
                    <textarea class="form-control" id="short_desc" name="short_desc" rows="3" placeholder="Enter Description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Long Description</label>
                    <textarea id="long_description" name="long_description"></textarea>
                </div>
                <div class="mb-3">
                    <div class="row g-3">
                        <div class="col-md-4 col-12">
                            <label for="category" class="form-label">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category }}</option>
                                @endforeach
                            </select>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>






                        <div class="col-md-4 col-12">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail"
                                accept=".jpg, .jpeg, .webp, .png, .gif">
                            @error('product')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-12">

                            <img src="{{ asset('public/assets/admin/images/images.jpeg') }}" alt="image preview"
                                class="img-fluid w-50 rounded">
                        </div>
                        <div class="col-md-4 col-12">
                            <input type="submit" value="Save" name="save" class="btn btn-success">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('page-js')
        <script src="{{ asset('public/vendor/laraberg/js/laraberg.js') }}"></script>
    <script>
        Laraberg.init('long_description')
        document.getElementById('thumbnail').addEventListener('change', function(event) {
            const input = event.target;
            const preview = document.querySelector('img[alt="image preview"]');
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                };
                reader.readAsDataURL(input.files[0]);
            } else {
                preview.src = '';
            }

        });
    </script>
@endsection
