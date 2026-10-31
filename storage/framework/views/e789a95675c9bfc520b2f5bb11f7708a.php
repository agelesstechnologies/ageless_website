<!doctype html>
<html lang="en" class="no-js <?php echo $__env->make('partials.tailwind.poppins-font', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.bootstrap', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.animate', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.keyframe-animation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.line-awesome', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.construction-icons', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.common-style', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.parallax-home', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.contact-page', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.contact-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.partials-clean-navigation-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.kite-cursor', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldPushContent('tailwind_styles'); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO & Metadata -->
    <title>Contact Ageless | Amusement Park Builder in India</title>
    <meta name="description" content="Connect with Ageless Entertainments for turnkey amusement park development, ride manufacturing, project consultation, and quotes across India.">
    <meta name="author" content="Ageless Entertainments">
    <link rel="canonical" href="<?php echo e(url('/contact')); ?>">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(url('/contact')); ?>">
    <meta property="og:title" content="Contact Ageless | Amusement Park Builder in India">
    <meta property="og:description" content="Connect with Ageless Entertainments for turnkey amusement park development, ride manufacturing, project consultation, and quotes across India.">
    <meta property="og:image" content="<?php echo e(asset('hero-park.png')); ?>">

    <!-- Favicon & Google Fonts -->
    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>?v=<?php echo e(filemtime(public_path('assets/img/favicon.png'))); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>?v=<?php echo e(filemtime(public_path('assets/img/favicon.png'))); ?>">
    

    <!-- Core Styles -->

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php echo $__env->make('partials.clean-navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/tailwind.css'))); ?>">
</head>

