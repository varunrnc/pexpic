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
        <li class="menu-label">Admin</li>
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon"><i class="bx bx-home-alt"></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.slider.index')}}">
                <div class="parent-icon"><i class='bx bxs-book-content'></i></div>
                <div class="menu-title">Slider</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class="bx bx-category"></i></div>
                <div class="menu-title">Product</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.category.index')}}"><i class="bx bx-radio-circle"></i>Category</a>
                </li>
                <li>
                    <a href="{{route('admin.product.index')}}"><i class="bx bx-radio-circle"></i>Product</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bxs-folder'></i></div>
                <div class="menu-title">Blog</div>
            </a>
            <ul>
                <li>
                    <a href="{{route('admin.blog.category.index')}}"><i class="bx bx-radio-circle"></i>Blog Category</a>
                </li>
                <li>
                    <a href="{{route('admin.blog.index')}}"><i class="bx bx-radio-circle"></i>Blog Content</a>
                </li>

            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bxs-user' ></i></div>
                <div class="menu-title">Users</div>
            </a>
            <ul>
                <li>
                    <a href="app-emailbox.html"><i class="bx bx-radio-circle"></i>View Users</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bxs-photo-album' ></i></div>
                <div class="menu-title">Orders</div>
            </a>
            <ul>
                <li>
                    <a href="app-emailbox.html"><i class="bx bx-radio-circle"></i>View Orders</a>
                </li>
            </ul>
        </li>
        <li class="menu-label">Logout</li>
        
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