@extends('web.layouts.master')

@section('title', 'Pexpic')

@section('page_css')
<style>

</style>
@endsection

@section('content')
<main>
    <section class="hero">
        <div class="custom--container container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="hero__container">
                        <div class="hero__container-overlay z-n1"></div>
                        <div class="hero__container-content">
                            <div class="container d-flex align-items-center flex-column">
                                <h2 class="text-light text-center mb-3">Digital downloads <br>for everyone</h2>
                                
                                <form action="">
                                    <div class="search-bar">
                                        <div class="search-bar__icon">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                        </div>
                                        <input type="text" name="filter" id="filter" placeholder="Search" class="form-control form--control search-bar__input">
                                    </div>
                                    <ul class="list list--row justify-content-center flex-wrap mt-3" style="--gap: 5px;">
                                        <li>
                                            <a class="search-tag" href="#">
                                                <span class="search-tag__icon">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <span class="search-tag__text">Indian</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="search-tag" href="#">
                                                <span class="search-tag__icon">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <span class="search-tag__text">India</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="search-tag" href="#">
                                                <span class="search-tag__icon">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <span class="search-tag__text">Poster</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="search-tag" href="#">
                                                <span class="search-tag__icon">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <span class="search-tag__text">Festival</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="search-tag" href="#">
                                                <span class="search-tag__icon">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <span class="search-tag__text">Tradition</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="search-tag" href="#">
                                                <span class="search-tag__icon">
                                                    <i class="fa-solid fa-magnifying-glass"></i>
                                                </span>
                                                <span class="search-tag__text">Hinduism</span>
                                            </a>
                                        </li>
                                    </ul>
                                </form>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="category section--sm pb-0">
        <div class="container custom--container">
            <div class="row">
                <div class="col-12">
                    <div class="category__slider">
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=15th-august&amp;popular=1"
                                class="category__link">
                                <span class="category__text">15th August</span>
                                <img src="{{asset('public/assets/web/images/category/independance-day.jpg')}}"
                                    alt="15th August" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=76th-republic-day&amp;popular=1"
                                class="category__link">
                                <span class="category__text">76th Republic Day</span>
                                <img src="https://posterit.in/assets/images/category/676ec700847841735313152.jpg"
                                    alt="76th Republic Day" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=bhai-dooj&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Bhai Dooj</span>
                                <img src="https://posterit.in/assets/images/category/67337bace83501731427244.jpg"
                                    alt="Bhai Dooj" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=bhai-dooj-png&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Bhai Dooj PNG</span>
                                <img src="https://posterit.in/assets/images/category/67337bb4abf761731427252.jpg"
                                    alt="Bhai Dooj PNG" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=christmas-day&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Christmas Day</span>
                                <img src="https://posterit.in/assets/images/category/674324a0b219d1732453536.jpg"
                                    alt="Christmas Day" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=constitution-day-png&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Constitution Day PNG</span>
                                <img src="https://posterit.in/assets/images/category/673df161c7ab11732112737.jpg"
                                    alt="Constitution Day PNG" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=cricket&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Cricket</span>
                                <img src="https://posterit.in/assets/images/category/67337bbcc98181731427260.jpg"
                                    alt="Cricket" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=dhak&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Dhak</span>
                                <img src="https://posterit.in/assets/images/category/67337bc492dd31731427268.jpg"
                                    alt="Dhak" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=diwali-2024&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Diwali 2024</span>
                                <img src="https://posterit.in/assets/images/category/67337bcc4a0f71731427276.jpg"
                                    alt="Diwali 2024" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=diwali-decoration&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Diwali Decoration</span>
                                <img src="https://posterit.in/assets/images/category/67337c064c6731731427334.jpg"
                                    alt="Diwali Decoration" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=durga-puja-2024&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Durga Puja 2024</span>
                                <img src="https://posterit.in/assets/images/category/67337c0e0d29f1731427342.jpg"
                                    alt="Durga Puja 2024" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=durga-puja-png&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Durga Puja PNG</span>
                                <img src="https://posterit.in/assets/images/category/67337c16688901731427350.jpg"
                                    alt="Durga Puja PNG" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=festival-offer-design&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Festival offer Design</span>
                                <img src="https://posterit.in/assets/images/category/67337c1e86a1b1731427358.jpg"
                                    alt="Festival offer Design" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=fonts-pack&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Fonts Pack</span>
                                <img src="https://posterit.in/assets/images/category/67337c26433761731427366.jpg"
                                    alt="Fonts Pack" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=gandhi-jayanti&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Gandhi Jayanti</span>
                                <img src="https://posterit.in/assets/images/category/67337c2df05b61731427373.jpg"
                                    alt="Gandhi Jayanti" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=ganesha-chaturthi&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Ganesha Chaturthi</span>
                                <img src="https://posterit.in/assets/images/category/67324c885abdc1731349640.jpg"
                                    alt="Ganesha Chaturthi" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=guru-nanak-jayanti&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Guru Nanak Jayanti</span>
                                <img src="https://posterit.in/assets/images/category/67337c37a67ba1731427383.jpg"
                                    alt="Guru Nanak Jayanti" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=india-flag&amp;popular=1"
                                class="category__link">
                                <span class="category__text">India Flag</span>
                                <img src="https://posterit.in/assets/images/category/67337c4791e461731427399.jpg"
                                    alt="India Flag" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=indian-festival&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Indian Festival</span>
                                <img src="https://posterit.in/assets/images/category/67337c5061b711731427408.jpg"
                                    alt="Indian Festival" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=indian-navy-day&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Indian Navy Day</span>
                                <img src="https://posterit.in/assets/images/category/674c3f6213dc91733050210.jpg"
                                    alt="Indian Navy Day" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=kali-puja&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Kali Puja</span>
                                <img src="https://posterit.in/assets/images/category/67337c593f0801731427417.jpg"
                                    alt="Kali Puja" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=lohri&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Lohri</span>
                                <img src="https://posterit.in/assets/images/category/6778007ecc9701735917694.jpg"
                                    alt="Lohri" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=lord-ganesha-png&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Lord Ganesha PNG</span>
                                <img src="https://posterit.in/assets/images/category/67324ca561ef11731349669.jpg"
                                    alt="Lord Ganesha PNG" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=lord-krishna&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Lord Krishna</span>
                                <img src="https://posterit.in/assets/images/category/67337be9de97f1731427305.jpg"
                                    alt="Lord Krishna" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=lord-shiva&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Lord Shiva</span>
                                <img src="https://posterit.in/assets/images/category/67337bde5112f1731427294.jpg"
                                    alt="Lord Shiva" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=makar-sankranti&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Makar Sankranti</span>
                                <img src="https://posterit.in/assets/images/category/677694467827a1735824454.png"
                                    alt="Makar Sankranti" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=mandala&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Mandala</span>
                                <img src="https://posterit.in/assets/images/category/67337c636eb801731427427.jpg"
                                    alt="Mandala" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=merigold&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Marigold</span>
                                <img src="https://posterit.in/assets/images/category/67337c6a3dab91731427434.jpg"
                                    alt="Marigold" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=national-constitution-day&amp;popular=1"
                                class="category__link">
                                <span class="category__text">National Constitution Day</span>
                                <img src="https://posterit.in/assets/images/category/673b03be599881731920830.jpg"
                                    alt="National Constitution Day" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=national-youth-day&amp;popular=1"
                                class="category__link">
                                <span class="category__text">National Youth Day</span>
                                <img src="https://posterit.in/assets/images/category/6772a56c0b43f1735566700.jpg"
                                    alt="National Youth Day" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=navaratri&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Navaratri</span>
                                <img src="https://posterit.in/assets/images/category/67337c7132bac1731427441.jpg"
                                    alt="Navaratri" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=netaji-subhas-chandra-bose&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Netaji Subhas Chandra Bose</span>
                                <img src="https://posterit.in/assets/images/category/678a2a311e9361737108017.png"
                                    alt="Netaji Subhas Chandra Bose" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=new-year-2025&amp;popular=1"
                                class="category__link">
                                <span class="category__text">New Year 2025</span>
                                <img src="https://posterit.in/assets/images/category/676ab92e2deb31735047470.jpg"
                                    alt="New Year 2025" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=radio&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Radio</span>
                                <img src="https://posterit.in/assets/images/category/67337c77e6d4d1731427447.jpg"
                                    alt="Radio" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=raksha-bandhan&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Raksha Bandhan</span>
                                <img src="https://posterit.in/assets/images/category/67337c7f03d101731427455.jpg"
                                    alt="Raksha Bandhan" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=saraswati-puja&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Saraswati Puja</span>
                                <img src="https://posterit.in/assets/images/category/678a7125d62151737126181.png"
                                    alt="Saraswati Puja" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=typography&amp;popular=1"
                                class="category__link">
                                <span class="category__text">Typography</span>
                                <img src="https://posterit.in/assets/images/category/67337c86457e91731427462.jpg"
                                    alt="Typography" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=world-aids-day&amp;popular=1"
                                class="category__link">
                                <span class="category__text">World Aids Day</span>
                                <img src="https://posterit.in/assets/images/category/6745ccb018ce61732627632.jpg"
                                    alt="World Aids Day" class="category__img">
                            </a>
                        </div>
                        <div class="category__slider-item">
                            <a href="https://posterit.in/search?type=image&amp;category=world-cancer-day&amp;popular=1"
                                class="category__link">
                                <span class="category__text">World Cancer Day</span>
                                <img src="https://posterit.in/assets/images/category/6798dac79dc401738070727.jpg"
                                    alt="World Cancer Day" class="category__img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="section__head-xl">
            <div class="container custom--container">
                <div class="row justify-content-start">
                    <div class="col-md-8 col-xl-6">
                        <h2 class="section__title text-left mb-0">Popular Collection</h2>
                        <p class="mb-0 sm-text text-left">
                            Explore stock photography by category, all free for commercial use
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container custom--container">
            <div class="row g-4 justify-content-center">
                <div class="col-sm-6 col-lg-3">
                    <div class="collection">
                        <div class="collection__group">
                            <ul class="collection__list collection__list-tripple">
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-3.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-2.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-1.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="https://posterit.in/collection/76th-india-republic-day/39/detail">
                            <h4 class="collection__title">76th India Republic Day</h4>
                        </a>

                        <ul class="list list--row flex-wrap" style="--gap: 5px">
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=76th%20republic%20day">76th
                                    republic day</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=republic%20day%202025">Republic
                                    day 2025</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=26th%20january">26th
                                    january</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=indian%20republic%20day">Indian
                                    republic day</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="collection">
                        <div class="collection__group">
                            <ul class="collection__list collection__list-tripple">
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-3.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-2.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-1.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="https://posterit.in/collection/makar-sankranti/41/detail">
                            <h4 class="collection__title">Makar Sankranti</h4>
                        </a>

                        <ul class="list list--row flex-wrap" style="--gap: 5px">
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=indian%20festival">Indian
                                    festival</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=makar%20sankranti">Makar
                                    sankranti</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=makar%20sankranti%20poster">Makar
                                    sankranti poster</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=festival%20poster">Festival
                                    poster</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="collection">
                        <div class="collection__group">
                            <ul class="collection__list collection__list-tripple">
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-3.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-2.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-1.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="https://posterit.in/collection/national-youth-day/40/detail">
                            <h4 class="collection__title">National Youth Day</h4>
                        </a>

                        <ul class="list list--row flex-wrap" style="--gap: 5px">
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=national%20youth%20day">National
                                    youth day</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=national%20youth%20day%202025">National
                                    youth day 2025</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=national%20youth%20day%20in%20india">National
                                    youth day in india</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=national%20youth%20day%20celebration">National
                                    youth day celebration</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="collection">
                        <div class="collection__group">
                            <ul class="collection__list collection__list-tripple">
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-3.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-2.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                                <li class="bg--light">
                                    <a href="https://posterit.in/collection/76th-india-republic-day/39/detail"
                                        class="collection__link">
                                        <img src="{{ asset('public/assets/web/images/product-1.jpg') }}"
                                            alt="image" class="collection__img">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <a href="https://posterit.in/collection/saraswati-puja/42/detail">
                            <h4 class="collection__title">Saraswati Puja</h4>
                        </a>

                        <ul class="list list--row flex-wrap" style="--gap: 5px">
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=Vasant%20Panchami">Vasant
                                    Panchami</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=social%20media%20post">Social
                                    media post</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=Saraswati%20Puja">Saraswati
                                    Puja</a>
                            </li>
                            <li>
                                <a class="btn btn--tag"
                                    href="https://posterit.in/search?type=image&amp;tag=Indian%20festival">Indian
                                    festival</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container custom--container">
        <div class="row justify-content-start">
            <div class="col-md-8 col-xl-6">
                <h2 class="section__title text-left mb-0">Latest uploads</h2>
            </div>
        </div>
    </div>
    <div class="section--sm section--bottom">
        <div class="container custom--container">
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="latest-product">
                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                        <a href="{{ route('web.product-details') }}" class="d-block product-title">
                            <button class="theme-btn d-block w-100 fs-5">Image Title</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="latest-product">
                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                        <a href="#" class="d-block product-title">
                            <button class="theme-btn d-block w-100 fs-5">Image Title</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="latest-product">
                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                        <a href="#" class="d-block product-title">
                            <button class="theme-btn d-block w-100 fs-5">Image Title</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="latest-product">
                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                        <a href="#" class="d-block product-title">
                            <button class="theme-btn d-block w-100 fs-5">Image Title</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="latest-product">
                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                        <a href="#" class="d-block product-title">
                            <button class="theme-btn d-block w-100 fs-5">Image Title</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="latest-product">
                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                        <a href="#" class="d-block product-title">
                            <button class="theme-btn d-block w-100 fs-5">Image Title</button>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="latest-product">
                        <img src="{{ asset('public/assets/web/images/category-image.jpg') }}" alt="thumbnail" class="img-fluid rounded shadow">
                        <a href="#" class="d-block product-title">
                            <button class="theme-btn d-block w-100 fs-5">Image Title</button>
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

    <div class="container custom--container">
        <div class="service-section section--sm section--bottom">
            <div class="section__head">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-xl-5 col-xxl-6">
                            <h2 class="section__title text-center">
                                Posterit Offers
                            </h2>
                            <p class="mb-0 text-center sm-text section__para mx-auto">
                                Indian-based design assets to boost your creativity.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row g-4 justify-content-center">
                    <div class="col-sm-6 col-lg-3">
                        <div class="service-card text-center text-lg-start">
                            <div class="service-card__icon service-card__icon-1 mx-auto ms-lg-0">
                                <i class="fa-solid fa-file"></i>
                            </div>
                            <div class="service-card__content">
                                <h5 class="service-card__title">
                                    Indian-Based AI Images
                                </h5>
                                <p class="service-card__text">
                                    High-quality, scalable images.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="service-card text-center text-lg-start">
                            <div class="service-card__icon service-card__icon-2 mx-auto ms-lg-0">
                                <i class="fa-solid fa-file"></i>
                            </div>
                            <div class="service-card__content">
                                <h5 class="service-card__title">
                                    Indian-Based PSDs
                                </h5>
                                <p class="service-card__text">
                                    Editable files for customization.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="service-card text-center text-lg-start">
                            <div class="service-card__icon service-card__icon-3 mx-auto ms-lg-0">
                                <i class="fa-solid fa-file"></i>
                            </div>
                            <div class="service-card__content">
                                <h5 class="service-card__title">
                                    Indian-Based PNGs
                                </h5>
                                <p class="service-card__text">
                                    Ready-to-use images for any project.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="service-card text-center text-lg-start">
                            <div class="service-card__icon service-card__icon-4 mx-auto ms-lg-0">
                                <i class="fa-solid fa-file"></i>
                            </div>
                            <div class="service-card__content">
                                <h5 class="service-card__title">
                                    Indian-Based Vectors
                                </h5>
                                <p class="service-card__text">
                                    Unique vector graphics with an Indian touch.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section--sm">
        <div class="cta-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section--xl">
                            <div class="row justify-content-center">
                                <div class="col-md-8 col-lg-6 col-xl-5">
                                    <div class="cta">
                                        <h2 class="cta__title text-md-center">
                                            Get Access to Premium Indian Design Resources
                                        </h2>
                                        <p class="cta__text text-md-center">
                                            Sign up now to explore high-quality vectors, PNGs, PSDs, and AI images
                                            tailored for your creative needs.
                                        </p>
                                        <div class="text-md-center">
                                            <a href="#" class="theme-btn">Sign Up
                                                Free</a>
                                        </div>
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