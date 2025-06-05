@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Sliders</h5>
        </div>
        <div class="card-body">
            <form id="addSlider" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter Slider Title">
                </div>
                <div class="mb-3">
                    <label for="sliderImage" class="form-label">Choose Image</label>
                    <input class="form-control" type="file" name="slider_image" id="sliderImage"
                        accept=".jpg,.jpeg,.png,.gif,.webp">
                </div>
                <div class="mb-3">
                    <img id="preview" src="#" alt="Image Preview"
                        style="display: none; max-width: 300px; margin-top: 10px;" />
                </div>
                <div class="mb-3">
                    <button class="btn btn-success">Save</button>
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
                <tr>
                    <td>1</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
@endsection

@section('page-js')
    <script>
        < script >
            document.addEventListener('DOMContentLoaded', () => {
                const form = document.getElementById('addSlider');
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

                // Form submission logic
                form.addEventListener('submit', async (e) => {
                    e.preventDefault();

                    const formData = new FormData(form);

                    try {
                        const response = await fetch('/your-endpoint-url', {
                            method: 'POST',
                            body: formData
                        });

                        const result = await response.json();

                        if (response.ok) {
                            alert('Slider saved successfully!');
                            form.reset();
                            preview.style.display = 'none';
                        } else {
                            alert('Error: ' + result.message);
                        }
                    } catch (error) {
                        console.error('Error submitting form:', error);
                        alert('Something went wrong!');
                    }
                });
            });
    </script>

    </script>
@endsection
