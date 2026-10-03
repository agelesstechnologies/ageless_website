/*===================================================
    Template Scripts
====================================================*/
(function ($) {
    "use strict";

    // Preloader
    $(window).on('load', function () {
        $('body').addClass('loaded');
    });

    $(document).ready(function () {

        var html = $('html');

        // Responsive Classes
        function responsiveClasses() {
            var body = $("body");
            if ($(window).width() < (body.is('.home-page, .about-page, .products-page, .projects-page, .blog-page, .contact-page') ? 1200 : 992)) {
                body.removeClass("viewport-lg");
                body.addClass("viewport-sm");
            } else {
                body.removeClass("viewport-sm");
                body.addClass("viewport-lg");
            }
        }

        // Window Resize
        $(window).on("resize", function () {
            responsiveClasses();
        }).resize();

        // Sticky Header - Single Navigation Bar
        function stickyHeader() {
            var mainHeader = $("header.main-header");
            $(window).on("scroll", function () {
                var yOffset = $(window).scrollTop();
                if (yOffset > 30) {
                    mainHeader.addClass("is-scrolled");
                } else {
                    mainHeader.removeClass("is-scrolled");
                }
            });
        }
        stickyHeader();

        // Mobile Menu
        function mobileMenu() {
            $('.mobile-menu-backdrop, .mobile-navigation-menu').remove();

            var logoSrc = $("header.main-header .site-logo img").attr("src") || "/assets/img/nlogo.png";
            var menuWrapper = $("header.main-header .header-menu-wrap .nav-menu").clone();
            var menuDescriptions = {
                'Home': 'Discover Ageless Entertainments',
                'About Us': 'Meet your park engineering partner',
                'Projects': 'Explore our completed destinations',
                'Products': 'Find rides and entertainment attractions',
                'Blog': 'Ideas, guides and industry insights',
                'Contact': 'Tell us about your next project'
            };
            menuWrapper.find('> li > a').each(function () {
                var label = $(this).children('span').first();
                var description = menuDescriptions[label.text().trim()];
                if (!description) return;
                label.wrap('<span class="drawer-link-copy"></span>');
                $('<small class="drawer-link-description"></small>').text(description).insertAfter(label);
            });

            var drawerHtml = `
                <div class="mobile-menu-backdrop"></div>
                <div class="mobile-navigation-menu" id="mobile-navigation">
                    <div class="mobile-menu-header">
                        <div class="mobile-logo">
                            <a href="/"><img src="${logoSrc}" alt="Ageless"></a>
                        </div>
                        <button id="mobile-menu-close" aria-label="Close navigation"><i class="las la-times"></i></button>
                    </div>
                    <div class="mobile-menu-body"></div>
                    <div class="mobile-menu-footer">
                        <a href="tel:+917025777755" class="drawer-call-btn">
                            <i class="las la-phone-volume"></i>
                            <span>Call: +91 7025 777 755</span>
                        </a>
                        <ul class="drawer-socials">
                            <li><a href="https://www.facebook.com/agelessindia" aria-label="Facebook"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/ageless_entertainments_" aria-label="Instagram"><i class="lab la-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/@agelessentertainments9107" aria-label="YouTube"><i class="lab la-youtube"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/ageless-entertainments-582290367/" aria-label="LinkedIn"><i class="lab la-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
            `;

            $("body").append(drawerHtml);
            $('.mobile-menu-header .mobile-logo a').attr('href', $('header.main-header .site-logo a').attr('href') || '/');
            $('.mobile-navigation-menu .mobile-menu-body').append(menuWrapper);

            function toggleDrawer(open) {
                var isOpen = typeof open === 'boolean' ? open : !$(".mobile-navigation-menu").hasClass("open-mobile-menu");
                $('.mobile-menu-icon').attr('aria-expanded', String(isOpen));
                if (isOpen) {
                    $(".mobile-menu-icon, .burger-menu").addClass("menu-open");
                    $(".mobile-navigation-menu").addClass("open-mobile-menu");
                    $(".mobile-menu-backdrop").addClass("active");
                    $("body").css("overflow", "hidden");
                } else {
                    $(".mobile-menu-icon, .burger-menu").removeClass("menu-open");
                    $(".mobile-navigation-menu").removeClass("open-mobile-menu");
                    $(".mobile-menu-backdrop").removeClass("active");
                    $("body").css("overflow", "");
                }
            }

            $(".mobile-menu-icon, .burger-menu").on("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                toggleDrawer();
            });

            $(document).on("click", "#mobile-menu-close, .mobile-menu-backdrop", function (e) {
                e.preventDefault();
                toggleDrawer(false);
            });

            $(document).on('keydown', function (e) {
                if (e.key === 'Escape' && $('.mobile-navigation-menu').hasClass('open-mobile-menu')) {
                    toggleDrawer(false);
                    $('.mobile-menu-icon').trigger('focus');
                }
            });

            $(window).on('resize', function () {
                var desktopWidth = $('body').is('.home-page, .about-page, .products-page, .projects-page, .blog-page, .contact-page') ? 1200 : 992;
                if (window.innerWidth >= desktopWidth) toggleDrawer(false);
            });

            $(".mobile-navigation-menu .nav-menu a").on("click", function () {
                if (!$(this).parent().has("ul").length) {
                    toggleDrawer(false);
                }
            });

            $(".mobile-navigation-menu ul li:has(ul)").each(function () {
                $(this).append('<span class="dropdown-plus"></span>');
                $(this).addClass("dropdown_menu");
            });

            $(".mobile-navigation-menu .dropdown-plus").on("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                $(this).prev("ul").slideToggle(300);
                $(this).toggleClass("dropdown-open");
                $(this).parent("li").toggleClass("dropdown-open");
            });
        }

        mobileMenu();

        // Popup Search Box
        $(function () {
            $("#popup-search-box").removeClass("toggled");
            $("body").removeClass("open-search-box");
            $(".dl-search-icon").on("click", function (e) {
                e.stopPropagation();
                $("body").toggleClass("open-search-box");
                $("#popup-search").focus();
            });

            $("#popup-search-box input").on("click", function (e) {
                e.stopPropagation();
            });
            $(document).on(
                "click",
                ".search-close, #searchbox-overlay",
                function (e) {
                    e.preventDefault();
                    $("body.open-search-box").removeClass("open-search-box");
                }
            );
        });

        // Do Slider Animation
        function doAnimations(elements) {
            var animationEndEvents = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
            elements.each(function () {
                var $this = $(this);
                var $animationDelay = $this.data('delay');
                var $animationDuration = $this.data('duration');
                var $animationType = 'animated ' + $this.data('animation');
                $this.css({
                    'animation-delay': $animationDelay,
                    '-webkit-animation-delay': $animationDelay,
                    'animation-duration': $animationDuration
                });
                $this.addClass($animationType).one(animationEndEvents, function () {
                    $this.removeClass($animationType);
                });
            });
        }

        // Main Slider
        var mainSlider;
        var sliderOptions = {
            speed: 1000,
            autoplay: true,
            mousewheel: false,
            loop: true,
            effect: 'fade',
            pagination: {
                el: ".slider-pagination",
                clickable: true,
            },
            navigation: false,
        };

        sliderOptions.on = {
            slideChangeTransitionStart: function () {
                var swiper = this;
                var animatingElements = $(swiper.slides[swiper.activeIndex]).find('[data-animation]');
                doAnimations(animatingElements);
            },
            resize: function () {
                this.update();
            }
        };

        mainSlider = new Swiper('.main-slider', sliderOptions);

        //Running Animated Text
        const scrollers = document.querySelectorAll(".scroller");

        if (!window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            addAnimation();
        }

        function addAnimation() {
            scrollers.forEach((scroller) => {
                scroller.setAttribute("data-animated", true);

                const scrollerInner = scroller.querySelector(".scroller__inner");
                const scrollerContent = Array.from(scrollerInner.children);

                scrollerContent.forEach((item) => {
                    const duplicatedItem = item.cloneNode(true);
                    duplicatedItem.setAttribute("aria-hidden", true);
                    scrollerInner.appendChild(duplicatedItem);
                });
            });
        }

        //Project Carousel
        var swiperProject = new Swiper(".project-carousel", {
            slidesPerView: 3,
            spaceBetween: 25,
            slidesPerGroup: 1,
            loop: true,
            loopAdditionalSlides: 2,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            speed: 700,
            pagination: {
                el: ".project-carousel .carousel-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev'
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 20
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                    spaceBetween: 25
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 3,
                    slidesPerGroup: 1,
                    spaceBetween: 30
                }
            }
        });

        //Testimonial Carousel
        var testiThumbActive = $('.testi-thumb-active .testi-thumb-img');
        var testiThumb = [];
        $('.testimonial-carousel .swiper-slide').each(function (i, item) {
            testiThumb.push($(item).data('thumb'));
        });

        var testimonialCarousel = new Swiper('.testimonial-carousel', {
            autoplay: true,
            loop: true,
            // If we need pagination
            pagination: {
                el: '.testi-custom-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                    return '<span class="' + className + '" style="background-image: url(' + (testiThumb[index]) + ')"></span>';
                },
            },

            // Navigation arrows
            navigation: {
                nextEl: '.test-nav-wrap .swiper-next',
                prevEl: '.test-nav-wrap .swiper-prev',
            },
            on: {
                slideChangeTransitionStart: function () {
                    var swiper = this;
                    var imgThumb = $(swiper.slides[swiper.activeIndex]).data('thumb');
                    testiThumbActive.css('background-image', 'url(' + imgThumb + ')');
                },
                resize: function () {
                    this.update();
                }
            },

        });

        //Review Carousel
        var swiperProject = new Swiper(".review-carousel", {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerGroup: 1,
            loop: true,
            autoplay: false,
            speed: 400,
            pagination: {
                el: ".review-carousel .carousel-pagination",
                clickable: true,
            },
            navigation: false,
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 25
                },
                // when window width is >= 767px
                767: {
                    slidesPerView: 1,
                    slidesPerGroup: 1,
                    spaceBetween: 30
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 2,
                    slidesPerGroup: 1
                }
            }
        });

        //Sponsor Carousel
        var swiperSponsor = new Swiper(".sponsor-carousel", {
            slidesPerView: "5",
            spaceBetween: 30,
            slidesPerGroup: 1,
            loop: true,
            autoplay: true,
            speed: 700,
            pagination: {
                el: ".sponsor-carousel .swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 2,
                    slidesPerGroup: 1,
                    spaceBetween: 10
                },
                // when window width is >= 767px
                767: {
                    slidesPerView: 3,
                    slidesPerGroup: 1,
                    spaceBetween: 0
                },
                // when window width is >= 1024px
                1024: {
                    slidesPerView: 5,
                    slidesPerGroup: 1
                }
            }
        });

        // Accordion
        $('.faq-accordion .accordion-item').on('click', function () {
            $(".faq-accordion .accordion-item.active").removeClass("active");
            if (!$('.faq-accordion .accordion-item').hasClass('active')) {
                $(this).addClass("active");
            }
            return false;
        });

        // Funfact Counter
        $('.counter-item').waypoint(
            function () {
                var odo = $(".counter-item .odometer");
                odo.each(function () {
                    var countNumber = $(this).attr("data-count");
                    $(this).html(countNumber);
                });
            }, {
            offset: "80%",
            triggerOnce: true
        }
        );

        // Wow JS Active
        new WOW().init();

        // Nice Select Active
        $('select:not(.native-select)').niceSelect();

        // Current Year
        var currentYear = new Date().getFullYear();
        $('#currentYear').append(currentYear);

        // Scrool To Top
        var scrollTop = $("#scroll-top");
        $(window).on('scroll', function () {
            var topPos = $(this).scrollTop();
            if (topPos > 100) {
                $('#scrollup').removeClass('hide');
                $('#scrollup').addClass('show');

            } else {
                $('#scrollup').removeClass('show');
                $('#scrollup').addClass('hide');
            }
        });

        $(scrollTop).on("click", function () {
            $('html, body').animate({
                scrollTop: 0
            }, 100);
            return false;
        });

        // Custom Cursor
        function customCursor() {
            $('body').append('<div class="dl-cursor"></div>');
            var cursor = $('.dl-cursor'),
                projectView = $('.project-view');

            $(window).on('mousemove', function (e) {
                cursor.css({
                    'transform': 'translate(' + (e.clientX - 5) + 'px,' + (e.clientY - 5) + 'px)',
                    'visibility': 'inherit'
                });
            });

            $(window).on('mouseout', function () {
                cursor.css('visibility', 'hidden');
            });
            projectView.each(function () {
                $(this).on('mouseleave', function () {
                    cursor.removeClass('expand');
                });
                $(this).on('mouseover', function () {
                    cursor.addClass('expand');
                });
            });
        }

        var isTouchDevice = 'ontouchstart' in window || navigator.maxTouchPoints > 0;
        if ($('body').hasClass('viewport-lg') && !isTouchDevice && window.matchMedia('(pointer: fine)').matches) {
            customCursor();
        }

        // Venobox Active
        $('.venobox').venobox({
            bgcolor: 'transparent',
            spinner: 'spinner-pulse',
            numeration: true,
            infinigall: true
        });

    });

    // Auto-load Animated Kite Cursor
    if (!document.getElementById('kite-cursor-js') && window.matchMedia && !window.matchMedia('(pointer: coarse)').matches) {
        var ks = document.createElement('script');
        ks.id = 'kite-cursor-js';
        ks.src = document.querySelector('script[src*="main.js"]') ? document.querySelector('script[src*="main.js"]').src.replace('main.js', 'kite-cursor.js') : '/assets/js/kite-cursor.js';
        document.head.appendChild(ks);
    }

})(jQuery);
