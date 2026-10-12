<!doctype html>
    <html lang="en" class="no-js <?php echo $__env->make('partials.tailwind.bootstrap', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.animate', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.keyframe-animation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.line-awesome', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.construction-icons', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.odometer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.nice-select', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.swiper', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.venobox', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.slider', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.common-style', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.parallax-home', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.partials-clean-navigation-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.kite-cursor', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldPushContent('tailwind_styles'); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Buildex Construction and Building HTML5 Template">
        <meta name="author" content="ThemeEaster">

        <title>Agelessindia</title>

        <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>?v=<?php echo e(filemtime(public_path('assets/img/favicon.png'))); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>?v=<?php echo e(filemtime(public_path('assets/img/favicon.png'))); ?>">

        <?php echo $__env->make('partials.clean-navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/tailwind.css'))); ?>">
</head>

    <body>
        
        <div class="site-preloader">
            <div class="spinner"></div>
        </div>
        <!-- Site Preloader -->

       
        <?php echo $__env->make('partials.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
                <h4></h4>
                <h2>Building the world with <br><span>quality services!</span></h2>
                <p>Our versatile team is built of designers, developers and <br>digital marketers who all bring unique experience.</p>
            </div>
        </div>
    </section>
    <!--page-header-->

    <section class="service-section padding">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="service-item">
                        <div class="service-item-inner">
                            <div class="service-thumb">
                                <img src="<?php echo e(asset("assets/img/post-1.jpg")); ?>" alt="thumb">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="ci ci-bulldozer"></i>
                                </div>
                                <h3>Automobile Manufacturing</h3>
                                <p>Construction is a general term meaning the art and science form objects.</p>
                                <a class="read-more" href="<?php echo e(url('/service-details')); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="service-item">
                        <div class="service-item-inner">
                            <div class="service-thumb">
                                <img src="<?php echo e(asset("assets/img/post-2.jpg")); ?>" alt="thumb">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="ci ci-excavators"></i>
                                </div>
                                <h3>Mechanical Power Engineering</h3>
                                <p>Construction is a general term meaning the art and science form objects.</p>
                                <a class="read-more" href="<?php echo e(url('/service-details')); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="service-item">
                        <div class="service-item-inner">
                            <div class="service-thumb">
                                <img src="<?php echo e(asset("assets/img/post-3.jpg")); ?>" alt="thumb">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="ci ci-water-system"></i>
                                </div>
                                <h3>Oil Gas Petroleum Industry</h3>
                                <p>Construction is a general term meaning the art and science form objects.</p>
                                <a class="read-more" href="<?php echo e(url('/service-details')); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="service-item">
                        <div class="service-item-inner">
                            <div class="service-thumb">
                                <img src="<?php echo e(asset("assets/img/post-4.jpg")); ?>" alt="thumb">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="ci ci-paint-brush"></i>
                                </div>
                                <h3>Renovation and Repurpose</h3>
                                <p>Construction is a general term meaning the art and science form objects.</p>
                                <a class="read-more" href="<?php echo e(url('/service-details')); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="service-item">
                        <div class="service-item-inner">
                            <div class="service-thumb">
                                <img src="<?php echo e(asset("assets/img/post-5.jpg")); ?>" alt="thumb">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="ci ci-plan"></i>
                                </div>
                                <h3>Virtual Multi-Design and Build</h3>
                                <p>Construction is a general term meaning the art and science form objects.</p>
                                <a class="read-more" href="<?php echo e(url('/service-details')); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="service-item">
                        <div class="service-item-inner">
                            <div class="service-thumb">
                                <img src="<?php echo e(asset("assets/img/post-6.jpg")); ?>" alt="thumb">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="ci ci-cone"></i>
                                </div>
                                <h3>General Construction Management</h3>
                                <p>Construction is a general term meaning the art and science form objects.</p>
                                <a class="read-more" href="<?php echo e(url('/service-details')); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="service-item">
                        <div class="service-item-inner">
                            <div class="service-thumb">
                                <img src="<?php echo e(asset("assets/img/post-7.jpg")); ?>" alt="thumb">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="ci ci-building"></i>
                                </div>
                                <h3>Renovation Property maintenance</h3>
                                <p>Construction is a general term meaning the art and science form objects.</p>
                                <a class="read-more" href="<?php echo e(url('/service-details')); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sm-padding">
                    <div class="service-item">
                        <div class="service-item-inner">
                            <div class="service-thumb">
                                <img src="<?php echo e(asset("assets/img/post-8.jpg")); ?>" alt="thumb">
                            </div>
                            <div class="service-content">
                                <div class="service-icon">
                                    <i class="ci ci-wheelbarrow"></i>
                                </div>
                                <h3>Architectural Virtual Designing</h3>
                                <p>Construction is a general term meaning the art and science form objects.</p>
                                <a class="read-more" href="<?php echo e(url('/service-details')); ?>">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.service-section-->

    <section class="faq-section bg-grey padding">
        <div class="bg-pattern"></div>
        <div class="container">
            <div class="row align-items-center gy-lg-0 gy-5">
                <div class="col-lg-6">
                    <div class="section-heading scroll-reveal">
                        <h3>Help and faq's</h3>
                        <h2>Frequently asked <span>questions!</span></h2>
                        <p>Construction is a general term meaning the art and science to form objects systems or organizations and comes from Latin constructio and Old French construction.</p>
                    </div>
                    <ul class="check-list">
                        <li><i class="las la-hand-point-right"></i>Work with energetic team</li>
                        <li><i class="las la-hand-point-right"></i>Providing solutions for construction</li>
                        <li><i class="las la-hand-point-right"></i>Building the world with quality!</li>
                    </ul>
                    <a href="#" class="default-btn">Get Solution</a>
                </div>
                <div class="col-lg-6">
                    <div class="accordion faq-accordion" id="faq-accordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What is the basics of construction?</button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Construction is a general term meaning the art and science to form objects systems or organizations and comes from Latin constructio and Old French construction. To construct is the act of building and construction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What are the construction procedures?</button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Construction is a general term meaning the art and science to form objects systems or organizations and comes from Latin constructio and Old French construction. To construct is the act of building and construction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What are the 7 steps of construction?</button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Construction is a general term meaning the art and science to form objects systems or organizations and comes from Latin constructio and Old French construction. To construct is the act of building and construction.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">What is the order of construction?</button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
                                <div class="accordion-body">
                                    <p>Construction is a general term meaning the art and science to form objects systems or organizations and comes from Latin constructio and Old French construction. To construct is the act of building and construction.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.faq-section-->

   <footer class="footer-section">
            <div class="container">
                <div class="row footer-area">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="footer-widget">
                            <a class="footer-logo" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset("assets/img/nlogo.png")); ?>" alt="logo"></a>
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
                                <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
                                <li><a href="<?php echo e(url('/contact')); ?>">Get in Touch</a></li>
                                <li><a href="<?php echo e(url('/#home-faq')); ?>">Help &amp; Faqs</a></li>
                                <li><a href="<?php echo e(route('privacy-policy')); ?>">Privacy Policy</a></li>
                                <li><a href="<?php echo e(url('/contact')); ?>">Support</a></li>
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
    <script src="<?php echo e(asset("assets/js/vendor/jquary-3.6.0.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/bootstrap.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/popper.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/odometer.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/jquery.nice-select.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/waypoints.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/venobox.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/swiper.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/smooth-scroll.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/vendor/wow.min.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/mailchimp.js")); ?>"></script>
    <script src="<?php echo e(asset("assets/js/main.js")); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>
    <script src="<?php echo e(asset('assets/js/scroll-animate.js')); ?>"></script>
<?php echo $__env->make('partials.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\pages\services.blade.php ENDPATH**/ ?>