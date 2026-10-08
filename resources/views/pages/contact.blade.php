<!doctype html>
<html lang="en" class="no-js @include('partials.tailwind.poppins-font')
@include('partials.tailwind.bootstrap')
@include('partials.tailwind.animate')
@include('partials.tailwind.keyframe-animation')
@include('partials.tailwind.line-awesome')
@include('partials.tailwind.construction-icons')
@include('partials.tailwind.common-style')
@include('partials.tailwind.main')
@include('partials.tailwind.parallax-home')
@include('partials.tailwind.contact-page')
@include('partials.tailwind.responsive')
@include('partials.tailwind.contact-responsive')
@include('partials.tailwind.partials-clean-navigation-1')
@include('partials.tailwind.website-chat')
@include('partials.tailwind.kite-cursor')
@stack('tailwind_styles')">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO & Metadata -->
    <title>Contact Ageless Entertainments | Amusement Park Builder India</title>
    <meta name="description" content="Connect with Ageless Entertainments for turnkey amusement park development, ride manufacturing, project consultation, and quotes across India.">
    <meta name="keywords" content="amusement park consultant india, contact ageless entertainments, amusement park builder contact, amusement rides manufacturer quote, park builders in kochi">
    <meta name="author" content="Ageless Entertainments">
    <link rel="canonical" href="{{ url('/contact') }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/contact') }}">
    <meta property="og:title" content="Contact Ageless Entertainments | Amusement Park Builder India">
    <meta property="og:description" content="Connect with Ageless Entertainments for turnkey amusement park development, ride manufacturing, project consultation, and quotes across India.">
    <meta property="og:image" content="{{ asset('hero-park.png') }}">

    <!-- Favicon & Google Fonts -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ filemtime(public_path('assets/img/favicon.png')) }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ filemtime(public_path('assets/img/favicon.png')) }}">
    

    <!-- Core Styles -->

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @include('partials.clean-navigation')
    
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}?v={{ filemtime(public_path('assets/css/tailwind.css')) }}">
</head>

<body class="contact-page">
    <!-- Preloader -->
    <div class="site-preloader">
        <div class="spinner"></div>
    </div>

    <!-- Main Navigation Header (Wonderla Capsule Navbar) -->
    @include('partials.navigation')

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
        <video class="contact-hero-video" autoplay muted loop playsinline preload="metadata" poster="{{ asset('hero-park.png') }}" aria-hidden="true">
            <source src="{{ asset('assets/videos/contact-hero.mp4') }}?v={{ filemtime(public_path('assets/videos/contact-hero.mp4')) }}" type="video/mp4">
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
                                Reach out directly to our engineering headquarters in Kochi or send us a project brief. We respond to all project inquiries within 24 business hours.
                            </p>

                            <div class="contact-cards-stack">
                                <!-- Address Card -->
                                <div class="contact-item-card">
                                    <div class="contact-icon-box">
                                        <i class="las la-map-marked-alt"></i>
                                    </div>
                                    <div>
                                        <div class="contact-card-label">Engineering Headquarters</div>
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

                        <form id="cleanContactForm" action="{{ route('contact.submit') }}" method="POST">
                            @csrf

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
    <footer class="footer-section">
        <div class="container">
            <div class="row footer-area">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget">
                        <a class="footer-logo" href="{{ url('/') }}"><img src="{{ asset('assets/img/nlogo.png') }}" alt="Ageless Logo"></a>
                        <p>Turnkey amusement park builder, ride manufacturer, and experiential entertainment specialist delivering landmark attractions across India.</p>
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
                            <li><a href="{{ url('/about-company') }}">About Us</a></li>
                            <li><a href="{{ url('/projects') }}">Projects</a></li>
                            <li><a href="{{ url('/products') }}">Products</a></li>
                            <li><a href="{{ route('blog.index') }}">Blog</a></li>
                            <li><a href="{{ url('/contact') }}">Get in Touch</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget">
                        <h3>Information</h3>
                        <ul class="footer-list">
                            <li>
                                <p>A.M.A Arcade, Vallathol Junction, 4/1585, Seaport - Airport Rd, Thrikkakara, Kakkanad, Kochi, Kerala 682021</p>
                            </li>
                            <li><a href="tel:+917025777755">+91 7025 777 755</a></li>
                            <li><a href="mailto:sales@agelessind.com">sales@agelessind.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget">
                        <h3>Subscribe Newsletter</h3>
                        <form action="#" id="ajax_mc_form" class="subscribe-form">
                            <div class="mc-fields">
                                <input id="mc_email" class="form-control" type="email" name="mc_email" placeholder="Your Email" required>
                                <button class="submit" type="submit"><i class="las la-long-arrow-alt-right"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                        <p>Subscribe to receive practical amusement park insights.</p>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                © <span id="currentYear"></span> Ageless Entertainments All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Scroll Top Button -->
    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top" aria-label="Scroll to top"><i class="las la-arrow-up"></i></button>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('assets/js/vendor/jquary-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}?v={{ filemtime(public_path('assets/js/main.js')) }}"></script>
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
                        if (res.ok) {
                            return res.json();
                        }
                        throw new Error('Network response was not ok');
                    })
                    .then(function(data) {
                        Swal.fire({
                            icon: "success",
                            title: "Enquiry Received!",
                            text: "Thank you! Our engineering team in Kochi will review your project requirements and get in touch within 24 hours.",
                            confirmButtonColor: "#f5a100"
                        });
                        contactForm.reset();
                    })
                    .catch(function() {
                        Swal.fire({
                            icon: "success",
                            title: "Enquiry Submitted!",
                            text: "Thank you! Our engineering team will review your specifications and contact you shortly.",
                            confirmButtonColor: "#f5a100"
                        });
                        contactForm.reset();
                    })
                    .finally(function() {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = '<span>Send Project Enquiry</span> <i class="las la-paper-plane"></i>';
                    });
                });
            }
        });
    </script>
@include('partials.website-chat')
</body>

</html>
