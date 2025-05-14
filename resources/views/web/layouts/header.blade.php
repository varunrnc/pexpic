<header class="header-fixed header-primary header-two">
    <div class="custom--container container">
        <div class="header-primary__content">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="logo" href="{{ route('home') }}">
                    <img class="img-fluid logo__is" src="{{ asset('public/assets/global/images/logo.png') }}"
                        alt="logo">
                </a>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarToggle"
                    type="button" aria-expanded="false">
                    <span class="menu-toggle"></span>
                </button>
            </nav>
            <div class="navbar-collapse collapse" id="navbarToggle">
                <div class="nav-container">
                    <ul class="list primary-menu">
                        <li class="nav-item">
                            <a class="primary-menu__link ps-0" href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="primary-menu__link ps-0" href="#">About</a>
                        </li>
                        <li class="nav-item has-sub">
                                <a class="primary-menu__link" href="javascript:void(0)">PSD <i class="fa-solid fa-angle-down"></i></a>
                                <div class="category-mega-menu primary-menu__sub">
                                    <div class="mega-menu-wrapper">
                                        <div class="mega-menu-wrapper__list category">
                                            <p class="mega-menu-wrapper__title">
                                                PSD Categories </p>
                                            <div class="content-item">
                                                <ul class="mega-menu__list">
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=durga-puja-2024">
                                                            Durga Puja 2024 </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=diwali-2024">
                                                            Diwali 2024 </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=lord-shiva">
                                                            Lord Shiva </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=76th-republic-day">
                                                            76th Republic Day </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=makar-sankranti">
                                                            Makar Sankranti </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=raksha-bandhan">
                                                            Raksha Bandhan </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=saraswati-puja">
                                                            Saraswati Puja </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=world-aids-day">
                                                            World Aids Day </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=bhai-dooj">
                                                            Bhai Dooj </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=new-year-2025">
                                                            New Year 2025 </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=guru-nanak-jayanti">
                                                            Guru Nanak Jayanti </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=christmas-day">
                                                            Christmas Day </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=typography">
                                                            Typography </a> </li>
                                                    <li class="mega-menu__item"> <a
                                                            href="https://posterit.in/search?type=image&amp;category=">
                                                            All Category </a> </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="mega-menu-wrapper__list photo">
                                            <a href="https://posterit.in/search?fileType=psd&amp;type=collection"
                                                class="mega-menu-wrapper__title collection d-block">
                                                PSD Collections </a>
                                            <a class="content-item__thumb"
                                                href="https://posterit.in/search?fileType=psd&amp;type=collection">
                                                <img src="https://posterit.in/assets/images/file_type_collection/66a62fa5aef5c1722167205.png"
                                                    alt="File type">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <li class="nav-item">
                            <a class="primary-menu__link ps-0" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="primary-menu__link ps-0" href="#">Contact</a>
                        </li>
                        <li class="nav-item mt-1">
                            <a class="theme-btn" href="{{ route('user.login') }}">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="overlay"></div>