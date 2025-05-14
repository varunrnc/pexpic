/*-----------------------------------------------------------------
Theme Name: Pexpic
Author: Pexpic
Author URI: 
Version: 1.0.0 
Description: Pexpic

-------------------------------------------------------------------
JS TABLE OF CONTENTS
-------------------------------------------------------------------

        01. Mobile Menu 
        02. Sidebar Toggle 
        03. Body Overlay  
        04. Sticky Header   
        05. Counterup 
        06. Wow Animation 
        07. Set Background Image Color & Mask  
        08. Banner Slider
        09. Best food items Slider 
        10. Testimonial Slider 
        11. Blog Slider 
        12. Gallery Slider 
        13. Popular Dishes Slider 
        14. Faq Slider     
        15. Client Slider 
        16. Popular Dishes Tab 
        17. MagnificPopup  view 
        18. Back to top   
        19. Progress Bar Animation 
        20. Mouse Cursor  
        21. Time Countdown  
        22. Range sliger 
        23. Select onput
        24. Quantity Plus Minus
        25. Search Popup
        26. Preloader   

------------------------------------------------------------------*/

(function ($) {
    "use strict";

    let screenSize = window.innerWidth;
	window.addEventListener("resize", function (e) {
		screenSize = window.innerWidth;
	});

    $(document).ready(function () {
        $(".back-to-top").on("click", function (event) {
            event.preventDefault();
            $("html, body").animate({
                scrollTop: 0
            }, 300);
        });

        $(window).on("scroll", function () {
            var ScrollTop = $(".back-to-top");
            if ($(window).scrollTop() > 1200) {
                ScrollTop.fadeIn(1000);
            } else {
                ScrollTop.fadeOut(1000);
            }
        });

        $(window).on("load", function () {  
            var preLoder = $(".preloader");
            preLoder.fadeOut(1000);
        });

        $('.menu-toggle').on('click', function () {
            $('.overlay').toggleClass('active');
        });
        $('.overlay').on('click', function () {
            $('.overlay').removeClass('active');
            $(".navbar-toggler").click();
        });

        // Mobile Submenu
        let primaryMenuLink = $(".primary-menu__link");
        let primaryMenu = $(".has-sub > .primary-menu__link");
        let primarySubMenu = $(".primary-menu__sub");
        if (primaryMenu || primarySubMenu || primaryMenuLink) {
            primaryMenu.on("click", function (e) {
                e.preventDefault();
                if (parseInt(screenSize) < parseInt(992)) {
                    $(this).toggleClass("active").siblings(primarySubMenu).slideToggle();
                }
                if (parseInt(screenSize) >= parseInt(992)) {
                    e.stopPropagation();
                    $(this)
                        .toggleClass("active")
                        .parent()
                        .siblings()
                        .children(".primary-menu__link")
                        .removeClass("active");
                }
            });
            primarySubMenu.each(function () {
                if (parseInt(screenSize) >= parseInt(992)) {
                    $(this).on("click", function (e) {
                        e.stopPropagation();
                    });
                }
            });
            $(document).on("click", function () {
                if (parseInt(screenSize) >= parseInt(992)) {
                    primaryMenuLink.removeClass("active");
                }
            });
        }


        // category slider 
        let categorySlider = $(".category__slider");
		if (categorySlider) {
			categorySlider.slick({
				mobileFirst: true,
				slidesToShow: 2,
				prevArrow: '<button type="button" class="category__slider-arrow category__slider-prev"><i class="fa-solid fa-angle-left"></i></button>',
				nextArrow: '<button type="button" class="category__slider-arrow category__slider-next"><i class="fa-solid fa-angle-right"></i></button>',
				responsive: [{
						breakpoint: 500,
						settings: {
							slidesToShow: 3,
						},
					},
					{
						breakpoint: 767,
						settings: {
							slidesToShow: 4,
						},
					},
					{
						breakpoint: 991,
						settings: {
							slidesToShow: 5,
						},
					},
					{
						breakpoint: 1199,
						settings: {
							slidesToShow: 7,
						},
					},
					{
						breakpoint: 1399,
						settings: {
							slidesToShow: 8,
						},
					},
					{
						breakpoint: 1599,
						settings: {
							slidesToShow: 9,
						},
					},
					{
						breakpoint: 1919,
						settings: {
							slidesToShow: 9,
						},
					},
				],
			});
		}

    });



})(jQuery);


