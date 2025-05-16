<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('public/assets/admin/images/logo-icon.png') }}" class="logo-icon" alt="logo icon" />
        </div>
        <div>
            <h4 class="logo-text">Pexpic</h4>
        </div>
        <div class="toggle-icon ms-auto">
            <i class="bx bx-arrow-back"></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class="bx bx-home-alt"></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class='bx bxs-book-content'></i></div>
                <div class="menu-title">Slider</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i></div>
                <div class="menu-title">Application</div>
            </a>
            <ul>
                <li>
                    <a href="app-emailbox.html"><i class="bx bx-radio-circle"></i>Email</a>
                </li>

            </ul>
        </li>
        <li class="menu-label">UI Elements</li>
        <li>
            <a href="widgets.html">
                <div class="parent-icon"><i class="bx bx-cookie"></i></div>
                <div class="menu-title">Widgets</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-cart"></i></div>
                <div class="menu-title">eCommerce</div>
            </a>
            <ul>
                <li>
                    <a href="ecommerce-products.html"><i class="bx bx-radio-circle"></i>Products</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin.logout')}}">
                <div class="parent-icon"><i class='bx bx-power-off text-danger'></i></div>
                <div class="menu-title text-danger">Logout</div>
            </a>
        </li>

    </ul>
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->