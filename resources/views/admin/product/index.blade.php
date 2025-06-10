@extends('admin.layouts.master')

@section('content')
    

    <div class="card">
        <div class="card-header">
            <h5>Product List</h5>
            <a href="{{route('admin.product.create')}}" class="btn btn-primary rounded-0 float-end">Add Product</a>
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <th>S.N.</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>License Type</th>
                    <th>Image Size</th>
                    <th>Image Price</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                
            </table>
        </div>
    </div>
@endsection

@section('page-js')
    <script>
        
    </script>
@endsection
