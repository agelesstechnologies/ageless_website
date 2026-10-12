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

    
    <!--/.popupsearch-box-->
    <div id="searchbox-overlay"></div>

    <section class="page-header bd-bottom">
        <div class="page-header-bg"></div>
        <div class="container">
            <div class="page-header-info">
                <h4>Our projects</h4>
                <h2>Work together to create <br>unique <span>experience!</span></h2>
                <p>Our versatile team is built of designers, developers and <br>digital marketers who all bring unique experience.</p>
            </div>
        </div>
    </section>
    <!--page-header-->
<section class="project-section padding">
    <div class="container">
        <div class="row gy-4">

            <!-- 1 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-dome-cinema')); ?>" class="project-item d-block">
                    <div class="project-thumb">
                        <img src="<?php echo e(asset("assets/img/projects/1.jpg")); ?>" alt="">
                    </div>
                    <div class="project-content">
                        <span class="category">Entertainment</span>
                        <h3>Dome Cinemas</h3>
                        <p>Immersive dome-shaped cinema with 360° visuals.</p>
                    </div>
                </a>
            </div>

            <!-- 2 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-flying-cinema')); ?>" class="project-item d-block">
                    <div class="project-thumb"><img src="<?php echo e(asset("assets/img/projects/2.jpg")); ?>" alt=""></div>
                    <div class="project-content">
                        <span class="category">Simulation</span>
                        <h3>Flying Cinema</h3>
                        <p>Advanced flying theatre with panoramic visuals.</p>
                    </div>
                </a>
            </div>

            <!-- 3 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-ev-cars')); ?>" class="project-item d-block">
                    <div class="project-thumb"><img src="<?php echo e(asset("assets/img/projects/3.jpg")); ?>" alt=""></div>
                    <div class="project-content">
                        <span class="category">Kids Ride</span>
                        <h3>EV Toy Cars</h3>
                        <p>Electric ride-on cars for kids parks.</p>
                    </div>
                </a>
            </div>

            <!-- 4 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-traffic-park')); ?>" class="project-item d-block">
                    <div class="project-thumb"><img src="<?php echo e(asset("assets/img/projects/4.jpg")); ?>" alt=""></div>
                    <div class="project-content">
                        <span class="category">Education</span>
                        <h3>Traffic Park</h3>
                        <p>Interactive traffic training systems.</p>
                    </div>
                </a>
            </div>

            <!-- 5 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-water-slides')); ?>" class="project-item d-block">
                    <div class="project-thumb"><img src="<?php echo e(asset("assets/img/projects/5.jpg")); ?>" alt=""></div>
                    <div class="project-content">
                        <span class="category">Water Ride</span>
                        <h3>Water Slides</h3>
                        <p>Exciting water slides for all age groups.</p>
                    </div>
                </a>
            </div>

            <!-- 6 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-sky-ride')); ?>" class="project-item d-block">
                    <div class="project-thumb"><img src="<?php echo e(asset("assets/img/projects/6.jpg")); ?>" alt=""></div>
                    <div class="project-content">
                        <span class="category">Adventure</span>
                        <h3>Sky Ride</h3>
                        <p>Suspended cable ride for scenic views.</p>
                    </div>
                </a>
            </div>

            <!-- 7 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-monorail')); ?>" class="project-item d-block">
                    <div class="project-thumb"><img src="<?php echo e(asset("assets/img/projects/7.jpg")); ?>" alt=""></div>
                    <div class="project-content">
                        <span class="category">Transport</span>
                        <h3>Monorail System</h3>
                        <p>Park transportation system with cabins.</p>
                    </div>
                </a>
            </div>

            <!-- 8 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-trackless-train')); ?>" class="project-item d-block">
                    <div class="project-thumb"><img src="<?php echo e(asset("assets/img/projects/8.jpg")); ?>" alt=""></div>
                    <div class="project-content">
                        <span class="category">Kids Ride</span>
                        <h3>Trackless Train</h3>
                        <p>Fun train ride without tracks.</p>
                    </div>
                </a>
            </div>

            <!-- 9 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-kayak')); ?>" class="project-item d-block">
                    <div class="project-thumb"><img src="<?php echo e(asset("assets/img/projects/9.jpg")); ?>" alt=""></div>
                    <div class="project-content">
                        <span class="category">Water Sport</span>
                        <h3>Kayak Series</h3>
                        <p>Eco-friendly single rider kayaks.</p>
                    </div>
                </a>
            </div>

            <!-- 10 -->
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo e(url('/project-details-arcade')); ?>" class="project-item d-block">
                    <div class="project-thumb"><img src="<?php echo e(asset("assets/img/projects/10.jpg")); ?>" alt=""></div>
                    <div class="project-content">
                        <span class="category">Gaming</span>
                        <h3>Arcade Machines</h3>
                        <p>Modern arcade and VR gaming units.</p>
                    </div>
                </a>
            </div>

            <!-- Continue same pattern for 11–20 -->
        </div>
    </div>
</section>
    <!--/.project-section-->
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
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\pages\projects.blade.php ENDPATH**/ ?>