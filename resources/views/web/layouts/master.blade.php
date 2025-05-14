<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="pexpic">
    <meta name="description" content="Buy Digital Pictures">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('public/favicon.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{asset('public/assets/global/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/global/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/web/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/web/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/web/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/assets/web/css/main.css')}}">
    @yield('page_css')
</head>

<body>
    <div class="preloader">
        <div class="preloader__img">
            <img src="{{ asset('public/favicon.png') }}" alt="Preloader">
        </div>
    </div>

    <div class="back-to-top">
        <span class="back-top">
        <i class="fa-solid fa-arrow-up"></i>
        </span>
    </div>

    @include('web.layouts.header')

    @yield('content')

    @include('web.layouts.footer')

    <!--<< All JS Plugins >>-->
    <script src="{{ asset('public/assets/global/js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('public/assets/global/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/web/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('public/assets/web/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('public/assets/web/js/slick.js') }}"></script>
    <script src="{{ asset('public/assets/web/js/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('public/assets/web/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/assets/web/js/main.js') }}"></script>
    @yield('page_js')
</body>

</html>