@extends('web.layouts.master')

@section('title', 'Pexpic')

@section('page_css')
<style>

</style>
@endsection

@section('content')
<main>
    <div class="container custom--container py-4">
        <div class="row justify-content-start g-3">
            <div class="col-md-8 col-12">
                <div class="text-center">
                    <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="product image" class="img-fluid rounded w-75 shadow">
                    <p class="mt-3 fs-5 text-start"><strong class="text-dark">Description:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa culpa earum quod officia odit dolores sit tenetur harum ea temporibus.</p>
                </div>

            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card-head p-2">
                        <h4>Title</h4>
                        <hr>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <td>Image Type</td>
                                <td>PSD</td>
                            </tr>
                            <tr>
                                <td>License type</td>
                                <td>Commercial Use</td>
                            </tr>
                            <tr>
                                <td>Image Size</td>
                                <td>1920 X 600</td>
                            </tr>
                            <tr>
                                <td>Image Price</td>
                                <td>Rs. 49.00</td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="#" class="theme-btn d-block text-center fs-4">Download</a></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <h4>Share</h4>
                <ul class="list list--row social-list">
                    <li>
                        <a class="t-link social-list__icon" href="https://www.facebook.com/posteritoriginal"
                            target="_blank">
                            <i class="fa-brands fa-facebook-f"></i> </a>
                    </li>
                    <li>
                        <a class="t-link social-list__icon" href="https://x.com/Posteritog" target="_blank">
                            <i class="fa-brands fa-x-twitter"></i> </a>
                    </li>
                    <li>
                        <a class="t-link social-list__icon" href="https://www.linkedin.com/company/posterit"
                            target="_blank">
                            <i class="fa-brands fa-linkedin"></i></a>
                    </li>
                    <li>
                        <a class="t-link social-list__icon" href="https://in.pinterest.com/posteritoriginal"
                            target="_blank">
                            <i class="fab fa-pinterest"></i> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row g-3 mt-3">
            <div class="col-12">
                <div>
                    <h2 class="section__title text-left mb-0">Related Photos</h2>

                    <div class="section--sm section--bottom">
                        <div class="container custom--container">
                            <div class="row g-4">
                                <div class="col-md-3 col-6">
                                    <div class="latest-product">
                                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                                        <a href="{{ route('web.product-details') }}" class="d-block product-title">
                                            <button class="theme-btn d-block w-100 fs-6">Image Title</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="latest-product">
                                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                                        <a href="#" class="d-block product-title">
                                            <button class="theme-btn d-block w-100 fs-6">Image Title</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="latest-product">
                                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                                        <a href="#" class="d-block product-title">
                                            <button class="theme-btn d-block w-100 fs-6">Image Title</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="latest-product">
                                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                                        <a href="#" class="d-block product-title">
                                            <button class="theme-btn d-block w-100 fs-6">Image Title</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="latest-product">
                                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                                        <a href="#" class="d-block product-title">
                                            <button class="theme-btn d-block w-100 fs-6">Image Title</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="latest-product">
                                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                                        <a href="#" class="d-block product-title">
                                            <button class="theme-btn d-block w-100 fs-6">Image Title</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="latest-product">
                                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                                        <a href="#" class="d-block product-title">
                                            <button class="theme-btn d-block w-100 fs-6">Image Title</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6">
                                    <div class="latest-product">
                                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                                        <a href="#" class="d-block product-title">
                                            <button class="theme-btn d-block w-100 fs-6">Image Title</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
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