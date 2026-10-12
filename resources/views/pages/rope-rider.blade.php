<!doctype html>
    <html lang="en" class="no-js @include('partials.tailwind.poppins-font')
@include('partials.tailwind.bootstrap')
@include('partials.tailwind.animate')
@include('partials.tailwind.keyframe-animation')
@include('partials.tailwind.line-awesome')
@include('partials.tailwind.construction-icons')
@include('partials.tailwind.odometer')
@include('partials.tailwind.nice-select')
@include('partials.tailwind.swiper')
@include('partials.tailwind.venobox')
@include('partials.tailwind.slider')
@include('partials.tailwind.common-style')
@include('partials.tailwind.main')
@include('partials.tailwind.parallax-home')
@include('partials.tailwind.responsive')
@include('partials.tailwind.partials-clean-navigation-1')
@include('partials.tailwind.website-chat')
@include('partials.tailwind.kite-cursor')
@stack('tailwind_styles')">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Ageless Entertainments is India's premier rope rider, zipline, and high-altitude adventure course manufacturer, engineering certified adventure park attractions.">
        <meta name="keywords" content="rope rider manufacturer for adventure parks, zipline manufacturer india, rope course manufacturer, adventure park builder india, net park manufacturer">
        <meta name="author" content="Ageless Entertainments">

        <title>High &amp; Low Rope Rider for Adventure Parks | Ageless</title>

        <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ filemtime(public_path('assets/img/favicon.png')) }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ filemtime(public_path('assets/img/favicon.png')) }}">

        @include('partials.clean-navigation')
    
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}?v={{ filemtime(public_path('assets/css/tailwind.css')) }}">
</head>

    <body>
        
        <div class="site-preloader">
            <div class="spinner"></div>
        </div>
        <!-- Site Preloader -->

           @include('partials.navigation')
        <!--/.main-header-->

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="s" placeholder="Type keywords here...">
                <button id="popup-search-button" type="submit" name="submit">
                    <i class="las la-search"></i>
                </button>
            </form>
            <div class="search-close"><i class="las la-times"></i></div>
        </div>
    </div>
    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>
    <section class="page-header bd-bottom">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-info text-center">
                <h4>Project details</h4>
                <h1>High &amp; Low Rope Rider for Adventure Parks</h1>
                <p>High and low rope adventures for balance, confidence, and outdoor excitement.</p>
            </div>
        </div>
    </section>
    <!--page-header-->

    <section class="project-info">
        <div class="container">
            <ul class="project-info-list">
                <li class="project-info-item">
                    <h3>Client Info:</h3>
                    <p>Misty Land Malappuram</p>
                </li>
                <li class="project-info-item">
                    <h3>Project Handover:</h3>
                    <p>Recently Completed</p>
                </li>
                <li class="project-info-item">
                    <h3>Services:</h3>
                    <p>Safety Equipment, Structural Rigging, Park Attraction Design</p>
                </li>
                <li class="project-info-item">
                    <h3>Live Project:</h3>
                    <a href="#" class="default-btn">View Project</a>
                </li>
            </ul>
        </div>
    </section>
    <!--/.project-info-->

    <section class="project-details padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="project-thumb">
                        <img src="{{ asset("assets/img/rope3.jpg") }}" alt="High Rope Rider">
                    </div>
                    <div class="project-details-content">
                        <h2 class="mt-30">High Rope Rider</h2>
                        <p>High Rope Rider combines elevated rope crossings, suspended bridges, and balance challenges. Course layouts and difficulty can be tailored to your park and intended participants.</p>
                        <p>This attraction requires extreme precision and safety standardization. We implemented state-of-the-art rigging, high-tension safety cable systems, and highly secure harnesses to offer a spectacular but perfectly safe ride.</p>
                        <div class="overview-wrap">
                            <div>
                                <h3>Overview:</h3>
                                <ul class="overview-list">
                                    <li>High-tension safety cable systems</li>
                                    <li>Secure harnessing & safety gear</li>
                                    <li>Spectacular aerial views</li>
                                    <li>Durable weather-resistant materials</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Challenge:</h3>
                                <ul class="overview-list">
                                    <li>Designing robust support structures</li>
                                    <li>Implementing fail-safe braking mechanisms</li>
                                    <li>Terrain mapping for optimal glide paths</li>
                                    <li>Weather resistance for continuous operation</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="post-details-gallery">
                            <li><img src="{{ asset("assets/img/rope3.jpg") }}" alt="img"></li>
                            <li><img src="{{ asset("assets/img/rope4.jpg") }}" alt="img"></li>
                        </ul>
                        <h2 class="mt-30">Low Rope Rider</h2>
                        <p>Low Rope Rider offers lower-level rope crossings and balance obstacles for an approachable adventure experience. Routes focus on coordination and confidence building, with heights, safety equipment, and supervision planned for the selected configuration.</p>
                        <p><a href="{{ url('/products/rope-rider') }}">Explore High Rope Rider</a> &bull; <a href="{{ url('/products/low-rope-rider') }}">Explore Low Rope Rider</a></p>
                        <h2 class="mt-30">Solution And Results:</h2>
                        <p>The Rope Rider at Misty Land was an absolute success, becoming the main anchor for thrill-seekers looking for an elevated experience. Visitors highlighted the smoothness of the ride and the feeling of complete safety provided by the robust engineering.</p>
                        <ul class="project-social">
                            <li>Share This Project:</li>
                            <li><a href="https://www.facebook.com/agelessentertainment/"><i class="lab la-facebook-f"></i></a></li>
                            <li><a href="#"><i class="lab la-twitter"></i></a></li>
                            <li><a href="https://www.youtube.com/@agelessentertainments"><i class="lab la-youtube"></i></a></li>
                            <li><a href="#"><i class="lab la-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.project-details-->

    <section class="project-section bg-grey padding">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="section-heading-wrap mb-40">
                <div class="section-heading scroll-reveal">
                    <h3>our projects</h3>
                    <h2>Related <span>projects</span></h2>
                    <p>Discover other exciting attractions we have built <br>for clients across the globe.</p>
                </div>
                <a class="default-btn" href="{{ url('/projects') }}">View All Project</a>
            </div>
            <div class="swiper-outside">
                <div class="project-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="project-item wow fade-in-bottom" data-wow-delay="200ms">
                                <div class="project-thumb">
                                    <a class="venobox project-view" href="{{ asset("assets/img/project-1.jpg") }}"><img src="{{ asset("assets/img/project-1.jpg") }}" alt="img"></a>
                                </div>
                                <div class="project-content">
                                    <a href="{{ url('/projects') }}" class="category">Architecture</a>
                                    <h3><a href="{{ url('/project-details') }}">The Hagia Sophia Istanbul Turkey</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item wow fade-in-bottom" data-wow-delay="400ms">
                                <div class="project-thumb">
                                    <img src="{{ asset("assets/img/project-2.jpg") }}" alt="img">
                                </div>
                                <div class="project-content">
                                    <a href="{{ url('/projects') }}" class="category">Building</a>
                                    <h3><a href="{{ url('/project-details') }}">Le Centre Pompidou Paris France</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item wow fade-in-bottom" data-wow-delay="600ms">
                                <div class="project-thumb">
                                    <img src="{{ asset("assets/img/project-3.jpg") }}" alt="img">
                                </div>
                                <div class="project-content">
                                    <a href="{{ url('/projects') }}" class="category">Construction</a>
                                    <h3><a href="{{ url('/project-details') }}">Metropol Cathedral of Brasília</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-pagination"></div><!-- Carousel Dots -->
                </div>
                <!-- Carousel Arrows -->
                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
            </div>
        </div>
    </section>
    <!--/.project-section-->

   <footer class="footer-section">
            <div class="container">
                <div class="row footer-area">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="footer-widget">
                            <a class="footer-logo" href="{{ url('/') }}"><img src="{{ asset("assets/img/nlogo.png") }}" alt="logo"></a>
                            <p>Our success in creating business solutions is due in part spacially to talented committed team.</p>
                            <ul class="footer-social">
                                <li><a href="https://www.facebook.com/agelessentertainment/"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="https://www.instagram.com/ageless_entertainments_"><i class="lab la-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/@agelessentertainments"><i class="lab la-youtube"></i></a></li>
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
                                <li><a href="{{ url('/#home-faq') }}">Help &amp; Faqs</a></li>
                                <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
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
    <script src="{{ asset("assets/js/main.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
    <script src="{{ asset('assets/js/scroll-animate.js') }}"></script>
@include('partials.website-chat')
</body>
</html>
