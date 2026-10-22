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
        <meta name="description" content="Explore custom amusement park and ride installations engineered by Ageless Entertainments across India.">
        <meta name="keywords" content="amusement park projects india, theme park installation, roller coaster manufacturer, adventure park builder">
        <meta name="author" content="Ageless Entertainments">

        <title>Amusement Park Project Details | Ageless Entertainments</title>

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
                <h4>Project Case Study</h4>
                <h2>Flagship Amusement &amp; <br><span>Adventure Park Installation</span></h2>
                <p>Engineering destination-scale attractions with turnkey safety, <br>rider thrill, and high commercial throughput across India.</p>
            </div>
        </div>
    </section>
    <!--page-header-->

    <section class="project-info">
        <div class="container">
            <ul class="project-info-list">
                <li class="project-info-item">
                    <h3>Client Location:</h3>
                    <p>Destination Theme Park, Pan-India</p>
                </li>
                <li class="project-info-item">
                    <h3>Project Scope:</h3>
                    <p>Turnkey Design, Fabrication &amp; Erection</p>
                </li>
                <li class="project-info-item">
                    <h3>Services:</h3>
                    <p>Feasibility, 3D Master Planning, Ride Engineering</p>
                </li>
                <li class="project-info-item">
                    <h3>Project Inquiry:</h3>
                    <a href="{{ url('/contact') }}" class="default-btn">Get a Quote</a>
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
                        <img src="{{ asset("assets/img/roller1.jpg") }}" alt="Amusement Park Project">
                    </div>
                    <div class="project-details-content">
                        <h2 class="mt-30">World-Class Engineering &amp; Unmatched Guest Experience</h2>
                        <p>Ageless Entertainments executed the complete turnkey design, civil coordination, ride manufacturing, and certified installation for this landmark park attraction. Our comprehensive approach ensures zero operational downtime, highest rider capacity, and international safety compliance.</p>
                        <p>Every element was precision-fabricated in our state-of-the-art facility, undergoing strict non-destructive testing (NDT), electrical synchronization, and dynamic test cycles prior to final commissioning.</p>
                        <div class="overview-wrap">
                            <div>
                                <h3>Key Deliverables:</h3>
                                <ul class="overview-list">
                                    <li>Custom-engineered track &amp; mechanical systems</li>
                                    <li>Automated safety control panels &amp; sensors</li>
                                    <li>Themed station architecture &amp; lighting</li>
                                    <li>Comprehensive operator training &amp; manuals</li>
                                </ul>
                            </div>
                            <div>
                                <h3>Engineering Highlights:</h3>
                                <ul class="overview-list">
                                    <li>High rider hourly throughput capacity</li>
                                    <li>IAAPI and ASTM safety compliant</li>
                                    <li>All-weather corrosion resistant coatings</li>
                                    <li>Rapid commercial payback model</li>
                                </ul>
                            </div>
                        </div>
                        <ul class="post-details-gallery">
                            <li><img src="{{ asset("assets/img/post-1.jpg") }}" alt="img"></li>
                            <li><img src="{{ asset("assets/img/post-2.jpg") }}" alt="img"></li>
                        </ul>
                        <h2 class="mt-30">Solution And Results:</h2>
                        <p>Unless you are the one who really cares about this, it is not terribly important. What all matters are how your hybrid mobile application development is going to work in the long run as no one will care about how it was built.</p>
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
                    <p>Construction is a general term meaning the art and science to form <br>objects systems or organizations.</p>
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
                        <div class="swiper-slide">
                            <div class="project-item wow fade-in-bottom" data-wow-delay="700ms">
                                <div class="project-thumb">
                                    <img src="{{ asset("assets/img/project-4.jpg") }}" alt="img">
                                </div>
                                <div class="project-content">
                                    <a href="{{ url('/projects') }}" class="category">Industrial</a>
                                    <h3><a href="{{ url('/project-details') }}">World Trade Center New York USA</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="project-item wow fade-in-bottom" data-wow-delay="800ms">
                                <div class="project-thumb">
                                    <img src="{{ asset("assets/img/project-5.jpg") }}" alt="img">
                                </div>
                                <div class="project-content">
                                    <a href="{{ url('/projects') }}" class="category">Factory</a>
                                    <h3><a href="{{ url('/project-details') }}">The White House Washington</a></h3>
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

@include('partials.footer')
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