<body class="contact-page">
    <!-- Preloader -->
    <div class="site-preloader">
        <div class="spinner"></div>
    </div>

    <!-- Main Navigation Header (Wonderla Capsule Navbar) -->
    <?php echo $__env->make('partials.navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Popup Search Box -->
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

    <!-- ==============================================
         1. CONTACT HERO SECTION
         ============================================== -->
    <section class="contact-hero-wrapper">
        <video class="contact-hero-video" autoplay muted loop playsinline preload="metadata" poster="<?php echo e(asset('hero-park.png')); ?>" aria-hidden="true">
            <source src="<?php echo e(asset('assets/videos/contact-hero.mp4')); ?>?v=<?php echo e(filemtime(public_path('assets/videos/contact-hero.mp4'))); ?>" type="video/mp4">
        </video>

        <div class="container contact-hero-container">
            <div class="row align-items-center">
                <div class="col-lg-10">
                    <h1 class="contact-hero-title wow fadeInUp" data-wow-delay="200ms">
                        Smarter Operations.<br>
                        Safer Venues.<br>
                        Happier Guests
                    </h1>

                    <p class="contact-hero-subheading wow fadeInUp" data-wow-delay="300ms">
                        From concept to installation, we bring amusement parks, adventure attractions, and immersive entertainment spaces to life with expert design and engineering.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         2. MAIN CLEAN CONTACT & FORM SECTION
         ============================================== -->
    <section class="clean-contact-section">
        <div class="container">
            <div class="row g-4 align-items-stretch">
                
                <!-- Left: Clean Info Panel -->
                <div class="col-lg-5">
                    <div class="contact-info-panel wow fadeInLeft" data-wow-delay="200ms">
                        <div>
                            <div class="section-pill-tag mb-2 ![background:rgba(245,_161,_0,_0.15)] ![color:#f5a100] ![border-color:rgba(245,_161,_0,_0.35)]">
                                <i class="las la-headset"></i> Quick Connect
                            </div>
                            <h2 class="info-panel-title">
                                Get In Touch with <br><span>Our Engineers</span>
                            </h2>
                            <p class="info-panel-intro">
                                Reach out directly to our headquarters in Kochi or send us a project brief. We respond to all project inquiries within 24 business hours.
                            </p>

                            <div class="contact-cards-stack">
                                <!-- Address Card -->
                                <div class="contact-item-card">
                                    <div class="contact-icon-box">
                                        <i class="las la-map-marked-alt"></i>
                                    </div>
                                    <div>
                                        <div class="contact-card-label">Headquarters</div>
                                        <p class="contact-card-value">
                                            A.M.A Arcade, Vallathol Junction, 4/1585, Seaport - Airport Rd, Thrikkakara, Kakkanad, Kochi, Kerala 682021
                                        </p>
                                    </div>
                                </div>

                                <!-- Phone Card -->
                                <div class="contact-item-card">
                                    <div class="contact-icon-box">
                                        <i class="las la-phone-volume"></i>
                                    </div>
                                    <div>
                                        <div class="contact-card-label">Direct Line &amp; WhatsApp</div>
                                        <p class="contact-card-value">
                                            <a href="tel:+917025777755">+91 7025 777 755</a>
                                        </p>
                                    </div>
                                </div>

                                <!-- Email Card -->
                                <div class="contact-item-card">
                                    <div class="contact-icon-box">
                                        <i class="las la-envelope"></i>
                                    </div>
                                    <div>
                                        <div class="contact-card-label">Official Email</div>
                                        <p class="contact-card-value">
                                            <a href="mailto:sales@agelessind.com">sales@agelessind.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="contact-hours-pill">
                                <i class="las la-clock"></i>
                                <span><strong>Mon - Sat:</strong> 9:00 AM – 6:30 PM IST • Fast Turnaround</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Clean Contact Form Card -->
                <div class="col-lg-7">
                    <div class="clean-form-card wow fadeInRight" data-wow-delay="300ms">
                        <div class="form-header-box">
                            <div class="section-pill-tag mb-2">
                                <i class="las la-paper-plane"></i> Project Consultation
                            </div>
                            <h3 class="form-title">Send Us a Project Brief</h3>
                            <p class="form-subtitle">
                                Fill out the details below and an attraction specialist will get back to you with feasibility insights.
                            </p>
                        </div>

                        <form id="cleanContactForm" action="<?php echo e(route('contact.submit')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <!-- Inputs Grid -->
                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="clean-input-group">
                                        <label class="clean-input-label">First Name *</label>
                                        <input type="text" name="firstname" class="clean-input-control" placeholder="John" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="clean-input-group">
                                        <label class="clean-input-label">Last Name *</label>
                                        <input type="text" name="lastname" class="clean-input-control" placeholder="Doe" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="clean-input-group">
                                        <label class="clean-input-label">Work Email *</label>
                                        <input type="email" name="email" class="clean-input-control" placeholder="john@company.com" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="clean-input-group">
                                        <label class="clean-input-label">Phone / WhatsApp Number *</label>
                                        <input type="tel" name="phone" class="clean-input-control" placeholder="+91 98765 43210" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-sm-6">
                                    <div class="clean-input-group">
                                        <label class="clean-input-label">Project Location</label>
                                        <input type="text" name="location" class="clean-input-control" placeholder="City, State / Country">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="clean-input-group">
                                        <label class="clean-input-label">Available Land / Floor Area</label>
                                        <input type="text" name="site_area" class="clean-input-control" placeholder="e.g. 10 acres, 25,000 sq ft">
                                    </div>
                                </div>
                            </div>

                            <div class="clean-input-group">
                                <label class="clean-input-label">Project Details &amp; Requirements *</label>
                                <textarea name="message" rows="4" class="clean-input-control" placeholder="Tell us about your target opening date, preferred attractions, budget range, or specific engineering requirements..." required></textarea>
                            </div>

                            <button type="submit" id="cleanContactSubmitBtn" class="btn-submit-contact">
                                <span>Send Project Enquiry</span>
                                <i class="las la-paper-plane"></i>
                            </button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ==============================================
         3. CLEAN GOOGLE MAP LOCATION
         ============================================== -->
    <section class="clean-map-section">
        <div class="container">
            <div class="map-card-frame wow fadeInUp" data-wow-delay="200ms">
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.3232337726885!2d76.3537588!3d10.0023356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b080d207f93e06b%3A0xc20a554f4ee18ced!2sAgeless%20Entertainments%2C%20Kakkanad%2C%20Kerala!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Ageless Entertainments Location Map">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Scroll Top Button -->
    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top" aria-label="Scroll to top"><i class="las la-arrow-up"></i></button>
    </div>

    <!-- Scripts -->
    <script src="<?php echo e(asset('assets/js/vendor/jquary-3.6.0.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/vendor/swiper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/main.js')); ?>?v=<?php echo e(filemtime(public_path('assets/js/main.js'))); ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var yearEl = document.getElementById("currentYear");
            if (yearEl) {
                yearEl.textContent = new Date().getFullYear();
            }

            // AJAX Form Submission with SweetAlert2
            var contactForm = document.getElementById("cleanContactForm");
            var submitBtn = document.getElementById("cleanContactSubmitBtn");

            if (contactForm) {
                contactForm.addEventListener("submit", function(e) {
                    e.preventDefault();
                    
                    submitBtn.disabled = true;
                    submitBtn.innerHTML = '<span>Submitting Brief...</span> <i class="las la-spinner la-spin"></i>';

                    var formData = new FormData(contactForm);

                    fetch(contactForm.action, {
                        method: "POST",
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json'
                        }
                    })
                    .then(function(res) {
                        return res.json().then(function(data) {
                            if (!res.ok || !data.success) {
                                var errors = data.errors ? Object.values(data.errors).flat().join(' ') : '';
                                throw new Error(errors || data.message || 'Unable to submit your enquiry. Please try again.');
                            }
                            return data;
                        });
                    })
                    .then(function(data) {
                        Swal.fire({
                            icon: data.email_sent ? "success" : "warning",
                            title: data.email_sent ? "Enquiry Received!" : "Enquiry Saved",
                            text: data.message,
                            confirmButtonColor: "#f5a100"
                        });
                        contactForm.reset();
                    })
                    .catch(function(error) {
                        Swal.fire({
                            icon: "error",
                            title: "Unable to Submit Enquiry",
                            text: error.message || "Please try again or email sales@agelessind.com.",
                            confirmButtonColor: "#f5a100"
                        });
                    })
                    .finally(function() {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<span>Send Project Enquiry</span> <i class="las la-paper-plane"></i>';
                    });
                });
            }
        });
    </script>
<?php echo $__env->make('partials.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/pages/contact.blade.php ENDPATH**/ ?>