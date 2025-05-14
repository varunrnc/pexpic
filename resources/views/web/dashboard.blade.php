@extends('web.layouts.master')

@section('title', 'Pexpic')

@section('page_css')
<style>

</style>
@endsection

@section('content')
<main>
    <div class="container custom--container py-5">
        <div class="row justify-content-start g-3">
            <div class="col-md-4 col-12">
                <div class="card shadow">
                    <div class="card-body px-4">
                        <div class="border-bottom py-2 border-danger text-center">
                            <img src="{{ asset('public/assets/web/images/avatar-659651_640.webp') }}" alt="logo" class="img-fluid w-25 border border-success rounded-circle p-2">
                        </div>
                        <div>
                            <a href="#" class="d-block w-100 fs-5 py-2"><i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
                            <a href="#" class="d-block w-100 fs-5 py-2"><i class="fa-solid fa-download text-success"></i> Download History</a>
                            <a href="#" class="d-block w-100 fs-5 py-2"><i class="fa-solid fa-lock"></i> Change Password</a>
                            <a href="#" class="d-block w-100 fs-5 py-2 text-danger"><i class="fa-solid fa-power-off"></i> Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="card shadow">
                    <div class="card-body px-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="bg-secondary">
                                    <tr>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Price (Rs.)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="w-25">
                                            <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="image" class="img-fluid w-50 rounded">
                                        </td>
                                        <td>Indian Republic Day Design | 3000x5000</td>
                                        <td>76th Republic Day</td>
                                        <td>700.00</td>
                                        <td>
                                            <a href="{{ asset('public/assets/web/images/category-image.jpg') }}" class="btn btn-success" download><i class="fa-solid fa-download"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>

@endsection

@section('page_js')
<script>


</script>
@endsection