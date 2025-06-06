@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Sliders</h5>
            @if(Session::has('success'))
                <span class="text-success">{{Session::get('success')}}</span>
            @endif
        </div>
        <div class="card-body">
            <form action="{{route('admin.slider.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Slider Title">
                    @error('title')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
                    <label for="sliderImage" class="form-label">Choose Image</label>
                    <input class="form-control" type="file" name="slider_image" id="sliderImage"
                        accept=".jpg,.jpeg,.png,.gif,.webp">
                        @error('slider_image')<span class="text-danger">{{$message}}</span>@enderror
                </div>
                <div class="mb-3">
                    <img id="preview" src="#" alt="Image Preview"
                        style="display: none; max-width: 300px; margin-top: 10px;" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-success" type="submit" id="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

    <hr>

    <div class="card">
        <div class="card-header">
            <h5>Sliders List</h5>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Preview</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                @foreach($sliders as $key=>$slider)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$slider->title}}</td>
                    <td><img src="{{asset('public/uploads/sliders/' . $slider->slider_image)}}" alt="slider" class="img-fluid rounded" width="150px" ></td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection

@section('page-js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const preview = document.getElementById('preview');
            const imageInput = document.getElementById('sliderImage');

            // Image preview logic
            imageInput.addEventListener('change', (event) => {
                const file = event.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = (e) => {
                        preview.src = e.target.result;
                        preview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                } else {
                    preview.src = '#';
                    preview.style.display = 'none';
                }
            });

        });
    </script>
@endsection
