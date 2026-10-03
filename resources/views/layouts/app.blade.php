<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', $title ?? 'Amusement Park Builder & Ride Manufacturer in India | Ageless')</title>
    <meta name="description" content="@yield('meta_description', 'Ageless Entertainments designs, builds and installs amusement parks, adventure rides, immersive attractions, 12D theatres, flying cinemas, traffic parks and entertainment solutions across India.')">
    <meta name="keywords" content="@yield('meta_keywords', 'amusement park builder in india, amusement park manufacturer, theme park builder india, amusement park consultant, adventure park manufacturer, indoor amusement park setup')">
    <meta name="author" content="Ageless Entertainments">
    <link rel="canonical" href="@yield('canonical', url()->current())">

    <!-- Open Graph / Social Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="@yield('canonical', url()->current())">
    <meta property="og:title" content="@yield('title', $title ?? 'Amusement Park Builder & Ride Manufacturer in India | Ageless')">
    <meta property="og:description" content="@yield('meta_description', 'Ageless Entertainments designs, builds and installs amusement parks, adventure rides, immersive attractions, 12D theatres, flying cinemas, traffic parks and entertainment solutions across India.')">
    <meta property="og:image" content="{{ asset('hero-park.png') }}">

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ time() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ time() }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/keyframe-animation.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/line-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/construction-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/common-style.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/parallax-home.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/about-page.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/products-page.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/projects-page.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}?v={{ time() }}">
    @stack('styles')
</head>
<body class="@yield('body_class')">
<header class="main-header wonder-nav-header">
            <div class="container">
                <div class="nav-capsule-wrapper">
                    <div class="site-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset("assets/img/nlogo.png") }}" alt="Logo"></a>
                    </div>
                    <div class="header-menu-wrap">
                        <ul class="nav-menu">
                            <li>
                                <a href="{{ url('/') }}">
                                    <i class="las la-home nav-item-icon"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/about-company') }}">
                                    <i class="las la-building nav-item-icon"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/projects') }}">
                                    <i class="las la-layer-group nav-item-icon"></i>
                                    <span>Projects</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/products') }}">
                                    <i class="las la-cubes nav-item-icon"></i>
                                    <span>Products</span>
                                </a>
                            </li>
                            <li class="dropdown_menu">
                                <a href="{{ route('blog.index') }}">
                                    <i class="las la-newspaper nav-item-icon"></i>
                                    <span>Blog</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('/contact') }}">
                                    <i class="las la-envelope nav-item-icon"></i>
                                    <span>Contact</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav-right-actions">
                        <a href="tel:+917025777755" class="nav-call-btn">
                            <span class="call-icon-wrap"><i class="las la-phone-volume"></i></span>
                            <span>Call Us</span>
                        </a>
                        <button type="button" class="mobile-menu-icon" aria-label="Open navigation" aria-expanded="false" aria-controls="mobile-navigation" style="border: 0; background: transparent; padding: 0;">
                            <span class="burger-menu" aria-hidden="true">
                                <span class="line-menu line-half first-line"></span>
                                <span class="line-menu"></span>
                                <span class="line-menu line-half last-line"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
@yield('content')
<footer class="footer-section">
            <div class="container">
                <div class="row footer-area">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="footer-widget">
                            <a class="footer-logo" href="{{ url('/') }}"><img src="{{ asset("assets/img/nlogo.png") }}" alt="logo"></a>
                            <p>Our success in creating business solutions is due in part spacially to talented committed team.</p>
                            <ul class="footer-social">
                                <li><a href="https://www.facebook.com/agelessindia"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/ageless_entertainments_"><i class="lab la-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/@agelessentertainments9107"><i class="lab la-youtube"></i></a></li>
                                <li><a href="https://www.linkedin.com/in/ageless-entertainments-582290367/"><i class="lab la-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="footer-widget">
                            <h3>Company</h3>
                            <ul class="footer-list">
                                <li><a href="{{ url('/about') }}">About Us</a></li>
                                <li><a href="{{ url('/contact') }}">Get in Touch</a></li>
                                <li><a href="{{ url('/faqs') }}">Help &amp; Faqs</a></li>
                                <li><a href="{{ url('/faqs') }}">Privacy Policy</a></li>
                                <li><a href="{{ url('/contact') }}">Support</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="footer-widget">
                            <h3>Information</h3>
                            <ul class="footer-list">
                                <li>
                                    <p>A.M.A Arcade, Vallathol Junction, 4/1585, Seaport - Airport Rd, P.O, Thrikkakara, Front, Kochi, Kakkanad, Kerala 682021</p>
                                </li>
                                <li><a href="tel:7025777755">+91 7025 777 755</a></li>
                                <li><a href="#">sales@agelessind.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="footer-widget">
                            <h3>Subscribe Newslatters</h3>
                            <form action="php/mailchimp-subscribe.php" id="ajax_mc_form" class="subscribe-form">
                                <div class="mc-fields">
                                    <input id="mc_email" class="form-control" type="email" name="mc_email" placeholder="Your Email" required>
                                    <button class="submit"><i class="las la-long-arrow-alt-right"></i></button>
                                </div>
                                <div class="clearfix"></div>
                                <div id="mc-form-messages" class="alert" role="alert"></div>
                            </form>
                            <p>Subscribe us and get all the benifits from today.</p>
                        </div>
                    </div>
                </div>
                <div class="copyright-text">
                    © <span id="currentYear"></span> Ageless Entertainments All Rights Reserved.</a>
                </div>
            </div>
    </footer>
    <!--/.footer-section-->

    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top"><i class="las la-arrow-up"></i></button>
    </div>
    <!--/.scrollup-->

    <!--jQuery Lib-->
    <script src="{{ asset("assets/js/vendor/jquary-3.6.0.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/bootstrap.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/popper.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/odometer.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/jquery.nice-select.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/waypoints.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/venobox.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/swiper.min.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/smooth-scroll.js") }}"></script>
    <script src="{{ asset("assets/js/vendor/wow.min.js") }}"></script>
    <script src="{{ asset("assets/js/mailchimp.js") }}"></script>
    <script src="{{ asset('assets/js/main.js') }}?v={{ filemtime(public_path('assets/js/main.js')) }}"></script>
    <script src="{{ asset("assets/js/kite-cursor.js") }}?v={{ time() }}"></script>


@include('partials.website-chat')
