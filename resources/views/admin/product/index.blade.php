@extends('admin.layouts.master')

@section('content')
    

    <div class="card">
        <div class="card-header">
            <h5>Product List</h5>
            <a href="{{route('admin.product.create')}}" class="btn btn-primary rounded-0 float-end">Add Product</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Image Type</th>
                    <th>License Type</th>
                    <th>Image Size</th>
                    <th>Image Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>

                @foreach($products as $key=>$product)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$product->title}}</td>
                        <td><img src="{{asset('public/uploads/thumbnails/' . $product->thumbnail)}}" alt="thumbnail" class="img-fluid rounded" width="150px"></td>
                        <td>{{$product->category->category}}</td>
                        <td>{{$product->image_type}}</td>
                        <td>{{$product->license_type}}</td>
                        <td>{{$product->image_size}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                            <div class="form-check form-switch">
                                <input class="form-check-input toggle-status" type="checkbox" role="switch"
                                    data-id="{{ $product->id }}" {{ $product->status == 1 ? 'checked' : '' }}>
                            </div>
                        </td>
                        <td>
                            <a class="btn btn-primary btn-sm edit-product" href="{{route('admin.product.edit', ['id'=>$product->id])}}">
                                Edit
                            </a>
                            <button class="btn btn-danger btn-sm delete-product" data-id="{{ $product->id }}">
                                Delete
                            </button>
                        </td>
                    </tr>
                @endforeach
                
            </table>
            </div>
        </div>
    </div>
@endsection

@section('page-js')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const switches = document.querySelectorAll('.toggle-status');
            const deleteButtons = document.querySelectorAll('.delete-product');

            // change status
            switches.forEach(function(toggle) {
                toggle.addEventListener('change', function() {
                    const productId = this.dataset.id;
                    const newStatus = this.checked ? '1' : '0';
                    const updateStatusUrl =
                    "{{ route('admin.product.status', ['id' => ':id']) }}";
                    let url = updateStatusUrl.replace(':id', productId);

                    fetch(url, {
                            method: 'PUT',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector(
                                    'meta[name="csrf-token"]').getAttribute('content')
                            },
                            body: JSON.stringify({
                                status: newStatus
                            })
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }
                            return response.json();
                        })
                        .then(data => {
                            console.log('Status updated:', data);
                            
                        })
                        .catch(error => {
                            console.error('Error updating status:', error);
                            
                            this.checked = !this.checked;
                        });
                });
            });


            // delete product
            deleteButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const productId = this.dataset.id;
                    const deleteProduct = "{{ route('admin.product.delete', ['id' => ':id']) }}";
                    let url = deleteProduct.replace(':id', productId);

                    if (confirm('Are you sure you want to delete this product?')) {
                        fetch(url, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector(
                                        'meta[name="csrf-token"]').getAttribute('content'),
                                },
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    alert('Product deleted successfully.');
                                    // Optionally remove the row from the DOM
                                    this.closest('tr').remove();
                                } else {
                                    alert('Failed to delete product.');
                                }
                            })
                            .catch(error => {
                                console.error('Error:', error);
                                alert('An error occurred.');
                            });
                    }
                });
            });
        });
    </script>
@endsection
