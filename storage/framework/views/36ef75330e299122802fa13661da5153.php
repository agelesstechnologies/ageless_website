<?php $__env->startPush('tailwind_styles'); ?>
<?php echo $__env->make('partials.tailwind.projects-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.aos', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.projects-index-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php $__env->stopPush(); ?>



<?php $__env->startPush('styles'); ?>
<link rel="stylesheet" href="<?php echo e(asset('assets/css/project-slideshow.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/project-slideshow.css'))); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title', 'Amusement Park Projects in India | Ageless'); ?>
<?php $__env->startSection('meta_description', 'Explore landmark amusement park, theme park, and adventure ride projects across India and worldwide, delivered turnkey by Ageless Entertainments.'); ?>
<?php $__env->startSection('meta_keywords', 'amusement park projects india, theme park projects, adventure park installation, amusement rides portfolio, park builder case studies'); ?>
<?php $__env->startSection('canonical', url('/projects')); ?>
<?php $__env->startSection('body_class', 'projects-page'); ?>

<?php $__env->startSection('content'); ?>

<!-- ==============================================
     1. PROJECTS PORTFOLIO HERO SECTION
     ============================================== -->
<section class="projects-hero-wrapper projects-hero-with-video">
    <div class="projects-hero-media" aria-hidden="true">
        <video class="projects-hero-video" autoplay muted loop playsinline preload="auto">
            <source src="<?php echo e(asset('assets/videos/projects-hero-updated.mp4')); ?>" type="video/mp4">
        </video>
    </div>
    <div class="projects-hero-overlay"></div>
    <div class="projects-hero-mesh"></div>
    <div class="projects-hero-mesh-left"></div>

    <div class="container projects-hero-container">
        <div class="row align-items-center">
            <div class="col-lg-11 col-xl-10">
                <!-- Eyebrow Badge -->
                <div class="projects-hero-badge wow fadeInDown" data-wow-delay="100ms">
                    <span class="badge-pulse-dot"></span>
                    <span>Portfolio &amp; Case Studies • Pan-India &amp; International</span>
                </div>

                <!-- Primary Heading (H1) -->
                <h1 class="projects-hero-title wow fadeInUp" data-wow-delay="200ms">
                    Amusement Park &amp; <span class="highlight-orange">Entertainment Projects</span>
                </h1>
                <!-- Subtitle -->
                <p class="projects-hero-subheading wow fadeInUp" data-wow-delay="300ms">
                    Explore flagship theme parks, high-altitude adventure circuits, immersive cinema domes, and indoor family entertainment destinations engineered and commissioned by Ageless Entertainments since 2011.
                </p>

                <!-- Quick Action Buttons -->
                <div class="projects-hero-actions d-flex flex-wrap gap-3 align-items-center mb-4 wow fadeInUp" data-wow-delay="400ms">
                    <a href="#portfolio" class="btn-glow-primary">
                        <span>Explore Selected Works</span>
                        <i class="las la-arrow-down"></i>
                    </a>
                    <button type="button" class="btn-glass-secondary open-project-spec-modal-btn">
                        <i class="las la-file-alt"></i>
                        <span>Submit Project Specs</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Key Stats Strip -->
        <div class="about-stats-strip mt-4 wow fadeInUp" data-wow-delay="500ms">
            <div class="row g-3 g-lg-4">
                <div class="col-sm-6 col-lg-3">
                    <div class="stats-grid-card">
                        <div class="stats-icon-wrap">
                            <i class="las la-award"></i>
                        </div>
                        <div class="stats-text-content">
                            <div class="stats-number">50<span class="accent-plus">+</span></div>
                            <p class="stats-label">Completed Landmark <br><small class="text-white-50">Projects Across India</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="stats-grid-card">
                        <div class="stats-icon-wrap">
                            <i class="las la-map-marked-alt"></i>
                        </div>
                        <div class="stats-text-content">
                            <div class="stats-number">15<span class="accent-plus">+</span></div>
                            <p class="stats-label">States Across India <br><small class="text-white-50">&amp; Global Footprint</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="stats-grid-card">
                        <div class="stats-icon-wrap">
                            <i class="las la-users"></i>
                        </div>
                        <div class="stats-text-content">
                            <div class="stats-number">10M<span class="accent-plus">+</span></div>
                            <p class="stats-label">Annual Thrill-Seekers <br><small class="text-white-50">Safely Entertained</small></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="stats-grid-card">
                        <div class="stats-icon-wrap">
                            <i class="las la-check-circle"></i>
                        </div>
                        <div class="stats-text-content">
                            <div class="stats-number">100<span class="accent-plus">%</span></div>
                            <p class="stats-label">On-Time Handover <br><small class="text-white-50">&amp; Turnkey Guarantee</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     2. SELECTED PROJECTS PORTFOLIO SECTION
     ============================================== -->
<section class="padding ![background:#f8fafc] ![padding:90px_0]" id="portfolio">
    <div class="container">
        
        <!-- Header -->
        <div class="text-center mb-50" data-aos="fade-up">
            <div class="section-pill-tag">
                <i class="las la-layer-group"></i> Selected Works
            </div>
            <h2 class="about-story-heading ![margin-bottom:12px]">
                Engineered Landmarks. <span class="gradient-word">Measurable Outcomes.</span>
            </h2>
            <p class="![font-family:'Poppins',_sans-serif] ![font-size:1.05rem] ![color:#64748b] ![max-width:750px] ![margin:0_auto]">
                Explore representative amusement park projects in India across outdoor, aerial, immersive and indoor formats.
            </p>
        </div>

        <!-- Filter Bar -->
        <div class="product-filter-bar wow fadeInUp" data-wow-delay="200ms">
            <button type="button" class="filter-tab-btn is-active" data-filter="all">
                <i class="las la-border-all"></i>
                <span>All Projects</span>
            </button>
            <button type="button" class="filter-tab-btn" data-filter="theme">
                <i class="las la-ticket-alt"></i>
                <span>Theme &amp; Amusement Parks</span>
            </button>
            <button type="button" class="filter-tab-btn" data-filter="adventure">
                <i class="las la-hiking"></i>
                <span>Adventure &amp; Aerial Parks</span>
            </button>
            <button type="button" class="filter-tab-btn" data-filter="cinema">
                <i class="las la-vr-cardboard"></i>
                <span>Immersive Cinema &amp; Domes</span>
            </button>
            <button type="button" class="filter-tab-btn" data-filter="indoor">
                <i class="las la-building"></i>
                <span>Indoor FECs &amp; Edutainment</span>
            </button>
        </div>

        <!-- Circular project gallery -->
<p class="project-ring-hint">Three photos per project <span aria-hidden="true">&harr;</span> Swipe the image to explore</p>
        <div class="projects-portfolio-grid project-slideshow" id="projectSlideshow" tabindex="0" role="region" aria-roledescription="carousel" aria-label="Selected projects">
            
            <div class="project-ring">
            <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <?php echo $__env->make('projects.card', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <p>No projects available yet.</p>
            <?php endif; ?>
            </div>

        </div>
        <div class="project-slideshow-controls" <?php if($projects->isEmpty()): ?> hidden <?php endif; ?>>
            <button type="button" id="previousProjectSlide" aria-label="Previous projects" aria-controls="projectSlideshow"><i class="las la-arrow-left" aria-hidden="true"></i></button>
            <span id="projectSlideStatus" aria-live="polite"></span>
            <button type="button" id="nextProjectSlide" aria-label="Next projects" aria-controls="projectSlideshow"><i class="las la-arrow-right" aria-hidden="true"></i></button>
            <button type="button" id="toggleProjectAutoplay" aria-label="Pause automatic slides" aria-pressed="false"><i class="las la-pause" aria-hidden="true"></i></button>
        </div>
    </div>
</section>

<!-- ==============================================
     4. CLOSING CTA BANNER STRIP
     ============================================== -->
<section class="about-cta-section projects-cta-section">
    <div class="about-cta-glow"></div>
    <div class="container position-relative ![z-index:2]">
        <div class="about-cta-box" data-aos="fade-up">
            <div class="section-pill-tag ![background:rgba(245,_161,_0,_0.15)] ![color:#f5a100] ![border-color:rgba(245,_161,_0,_0.35)]">
                <i class="las la-rocket"></i> Your Next Landmark Starts Here
            </div>

            <h2 class="about-cta-heading">
                Have a Park Concept or Land <br><span class="cta-orange-glow">Ready for Development?</span>
            </h2>

            <p class="about-cta-text">
                Share your vision, site area, and commercial targets with our engineering team for an initial project evaluation.
            </p>

            <div class="about-cta-buttons">
                <button type="button" class="btn-glow-primary open-project-spec-modal-btn">
                    <i class="las la-file-upload"></i>
                    <span>Submit Project Specs</span>
                </button>
                <a href="<?php echo e(url('/products')); ?>" class="btn-glass-secondary">
                    <i class="las la-cubes"></i>
                    <span>Explore Ride Catalog</span>
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
     5. INTERACTIVE CASE STUDY MODAL DRAWER
     ============================================== -->
<div class="case-study-modal-overlay" id="caseStudyModalOverlay">
    <div class="case-study-modal-card">
        <div class="modal-media-header">
            <button type="button" class="modal-close-btn" id="closeCaseStudyModalBtn" aria-label="Close modal">
                <i class="las la-times"></i>
            </button>
            <img src="<?php echo e(asset('assets/img/roller1.jpg')); ?>" alt="Project preview" id="caseStudyModalImg">
            <div class="modal-media-overlay"></div>
            <div class="modal-media-info">
                <p class="text-uppercase fw-bold mb-1 ![font-size:0.8rem] ![letter-spacing:0.15em] ![color:#f5a100]" id="caseStudyModalMeta">
                    Location • Year
                </p>
                <h3 class="modal-project-title" id="caseStudyModalTitle">Project Name</h3>
            </div>
        </div>

        <div class="modal-details-body">
            <div class="row g-4">
                <!-- Left: Overview & Scope -->
                <div class="col-lg-7">
                    <h4 class="text-uppercase fw-bold mb-2 ![font-size:0.85rem] ![letter-spacing:0.1em] ![color:#f5a100]">
                        Project Overview &amp; Client Goal
                    </h4>
                    <p class="text-light ![font-size:0.95rem] ![line-height:1.8]" id="caseStudyModalOverview">
                        Project overview text goes here.
                    </p>

                    <h4 class="text-uppercase fw-bold mt-4 mb-3 ![font-size:0.85rem] ![letter-spacing:0.1em] ![color:#f5a100]">
                        Scope of Work
                    </h4>
                    <div id="caseStudyModalScope" class="d-flex flex-column gap-2">
                        <!-- Scope tags dynamically filled -->
                    </div>
                </div>

                <!-- Right: Technical Specs -->
                <div class="col-lg-5">
                    <div class="![background:rgba(255,255,255,0.05)] ![border:1px_solid_rgba(255,255,255,0.1)] ![border-radius:16px] ![padding:20px]">
                        <h4 class="text-uppercase fw-bold mb-3 ![font-size:0.85rem] ![letter-spacing:0.1em] ![color:#f5a100]">
                            Technical Specs
                        </h4>
                        <table class="specs-data-table" id="caseStudyModalSpecsTable">
                            <!-- Specs dynamic rows -->
                        </table>
                        
                        <button type="button" class="btn-glow-primary w-100 justify-content-center mt-4 py-2 open-project-spec-modal-btn" id="planSimilarBtn">
                            <span>Plan a Similar Project</span>
                            <i class="las la-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ==============================================
     6. SUBMIT PROJECT SPECS MODAL
     ============================================== -->
<div class="quote-modal-overlay" id="projectSpecsModalOverlay">
    <div class="quote-modal-card">
        <div class="modal-header-banner">
            <button type="button" class="modal-close-btn" id="closeProjectSpecsModalBtn" aria-label="Close modal">
                <i class="las la-times"></i>
            </button>
            <h3>Submit Your Project Specs</h3>
            <p>Give our engineering team a clear starting point for your initial project consultation.</p>
        </div>

        <form action="<?php echo e(route('contact.submit')); ?>" method="POST" class="modal-form-body">
            <?php echo csrf_field(); ?>
            
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
                    <label class="form-label text-dark fw-semibold small">Project Location *</label>
                    <input type="text" name="location" class="form-control" placeholder="City, State" required>
                </div>
            </div>

            <div class="row g-3 mb-3">
                <div class="col-sm-6">
                    <label class="form-label text-dark fw-semibold small">Project Type *</label>
                    <select name="project_type" class="form-select native-select" required>
                        <option value="Theme & Amusement Park">Theme &amp; Amusement Park</option>
                        <option value="Adventure & Aerial Park">Adventure &amp; Aerial Park</option>
                        <option value="Immersive Cinema & Dome">Immersive Cinema &amp; Dome</option>
                        <option value="Indoor FEC & Edutainment">Indoor FEC &amp; Edutainment</option>
                    </select>
                </div>
                <div class="col-sm-6">
                    <label class="form-label text-dark fw-semibold small">Available Land / Area</label>
                    <input type="text" name="site_area" class="form-control" placeholder="e.g. 8 acres or 25,000 sq ft">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label text-dark fw-semibold small">Concept or Key Requirements</label>
                <textarea name="message" rows="3" class="form-control" placeholder="Tell us what you are planning (target opening year, key rides, visitor targets)..."></textarea>
            </div>

            <button type="submit" class="btn-glow-primary w-100 justify-content-center py-3">
                <span>Request Initial Consultation</span>
                <i class="las la-paper-plane"></i>
            </button>
            <p class="text-center text-muted small mt-2 mb-0 ![font-size:0.78rem]">
                Your details are kept strictly confidential and used only to respond to this project enquiry.
            </p>
        </form>
    </div>
</div>

<script src="<?php echo e(asset('assets/js/project-ring.js')); ?>?v=<?php echo e(filemtime(public_path('assets/js/project-ring.js'))); ?>"></script>
<!-- Scripts for Filtering & Case Study Modals -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    window.initProjectRing();

    // 2. Case Study Modal Drawer
    var caseModalOverlay = document.getElementById('caseStudyModalOverlay');
    var closeCaseBtn = document.getElementById('closeCaseStudyModalBtn');
    var caseButtons = document.querySelectorAll('.open-case-study-btn');

    var modalImg = document.getElementById('caseStudyModalImg');
    var modalMeta = document.getElementById('caseStudyModalMeta');
    var modalTitle = document.getElementById('caseStudyModalTitle');
    var modalOverview = document.getElementById('caseStudyModalOverview');
    var modalScope = document.getElementById('caseStudyModalScope');
    var modalSpecsTable = document.getElementById('caseStudyModalSpecsTable');

    caseButtons.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var name = this.getAttribute('data-name');
            var location = this.getAttribute('data-location');
            var year = this.getAttribute('data-year');
            var category = this.getAttribute('data-category');
            var capacity = this.getAttribute('data-capacity');
            var image = this.getAttribute('data-image');
            var overview = this.getAttribute('data-overview');
            var scope = this.getAttribute('data-scope');
            var specs = this.getAttribute('data-specs');

            if (modalImg && image) modalImg.src = image;
            if (modalImg) modalImg.alt = name;
            if (modalMeta) modalMeta.textContent = [location, year, category].filter(Boolean).join(' • ');
            if (modalTitle) modalTitle.textContent = name;
            if (modalOverview) modalOverview.textContent = overview;
            if (capacity) modalMeta.textContent += ' · ' + capacity;

            // Render Scope items
            if (modalScope) {
                modalScope.replaceChildren();
                (scope || '').split(',').filter(s => s.trim()).forEach(function(s) {
                    var row = document.createElement('div');
                    row.className = 'text-white-50';
                    row.textContent = s.trim();
                    modalScope.appendChild(row);
                });
            }

            // Render Specs table
            if (modalSpecsTable) {
                modalSpecsTable.replaceChildren();
                (specs || '').split('|').forEach(function(sp) {
                    var separator = sp.indexOf(':');
                    if (separator < 0) return;
                    var row = document.createElement('tr');
                    [sp.slice(0, separator), sp.slice(separator + 1)].forEach(function(value) {
                        var cell = document.createElement('td');
                        cell.textContent = value.trim();
                        row.appendChild(cell);
                    });
                    modalSpecsTable.appendChild(row);
                });
            }

            caseModalOverlay.classList.add('is-active');
        });
    });

    if (closeCaseBtn) {
        closeCaseBtn.addEventListener('click', function() {
            caseModalOverlay.classList.remove('is-active');
        });
    }

    if (caseModalOverlay) {
        caseModalOverlay.addEventListener('click', function(e) {
            if (e.target === caseModalOverlay) {
                caseModalOverlay.classList.remove('is-active');
            }
        });
    }

    // 3. Submit Project Specs Modal
    var specModalOverlay = document.getElementById('projectSpecsModalOverlay');
    var closeSpecBtn = document.getElementById('closeProjectSpecsModalBtn');
    var openSpecBtns = document.querySelectorAll('.open-project-spec-modal-btn');
    var planSimilarBtn = document.getElementById('planSimilarBtn');

    openSpecBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (caseModalOverlay) caseModalOverlay.classList.remove('is-active');
            specModalOverlay.classList.add('is-active');
        });
    });

    if (planSimilarBtn) {
        planSimilarBtn.addEventListener('click', function(e) {
            e.preventDefault();
            caseModalOverlay.classList.remove('is-active');
            specModalOverlay.classList.add('is-active');
        });
    }

    if (closeSpecBtn) {
        closeSpecBtn.addEventListener('click', function() {
            specModalOverlay.classList.remove('is-active');
        });
    }

    if (specModalOverlay) {
        specModalOverlay.addEventListener('click', function(e) {
            if (e.target === specModalOverlay) {
                specModalOverlay.classList.remove('is-active');
            }
        });
    }
});
</script>

<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    function initProjectAnimations() {
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
        requestAnimationFrame(initProjectAnimations);
    } else {
        window.addEventListener('load', function() {
            requestAnimationFrame(initProjectAnimations);
        }, { once: true });
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\projects\index.blade.php ENDPATH**/ ?>