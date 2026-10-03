<!doctype html>
    <html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Buildex Construction and Building HTML5 Template">
        <meta name="author" content="ThemeEaster">

        <title>Agelessindia</title>

        <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ time() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ time() }}">

        <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/keyframe-animation.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/line-awesome.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/construction-icons.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/odometer.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/nice-select.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/swiper.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/venobox.min.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/slider.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/common-style.css") }}">
        <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
    <link rel="stylesheet" href="{{ asset('assets/css/parallax-home.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scroll-animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}?v={{ time() }}">

    </head>

    <body>
        
        <div class="site-preloader">
            <div class="spinner"></div>
        </div>
        <!-- Site Preloader -->

           <header class="main-header wonder-nav-header">
        <div class="container">
            <div class="nav-capsule-wrapper">
                <div class="site-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset("assets/img/nlogo.png") }}" alt="Ageless Logo"></a>
                </div>
                <div class="header-menu-wrap">
                    <ul class="nav-menu">
                        <li><a href="{{ url('/') }}"><i class="las la-home nav-item-icon"></i><span>Home</span></a></li>
                        <li><a href="{{ url('/about-company') }}"><i class="las la-building nav-item-icon"></i><span>About Us</span></a></li>
                        <li><a href="{{ url('/projects') }}"><i class="las la-layer-group nav-item-icon"></i><span>Projects</span></a></li>
                        <li><a href="{{ url('/products') }}"><i class="las la-cubes nav-item-icon"></i><span>Products</span></a></li>
                        <li class="dropdown_menu"><a href="{{ route('blog.index') }}"><i class="las la-newspaper nav-item-icon"></i><span>Blog</span></a></li>
                        <li><a href="{{ url('/contact') }}"><i class="las la-envelope nav-item-icon"></i><span>Contact</span></a></li>
                    </ul>
                </div>
                <div class="nav-right-actions">
                    <a href="tel:+917025777755" class="nav-call-btn">
                        <span class="call-icon-wrap"><i class="las la-phone-volume"></i></span>
                        <span>Call Us</span>
                    </a>
                    <div class="mobile-menu-icon">
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
            <div class="page-header-info">
                <h4>Team details</h4>
                <h2>Our team create great <br>things <span>together!</span></h2>
                <p>Our versatile team is built of designers, developers and <br>digital marketers who all bring unique experience.</p>
            </div>
        </div>
    </section>
    <!--page-header-->

    <section class="team-details padding">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row gx-lg-5 align-items-center gy-lg-0 gy-4">
                <div class="col-lg-6">
                    <img class="team-details-thumb" src="{{ asset("assets/img/team-2.jpg") }}" alt="img">
                </div>
                <div class="col-lg-6">
                    
                    <div class="section-heading mb-30 scroll-reveal">
                        <h3>Great experience in building!</h3>
                        <h2>Graham Thomas</h2>
                        <p>Construction is a general term meaning the art and science to form <br>objects systems or organizations.</p>
                        <p>Financial experts support or help you to to find out which way you can raise your funds more. Arkit a trusted name for providing assistants. Initially their main objective was to ensure the service they provide these people are loyal to their industry.</p>
                    </div>
                    <ul class="skill-wrap mb-40">
                        <li class="skill-item">
                            <h4>Factory Manufacture</h4>
                            <div class="progress-box">
                                <div class="progress">
                                    <div class="progress-bar wow progress-bar-anim" data-wow-delay="0ms" data-wow-duration="2000ms" role="progressbar" style="--progress-bar-count: 85%">
                                        <span>85%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="skill-item">
                            <h4>General Construction</h4>
                            <div class="progress-box">
                                <div class="progress">
                                    <div class="progress-bar wow progress-bar-anim" data-wow-delay="200ms" data-wow-duration="2000ms" role="progressbar" style="--progress-bar-count: 75%">
                                        <span>75%</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <a href="#" class="default-btn">Contact For Service</a>
                </div>
            </div>
        </div>
    </section>
    <!--/.team-details-->

    <section class="contact-section bg-grey padding">
        <div class="map-pattern"></div>
        <div class="container">
            <div class="section-heading text-center mb-30">
                <h3>Contact with me</h3>
                <h2>Feel free to write <br>Our <span>experts!</span></h2>
                <p>Construction is a general term meaning the art and science to form <br>objects systems or organizations.</p>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="service-form">
                        <form action="php/contact.php" method="post" id="ajax_contact" class="form-horizontal">
                            <div class="contact-form-group">
                                    <div class="form-field">
                                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                                    </div>
                                    <div class="form-field">
                                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
                                    </div>
                                    <div class="form-field">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    <div class="form-field">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                    <div class="form-field message">
                                        <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="form-field submit-btn text-center">
                                        <button id="submit" class="default-btn" type="submit">Send Massage</button>
                                    </div>
                                </div>
                            <div id="form-messages" class="alert" role="alert"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.contact-section-->
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
    <script src="{{ asset("assets/js/contact.js") }}"></script>
    <script src="{{ asset("assets/js/main.js") }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
    <script src="{{ asset('assets/js/scroll-animate.js') }}"></script>
@include('partials.website-chat')
</body>

</html>
