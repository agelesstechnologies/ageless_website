<!doctype html>
<html lang="en" class="no-js <?php echo $__env->make('partials.tailwind.poppins-font', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.bootstrap', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
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
<?php echo $__env->make('partials.tailwind.about-page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.products-page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.projects-page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.partials-clean-navigation-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.kite-cursor', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldPushContent('tailwind_styles'); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title', $title ?? 'Amusement Park Builder & Ride Manufacturer in India | Ageless'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta_description', 'Ageless Entertainments designs, builds and installs amusement parks, adventure rides, immersive attractions, 12D theatres, flying cinemas, traffic parks and entertainment solutions across India.'); ?>">
    <meta name="keywords" content="<?php echo $__env->yieldContent('meta_keywords', 'amusement park builder in india, amusement park manufacturer, theme park builder india, amusement park consultant, adventure park manufacturer, indoor amusement park setup'); ?>">
    <meta name="author" content="Ageless Entertainments">
    <link rel="canonical" href="<?php echo $__env->yieldContent('canonical', url()->current()); ?>">

    <!-- Open Graph / Social Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $__env->yieldContent('canonical', url()->current()); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', $title ?? 'Amusement Park Builder & Ride Manufacturer in India | Ageless'); ?>">
    <meta property="og:description" content="<?php echo $__env->yieldContent('meta_description', 'Ageless Entertainments designs, builds and installs amusement parks, adventure rides, immersive attractions, 12D theatres, flying cinemas, traffic parks and entertainment solutions across India.'); ?>">
    <meta property="og:image" content="<?php echo e(asset('hero-park.png')); ?>">

    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>?v=<?php echo e(filemtime(public_path('assets/img/favicon.png'))); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>?v=<?php echo e(filemtime(public_path('assets/img/favicon.png'))); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo $__env->make('partials.clean-navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/tailwind.css'))); ?>">
</head>
<body class="<?php echo $__env->yieldContent('body_class'); ?>">
<?php echo $__env->make('partials.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldContent('content'); ?>
<footer class="footer-section">
            <div class="container">
                <div class="row footer-area">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="footer-widget">
                            <a class="footer-logo" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset("assets/img/nlogo.png")); ?>" alt="logo"></a>
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
    <script src="<?php echo e(asset('assets/js/main.js')); ?>?v=<?php echo e(filemtime(public_path('assets/js/main.js'))); ?>"></script>
    <script src="<?php echo e(asset("assets/js/kite-cursor.js")); ?>?v=<?php echo e(filemtime(public_path('assets/js/kite-cursor.js'))); ?>"></script>


<?php echo $__env->make('partials.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\layouts\app.blade.php ENDPATH**/ ?>