@extends('web.layouts.master')

@section('title', 'Pexpic')

@section('page_css')
<style>
    main {
        width: 100vw;
        height: 100vh;
        background: #9b2a2a;
        background: linear-gradient(136deg, rgba(155, 42, 42, 1) 0%, rgba(83, 137, 237, 1) 100%);
    }
</style>
@endsection

@section('content')
<main>
    <div class="container custom--container py-4 h-100">
        <div class="row justify-content-center align-items-center g-3 h-100">
            <div class="col-md-7 text-center">
                <h3 class="fs-1 text-light text-center">Pexpic</h3>
                <p class="text-center text-light fs-4 my-3">Digital downloads for everyone</p>
                <img src="{{ asset('public/assets/web/images/hero-banner-image.jpg') }}" alt="login image" class="img-fluid rounded shadow w-50 d-none d-md-block mx-auto">
            </div>
            <div class="col-md-5 border-start border-warning border-5">
                <div class="card">
                    <div class="card-body shadow">
                        <form>
                            <h3 class="fs-2 text-center mb-4">Login</h3>
                            <div class="form-group mb-3">
                                <label for="username" class="fs-5 ">Username <span class="text-danger">*</span></label>
                                <input type="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="example@gmail.com">

                            </div>
                            <div class="form-group my-3">
                                <label for="password" class="fs-5 ">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control" id="password" placeholder="Password (Min 8 characters)">
                            </div>

                            <button type="submit" class="theme-btn d-block w-100 fs-4 my-3">Login</button>
                            <a href="{{ route('user.signup') }}" class=" fs-5">Don't have an account? <strong class="text-danger">Sign Up</strong></a>
                        </form>
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