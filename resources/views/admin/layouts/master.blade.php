<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="{{ asset('public/assets/admin/images/favicon-32x32.png') }}" type="image/png" />
	<!--plugins-->
	<link href="{{ asset('public/assets/admin/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('public/assets/admin/css/pace.min.css') }}" rel="stylesheet" />
	<script src="{{ asset('public/assets/admin/js/pace.min.js') }}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('public/assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/admin/css/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
	<link href="{{ asset('public/assets/admin/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/admin/css/icons.css') }}" rel="stylesheet">
    <title>Admin</title>
    @yield('page-css')
</head>

<body>

    <div class="wrapper">
        @include('admin.layouts.sidebar')
        @include('admin.layouts.header')

        <div class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </div>

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © {{date('Y')}}. All right reserved.</p>
        </footer>

    </div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('public/assets/admin/js/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<script src="{{ asset('public/assets/admin/js/jquery.min.js') }}"></script>
	<script src="{{ asset('public/assets/admin/plugins/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ asset('public/assets/admin/plugins/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('public/assets/admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('public/assets/admin/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('public/assets/admin/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar(".app-container");
    </script>
    @yield('page-js')
</body>

</html>