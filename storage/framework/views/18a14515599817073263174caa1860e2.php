<?php $__env->startPush('tailwind_styles'); ?>
<?php echo $__env->make('partials.tailwind.products-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.aos', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.products-index-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>



<?php $__env->startSection('title', 'Amusement Park Rides & Attractions Manufacturer India | Ageless'); ?>
<?php $__env->startSection('meta_description', 'Ageless Entertainments manufactures and installs world-class amusement rides, high-altitude adventure courses, 12D/360° cinemas, and turnkey indoor entertainment centers across India.'); ?>
<?php $__env->startSection('meta_keywords', 'amusement park rides manufacturer, buy amusement park rides, amusement rides for sale, amusement park equipment, indoor amusement rides, adventure park manufacturer'); ?>
<?php $__env->startSection('canonical', url('/products')); ?>
<?php $__env->startSection('body_class', 'products-page'); ?>

<?php $__env->startSection('content'); ?>

<!-- ==============================================
     1. PRODUCTS & SOLUTIONS HERO SECTION
     ============================================== -->
<section class="products-hero-wrapper">
    <video class="products-hero-video" autoplay muted loop playsinline preload="auto" aria-hidden="true">
        <source src="<?php echo e(asset('assets/videos/desktop-dome-1920x1080.mp4')); ?>" type="video/mp4">
    </video>

    <div class="container products-hero-container">
        <div class="row align-items-center">
            <div class="col-lg-11 col-xl-10">
                <!-- Eyebrow Badge -->
                <div class="products-hero-badge wow fadeInDown" data-wow-delay="100ms">
                    <span class="badge-pulse-dot"></span>
                    <span>Four Worlds • One Engineering Partner</span>
                </div>

                <!-- Primary Heading (H1) -->
                <h1 class="products-hero-title wow fadeInUp" data-wow-delay="200ms">
                    Amusement Park Rides &amp; <span class="highlight-orange">Entertainment Attractions</span>
                </h1>

                <!-- Subtitle -->
                <p class="products-hero-subheading wow fadeInUp" data-wow-delay="300ms">
                    High-impact amusement rides, high-altitude adventure courses, immersive 12D/360° cinemas, and turnkey indoor entertainment centers—engineered for maximum rider throughput, flawless safety, and rapid commercial payback.
                </p>

                <!-- Quick Action Buttons -->
                <div class="products-hero-actions d-flex flex-wrap gap-3 align-items-center mb-4 wow fadeInUp" data-wow-delay="400ms">
                    <button type="button" class="btn-glow-primary open-quote-modal-btn">
                        <i class="las la-calculator"></i>
                        <span>Start Park Calculator</span>
                    </button>
                    <a href="<?php echo e(url('/projects')); ?>" class="btn-glass-secondary">
                        <i class="las la-layer-group"></i>
                        <span>View Project Case Studies</span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Key Stats Strip -->
        <div class="about-stats-strip mt-4 wow fadeInUp" data-wow-delay="500ms">
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="stats-grid-card">
                        <div class="stats-icon-wrap">
                            <i class="las la-cubes"></i>
                        </div>
                        <div class="stats-text-content">
                            <div class="stats-number">100<span class="accent-plus">+</span></div>
                            <p class="stats-label">Rides &amp; Attractions <br><small class="text-white-50">Installed Nationwide</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="stats-grid-card">
                        <div class="stats-icon-wrap">
                            <i class="las la-layer-group"></i>
                        </div>
                        <div class="stats-text-content">
                            <div class="stats-number">4<span class="accent-plus"> WORLDS</span></div>
                            <p class="stats-label">Core Attraction <br><small class="text-white-50">Categories</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="stats-grid-card">
                        <div class="stats-icon-wrap">
                            <i class="las la-shield-alt"></i>
                        </div>
                        <div class="stats-text-content">
                            <div class="stats-number">100<span class="accent-plus">%</span></div>
                            <p class="stats-label">Safety Compliance <br><small class="text-white-50">EN / ASTM Standards</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="stats-grid-card">
                        <div class="stats-icon-wrap">
                            <i class="las la-tools"></i>
                        </div>
                        <div class="stats-text-content">
                            <div class="stats-number">RAPID<span class="accent-plus"> SPARES</span></div>
                            <p class="stats-label">In-House Manufacturing <br><small class="text-white-50">From Kochi, Kerala</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     2. PRODUCTS & SOLUTIONS SHOWCASE CATALOG
     ============================================== -->
<section class="padding products-catalog-section ![background:var(--primary-white,_#ffff)] ![padding:80px_0]">
    <div class="container">
        
        <div class="text-center mb-4">
            <h2 class="four-worlds-title">Explore <span class="![color:#f5a100]">Our Solutions</span></h2>
        </div>

        <!-- Interactive Category Filter Bar -->
        <div class="product-filter-bar wow fadeInUp" data-wow-delay="100ms" role="group" aria-label="Filter solutions by category">
            <button type="button" class="filter-tab-btn is-active" data-filter="all" aria-pressed="true" aria-controls="product-results">
                <i class="las la-border-all"></i>
                <span>All Solutions</span>
            </button>
            <button type="button" class="filter-tab-btn" data-filter="outdoor">
                <i class="las la-ticket-alt"></i>
                <span>Outdoor Theme Parks</span>
            </button>
            <button type="button" class="filter-tab-btn" data-filter="adventure">
                <i class="las la-hiking"></i>
                <span>Adventure &amp; Aerial Parks</span>
            </button>
            <button type="button" class="filter-tab-btn" data-filter="cinema">
                <i class="las la-vr-cardboard"></i>
                <span>Immersive Cinema &amp; VR</span>
            </button>
            <button type="button" class="filter-tab-btn" data-filter="indoor">
                <i class="las la-building"></i>
                <span>Indoor FEC &amp; Edutainment</span>
            </button>
        </div>

        <!-- Four Worlds Highlight Banner (Dynamic based on selected category) -->
        <div class="four-worlds-banner" data-aos="zoom-out-up" id="category-intro-banner" aria-live="polite" aria-atomic="true">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="section-pill-tag mb-2 ![background:rgba(245,_161,_0,_0.15)] ![color:#f5a100] ![border-color:rgba(245,_161,_0,_0.35)]">
                        <i class="las la-star"></i> <span id="banner-category-tag">Complete Attraction Portfolio</span>
                    </div>
                    <h2 class="four-worlds-title" id="banner-category-title">
                        All <span class="![color:#f5a100]">Solutions</span>
                    </h2>
                    <p class="four-worlds-desc" id="banner-category-desc">
                        Explore our end-to-end turnkey park attraction ecosystems, certified mechanical fabrication, and high-capacity entertainment platforms.
                    </p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <button type="button" class="btn-glow-primary open-quote-modal-btn">
                        <span>Request Custom Specs</span>
                        <i class="las la-arrow-right"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="product-showcase-grid" id="product-results" aria-labelledby="banner-category-title">
            
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php echo $__env->make('products.card', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>No products available yet.</p>
            <?php endif; ?>

        </div>
        <p id="product-filter-empty" class="text-center mt-4 !tw-hidden" role="status">No solutions are available in this category yet. Please explore another category.</p>
    </div>
</section>

<!-- ==============================================
     4. 5-STEP PROJECT EXECUTION ROADMAP
     ============================================== -->
<section class="about-framework-section products-framework-section">
    <div class="container">
        <div class="text-center mb-50" data-aos="fade-up">
            <div class="section-pill-tag">
                <i class="las la-project-diagram"></i> Execution Methodology
            </div>
            <h2 class="about-story-heading ![margin-bottom:12px]">
                A Disciplined Path From <span class="gradient-word">Idea to Opening Day</span>
            </h2>
            <p class="![font-family:'Poppins',_sans-serif] ![font-size:1.05rem] ![color:#030d28] ![max-width:750px] ![margin:0_auto]">
                A battle-tested 5-step delivery process ensuring your rides and entertainment destinations open on time, within budget, and fully certified.
            </p>
        </div>

        <div class="framework-timeline-track">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="step-card" data-aos="zoom-in" data-aos-delay="0">
                        <div class="step-badge-number">STEP 01</div>
                        <h3 class="step-title">Feasibility &amp; Master Planning</h3>
                        <p class="step-desc">Market fit, concept, site zoning, and commercial roadmap.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="step-card" data-aos="zoom-in" data-aos-delay="100">
                        <div class="step-badge-number">STEP 02</div>
                        <h3 class="step-title">Design &amp; 3D Engineering</h3>
                        <p class="step-desc">Detailed layouts, visualization, and safety-led ride engineering.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="step-card" data-aos="zoom-in" data-aos-delay="200">
                        <div class="step-badge-number">STEP 03</div>
                        <h3 class="step-title">In-House Manufacturing</h3>
                        <p class="step-desc">Controlled fabrication, quality checks, and pre-dispatch inspection.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="step-card" data-aos="zoom-in" data-aos-delay="300">
                        <div class="step-badge-number">STEP 04</div>
                        <h3 class="step-title">Erection &amp; Testing</h3>
                        <p class="step-desc">Expert installation followed by rigorous performance and safety trials.</p>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="step-card" data-aos="zoom-in" data-aos-delay="400">
                        <div class="step-badge-number">STEP 05</div>
                        <h3 class="step-title">Commissioning &amp; Support</h3>
                        <p class="step-desc">Operator training, handover, and dependable ongoing technical care.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     5. CLOSING CTA BANNER STRIP
     ============================================== -->
<section class="about-cta-section products-cta-section">
    <div class="about-cta-glow"></div>
    <div class="container position-relative ![z-index:2]">
        <div class="about-cta-box" data-aos="fade-up">
            <div class="section-pill-tag ![background:#030d28] ![color:#f5a100] ![border-color:#030d28]">
                <i class="las la-rocket"></i> Your Next Landmark Starts Here
            </div>

            <h2 class="about-cta-heading">
                Planning a New <span class="cta-orange-glow">Entertainment Destination?</span>
            </h2>

            <p class="about-cta-text">
                Whether you have 5 acres of land or an indoor mall anchor space, our engineering and park development team is ready to assist with feasibility, ride selection, and budgeting.
            </p>

            <div class="about-cta-buttons">
                <button type="button" class="btn-glow-primary open-quote-modal-btn">
                    <i class="las la-file-alt"></i>
                    <span>Request Custom Ride Quote</span>
                </button>
                <a href="<?php echo e(url('/projects')); ?>" class="btn-glass-secondary">
                    <i class="las la-layer-group"></i>
                    <span>Explore Flagship Projects</span>
                </a>
                <a href="tel:+917025777755" class="btn-glass-secondary ![border-color:rgba(245,_161,_0,_0.4)] ![color:#f5a100]">
                    <i class="las la-phone-volume"></i>
                    <span>+91 7025 777 755</span>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     6. INTERACTIVE PARK CALCULATOR / QUOTE MODAL
     ============================================== -->
<div class="quote-modal-overlay" id="quoteModalOverlay">
    <div class="quote-modal-card">
        <div class="modal-header-banner">
            <button type="button" class="modal-close-btn" id="closeQuoteModalBtn" aria-label="Close modal">
                <i class="las la-times"></i>
            </button>
            <h3 id="modalHeadingText">Plan Your Park with Ageless</h3>
            <p>Choose your project category and share a few details for an initial engineering consultation.</p>
        </div>

        <form action="<?php echo e(route('contact.submit')); ?>" method="POST" class="modal-form-body" id="parkQuoteForm">
            <?php echo csrf_field(); ?>
            
            <label class="d-block text-dark fw-bold mb-2 ![font-size:0.9rem]">What are you planning?</label>
            <div class="type-select-pills">
                <div>
                    <input type="radio" name="project_type" value="Amusement Park" id="type_amusement" class="type-pill-input d-none" checked>
                    <label for="type_amusement" class="type-pill-label"><i class="las la-ticket-alt me-1"></i> Amusement Park</label>
                </div>
                <div>
                    <input type="radio" name="project_type" value="Adventure Park" id="type_adventure" class="type-pill-input d-none">
                    <label for="type_adventure" class="type-pill-label"><i class="las la-hiking me-1"></i> Adventure Park</label>
                </div>
                <div>
                    <input type="radio" name="project_type" value="Indoor FEC" id="type_fec" class="type-pill-input d-none">
                    <label for="type_fec" class="type-pill-label"><i class="las la-building me-1"></i> Indoor FEC</label>
                </div>
                <div>
                    <input type="radio" name="project_type" value="Immersive Cinema" id="type_cinema" class="type-pill-input d-none">
                    <label for="type_cinema" class="type-pill-label"><i class="las la-vr-cardboard me-1"></i> Cinema / Dome</label>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-sm-6">
                    <label class="form-label text-dark fw-semibold small">Full Name *</label>
                    <input type="text" name="name" class="form-control" placeholder="Your name" required>
                </div>
                <div class="col-sm-6">
                    <label class="form-label text-dark fw-semibold small">Work Email *</label>
                    <input type="email" name="email" class="form-control" placeholder="name@company.com" required>
                </div>
                <div class="col-sm-6">
                    <label class="form-label text-dark fw-semibold small">Phone / WhatsApp *</label>
                    <input type="tel" name="phone" class="form-control" placeholder="+91 98765 43210" required>
                </div>
                <div class="col-sm-6">
                    <label class="form-label text-dark fw-semibold small">Project Location</label>
                    <input type="text" name="location" class="form-control" placeholder="City, State">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label text-dark fw-semibold small">Approximate Site Area / Requirements</label>
                <input type="text" name="site_area" id="modalProductInput" class="form-control" placeholder="e.g. 5 acres, 20,000 sq ft or specific ride interest">
            </div>

            <button type="submit" class="btn-glow-primary w-100 justify-content-center py-3">
                <span>Submit Consultation Request</span>
                <i class="las la-paper-plane"></i>
            </button>
            <p class="text-center text-muted small mt-2 mb-0 ![font-size:0.78rem]">
                Your details are kept strictly confidential and used only to respond to this enquiry.
            </p>
        </form>
    </div>
</div>

<!-- Category Filtering & Modal Script -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Category Filtering
    var filterBtns = document.querySelectorAll('.filter-tab-btn');
    var productItems = document.querySelectorAll('.product-item');
    var bannerTag = document.getElementById('banner-category-tag');
    var bannerTitle = document.getElementById('banner-category-title');
    var bannerDesc = document.getElementById('banner-category-desc');
    var emptyMessage = document.getElementById('product-filter-empty');

    var categoryData = {
        all: {
            tag: 'Complete Attraction Portfolio',
            title: 'All <span class="![color:#f5a100]">Solutions</span>',
            desc: 'Explore our end-to-end turnkey park attraction ecosystems, certified mechanical fabrication, and high-capacity entertainment platforms.'
        },
        outdoor: {
            tag: 'Outdoor Theme Parks & Rides',
            title: 'Outdoor <span class="![color:#f5a100]">Theme Parks</span>',
            desc: 'High-impact attractions engineered for reliability, peak guest capacity, and repeatable delight across outdoor terrains.'
        },
        adventure: {
            tag: 'Adventure & Sky Rides',
            title: 'Adventure & <span class="![color:#f5a100]">Aerial Parks</span>',
            desc: 'Terrain-led adventure experiences designed around controlled thrills, continuous-belay systems, and robust international safety.'
        },
        cinema: {
            tag: 'Immersive Cinema & VR',
            title: 'Immersive Cinema & <span class="![color:#f5a100]">VR</span>',
            desc: 'Multi-sensory 12D theatres, 360° geodesic domes, and flying platforms that turn storytelling into unforgettable high-throughput anchors.'
        },
        indoor: {
            tag: 'Indoor Family Entertainment',
            title: 'Indoor FEC & <span class="![color:#f5a100]">Edutainment</span>',
            desc: 'All-weather destinations blending interactive active play, children’s traffic education, sub-zero snow parks, and strong commercial ROI.'
        }
    };

    filterBtns.forEach(function(btn) {
        btn.setAttribute('aria-pressed', btn.classList.contains('is-active') ? 'true' : 'false');
        btn.setAttribute('aria-controls', 'product-results');
        btn.addEventListener('click', function() {
            filterBtns.forEach(function(b) {
                b.classList.remove('is-active');
                b.setAttribute('aria-pressed', 'false');
            });
            this.classList.add('is-active');
            this.setAttribute('aria-pressed', 'true');

            var filterValue = this.getAttribute('data-filter');

            // Update Header Banner
            if (categoryData[filterValue]) {
                bannerTag.textContent = categoryData[filterValue].tag;
                bannerTitle.innerHTML = categoryData[filterValue].title;
                bannerDesc.textContent = categoryData[filterValue].desc;
            }

            // Filter Product Items
            var visibleCount = 0;
            productItems.forEach(function(item) {
                var itemCat = item.getAttribute('data-category');
                if (filterValue === 'all' || itemCat === filterValue) {
                    item.style.display = 'flex';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            emptyMessage.style.display = visibleCount === 0 && productItems.length > 0 ? 'block' : 'none';
            if (window.AOS) AOS.refresh();
        });
    });

    // 2. Quote Modal Controls
    var modalOverlay = document.getElementById('quoteModalOverlay');
    var closeBtn = document.getElementById('closeQuoteModalBtn');
    var openBtns = document.querySelectorAll('.open-quote-modal-btn');
    var productInput = document.getElementById('modalProductInput');

    openBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var productName = this.getAttribute('data-product');
            if (productName && productInput) {
                productInput.value = 'Interested in: ' + productName;
            }
            modalOverlay.classList.add('is-active');
        });
    });

    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            modalOverlay.classList.remove('is-active');
        });
    }

    if (modalOverlay) {
        modalOverlay.addEventListener('click', function(e) {
            if (e.target === modalOverlay) {
                modalOverlay.classList.remove('is-active');
            }
        });
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    function initProductAnimations() {
        if (!window.AOS) return;

        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true,
            offset: 0,
            disable: window.matchMedia('(prefers-reduced-motion: reduce)').matches
        });
    }

    if (document.readyState === 'complete') {
        requestAnimationFrame(initProductAnimations);
    } else {
        window.addEventListener('load', function() {
            requestAnimationFrame(initProductAnimations);
        }, { once: true });
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/products/index.blade.php ENDPATH**/ ?>