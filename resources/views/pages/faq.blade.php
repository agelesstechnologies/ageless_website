<!doctype html>
    <html lang="en" class="no-js @include('partials.tailwind.bootstrap')
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
        <meta name="description" content="Learn how Ageless Entertainment collects, uses, stores, and safeguards your personal information.">
        <meta name="author" content="ThemeEaster">

        <title>Privacy Policy | Ageless Entertainment</title>

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
            <div class="page-header-info">
                <h4>Ageless Entertainment</h4>
                <h2>Privacy <span>Policy</span></h2>
                
            </div>
        </div>
    </section>
    <!--page-header-->

    <section class="blog-section blog-page padding">
        <div class="container">
            <div class="row">
                <article class="col-12 sm-padding privacy-policy">
                    <p>At <strong>Ageless Entertainment</strong>, we value the trust you place in us and are committed to protecting your personal information. This Privacy Policy explains how we collect, use, store, and safeguard your data when you visit our website, submit enquiries, or interact with our digital platforms.</p>

                    <h3 class="mt-4">Information We Collect</h3>
                    <p>We may collect personal information such as your name, phone number, email address, company name, location, and business requirements when you:</p>
                    <ul class="list-unstyled mb-3">
                        <li>&#9679; Fill out enquiry or contact forms</li>
                        <li>&#9679; Submit lead forms (including Meta/Facebook lead forms)</li>
                        <li>&#9679; Communicate with us via email, phone, or social media</li>
                        <li>&#9679; Visit and browse our website</li>
                    </ul>
                    <p>We may also collect non-personal information such as IP address, browser type, device details, pages visited, and time spent on the website for analytics and performance improvement.</p>

                    <h3 class="mt-4">How We Use Your Information</h3>
                    <p>The information collected is used strictly for legitimate business purposes, including:</p>
                    <ul class="list-unstyled mb-3">
                        <li>&#9679; Responding to enquiries and providing requested information</li>
                        <li>&#9679; Contacting potential clients for marketing, sales, and business communication</li>
                        <li>&#9679; Sharing product details, quotations, updates, and promotional offers related to our services.</li>
                        <li>&#9679; Improving website performance, user experience, and service quality</li>
                    </ul>
                    <p>We clearly state that <strong>we do not misuse, sell, rent, or trade your personal data</strong> to third parties for unrelated purposes.</p>

                    <h3 class="mt-4">Meta Lead Forms &amp; Marketing Data</h3>
                    <p>When you submit your details through Meta (Facebook or Instagram) lead forms, the information is securely received by Ageless Entertainment and used <strong>only for contacting potential clients and marketing our products and services</strong>. We fully comply with Meta’s data usage policies and ensure responsible handling of such data.</p>

                    <h3 class="mt-4">Data Protection &amp; Security</h3>
                    <p>We implement appropriate technical and organizational security measures to protect your personal data from unauthorized access, misuse, loss, or disclosure. Access to information is restricted to authorized personnel only.</p>

                    <h3 class="mt-4">Sharing of Information</h3>
                    <p>We may share limited data with trusted service providers (such as CRM, hosting, or communication tools) strictly for operational purposes. These third parties are bound by confidentiality agreements and data protection obligations.</p>

                    <h3 class="mt-4">Cookies</h3>
                    <p>Our website may use cookies to enhance user experience, analyze traffic, and improve functionality. You may choose to disable cookies through your browser settings, though some features may not function optimally.</p>

                    <h3 class="mt-4">Your Rights</h3>
                    <p>You have the right to:</p>
                    <ul class="list-unstyled mb-3">
                        <li>&#9679; Request access to your personal data</li>
                        <li>&#9679; Request correction or deletion of your information</li>
                        <li>&#9679; Opt out of marketing communications at any time</li>
                    </ul>
                    <p>To exercise these rights, you may contact us using the details provided below.</p>

                    <h3 class="mt-4">Policy Updates</h3>
                    <p>Ageless Entertainment reserves the right to update this Privacy Policy at any time. Changes will be posted on this page and become effective immediately upon publication.</p>

                    <h3 class="mt-4">Contact Us</h3>
                    <p>If you have any questions or concerns regarding this Privacy Policy or data usage, please contact us via the details mentioned on our website.</p>
                </article>
            </div>
        </div>
    </section>
    <!--Blog Section-->

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
