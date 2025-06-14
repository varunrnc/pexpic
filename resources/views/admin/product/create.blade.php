@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Create Product</h5>
            <a href="{{ route('admin.product.index') }}" class="btn btn-primary rounded-0 float-end">Back</a>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title"
                        placeholder="Enter Image Title">
                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Description</label>
                    <textarea class="form-control" id="desc" name="desc" rows="3" placeholder="Enter Description"></textarea>
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
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-12">
                            <label for="image_type" class="form-label">Image Type</label>
                            <select name="image_type" id="image_type" class="form-control">
                                <option value="">Select Image Type</option>
                                <option value="PSD">PSD</option>
                                <option value="JPG">JPG</option>
                                <option value="AI">AI</option>
                            </select>
                            @error('image_type')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-12">
                            <label for="license_type" class="form-label">License Type</label>
                            <select name="license_type" id="license_type" class="form-control">
                                <option value="">Select License Type</option>
                                <option value="Free">Free</option>
                                <option value="Commercial Use">Commercial Use</option>
                            </select>
                            @error('license_type')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="image_size" class="form-label">Image Size</label>
                            <input type="text" class="form-control" id="image_size" name="image_size"
                                placeholder="Enter Image Size">
                            @error('image_size')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 col-12">
                            <label for="price" class="form-label">Image Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                placeholder="Enter Image Price">
                            @error('price')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-12">
                            <label for="product" class="form-label">Choose Image File (PSD/AI)</label>
                            <input type="file" class="form-control" id="product" name="product">
                            @error('product')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-md-4 col-12">
                            <label for="thumbnail" class="form-label">Thumbnail</label>
                            <input type="file" class="form-control" id="thumbnail" name="thumbnail" accept=".jpg, .jpeg, .webp, .png, .gif">
                            @error('product')
                                <span class="text-danger">{{$message}}</span>
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
    <script>
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
