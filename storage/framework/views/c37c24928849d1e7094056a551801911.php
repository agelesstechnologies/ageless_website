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
<?php echo $__env->make('partials.tailwind.responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.home-faq', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.home-responsive', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.partials-clean-navigation-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.pages-home-1', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('partials.tailwind.kite-cursor', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->yieldPushContent('tailwind_styles'); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ageless Entertainments">
    <meta name="author" content="Ageless Entertainments">

    <title>Ageless Entertainments </title>

    <link rel="shortcut icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>?v=<?php echo e(filemtime(public_path('assets/img/favicon.png'))); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>?v=<?php echo e(filemtime(public_path('assets/img/favicon.png'))); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Full Animation & Parallax Engine Styles -->

    <link rel="preload" as="image" href="<?php echo e(asset('hero-park-poster.jpg')); ?>" fetchpriority="high">
    <?php echo $__env->make('partials.clean-navigation', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/tailwind.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/tailwind.css'))); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/partner-logos.css')); ?>?v=<?php echo e(filemtime(public_path('assets/css/partner-logos.css'))); ?>">
</head>

<body class="home-page">

    <!-- Header -->
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
         1. HERO SECTION - MULTI-LAYER 3D PARALLAX
         ============================================== -->
    <section class="hero-parallax-wrapper">
        <video class="hero-bg-layer" autoplay muted loop playsinline preload="metadata" poster="<?php echo e(asset('hero-park-poster.jpg')); ?>" aria-hidden="true">
            <source src="<?php echo e(asset('assets/videos/hero-park-clouds.mp4')); ?>?v=<?php echo e(filemtime(public_path('assets/videos/hero-park-clouds.mp4'))); ?>" type="video/mp4">
        </video>
        <canvas id="hero-particle-canvas"></canvas>

        <div class="container hero-content-container">
            <div class="row align-items-center">
                <!-- Left: 3D Kinetic Text -->
                <div class="col-lg-7">
                    <div class="hero-text-block">
                        <div class="home-hero-badge">
                            <span class="badge-pulse-dot"></span>
                            <span>Next-Gen Park Builders &bull; Since 2011</span>
                        </div>
                        <h1 class="dream-title-parallax">
                            <span class="dream-white">BUILD YOUR</span>
                            <span class="dream-orange">DREAM PARK</span>
                            <span class="dream-small">TODAY!</span>
                        </h1>
                        <h2 class="hero-small-heading">Amusement park manufacturer in India</h2>
                        <p class="hero-subtitle">
                            Turn extraordinary entertainment visions into reality with world-class engineering, bespoke rides, and immersive attractions designed to captivate every generation.
                        </p>
                        <div class="hero-btn-group">
                            <a href="<?php echo e(url('/projects')); ?>" class="btn-glow-primary">
                                <span>Explore Projects</span>
                                <i class="las la-arrow-right"></i>
                            </a>
                            <a href="<?php echo e(url('/contact')); ?>" class="btn-glass-secondary">
                                <i class="las la-phone-volume"></i>
                                <span>Get in Touch</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right: Floating 3D Holographic Badges -->
                <!-- <div class="col-lg-5 d-none d-lg-block">
                    <div class="hero-floating-badges">
                        <div class="float-badge badge-pos-1">
                            <div class="badge-icon">
                                <i class="las la-award"></i>
                            </div>
                            <div class="badge-info">
                                <h4>14+ Years</h4>
                                <p>Industry Leadership</p>
                            </div>
                        </div>

                        <div class="float-badge badge-pos-2">
                            <div class="badge-icon">
                                <i class="las la-cubes"></i>
                            </div>
                            <div class="badge-info">
                                <h4>100+ Rides</h4>
                                <p>Delivered Nationwide</p>
                            </div>
                        </div>

                        <div class="float-badge badge-pos-3">
                            <div class="badge-icon">
                                <i class="las la-smile-beam"></i>
                            </div>
                            <div class="badge-info">
                                <h4>100% Fun</h4>
                                <p>Memorable Experiences</p>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="hero-scroll-cue">
            <div class="mouse-icon">
                <div class="mouse-wheel"></div>
            </div>
            <span>Scroll to Explore</span>
        </div>
    </section>

    <!-- ==============================================
         2. ABOUT SECTION - 3D LAYERED PARALLAX
         ============================================== -->
    <section class="about-section bd-bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="about-image-stack" id="about-image-stack" title="Click to swipe / switch image">
                        <div class="about-layer-badge">
                            <h3>16+</h3>
                            <span>Years of Experience</span>
                        </div>
                        <div class="image-stack-wrapper">
                            <?php $__currentLoopData = $aboutProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="stack-card <?php echo e($loop->first ? 'stack-card-1 is-front' : ($loop->iteration === 2 ? 'is-back' : 'is-hidden-stack')); ?>" data-index="<?php echo e($loop->iteration); ?>">
                                <img class="img-fluid" src="<?php echo e($product->image_url); ?>" alt="<?php echo e($product->name); ?>" loading="lazy" decoding="async">
                                <span class="card-category-pill"><?php echo e($product->name); ?></span>
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="section-heading mb-30">
                        <h3 class="wow fade-in-bottom" data-wow-delay="100ms">Welcome to Ageless Entertainments</h3>
                        <h2 class="wow fade-in-bottom" data-wow-delay="200ms">India's Leading Amusement Park <span>Developers Since 2011</span></h2>
                        <p class="wow fade-in-bottom" data-wow-delay="300ms">
                            Ageless Entertainments is a leading name in the amusement industry, specializing in amusement rides, adventure rides, immersive attractions, and next-generation entertainment concepts. With a presence throughout India, we have successfully installed 100+ park rides and activities in amusement parks, malls, and leisure destinations. From concept to execution, we bring world-class entertainment solutions that create unforgettable experiences for all ages!
                        </p>
                    </div>
                    <ul class="about-features">
                        <li class="wow fade-in-bottom" data-wow-delay="200ms">
                            <div class="about-icon">
                                <i class="ci ci-excavators"></i>
                            </div>
                            <div class="about-features-content">
                                <h3>Quality Services</h3>
                                <p>Committed to world-class safety & engineering excellence in every park we build.</p>
                            </div>
                        </li>
                        <li class="wow fade-in-bottom" data-wow-delay="400ms">
                            <div class="about-icon">
                                <i class="ci ci-engineer-2"></i>
                            </div>
                            <div class="about-features-content">
                                <h3>Skilled Developers</h3>
                                <p>End-to-end master planning, custom fabrication, and turnkey park deployment.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="btn-group mt-30">
                        <a href="<?php echo e(url('/about-company')); ?>" class="default-btn wow fade-in-bottom" data-wow-delay="200ms">More About Us</a>
                        <div class="about-author wow fade-in-bottom" data-wow-delay="400ms">
                            <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=351,fit=crop/AGBM0Vqo2Ripq5Zk/393083348_1179677340102907_7185821607908418361_n-removebg-preview-Yan1N0zwyWcZ74pv.png" alt="IAAPI Member" loading="lazy" decoding="async">
                            <h3>Proud Member of IAAPI Since 2015</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         3. SERVICES SECTION - 3D INTERACTIVE TILT
         ============================================== -->
    <section class="service-section">
        <div class="bg-half"></div>
        <div class="container">
            <div class="section-heading text-center mb-50 wow fade-in-bottom" data-wow-delay="200ms">
                <h3>Explore our park creation services!</h3>
                <h2>Building fun worlds with <br><span>imagination and joy!</span></h2>
                <p>We design, build, and bring to life thrilling amusement parks, <br> rides, and family attractions with creativity and precision.</p>
            </div>
            <div class="row gy-4">
                <!-- Service 1 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item-3d tilt-card wow zoom-in">
                        <div class="service-thumb">
                            <img src="<?php echo e(asset("assets/img/roller1.jpg")); ?>" alt="Amusement Park" loading="lazy" decoding="async">
                        </div>
                        <div class="service-content">
                            <h3>Amusement Park Rides</h3>
                            <p>Safe, vibrant, and thrilling family coasters and rides that bring pure joy to every corner of your park.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item-3d tilt-card wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="service-thumb">
                            <img src="<?php echo e(asset("assets/img/products/water-park.jpg")); ?>" alt="Water Park" loading="lazy" decoding="async">
                        </div>
                        <div class="service-content">
                            <h3>Water Park</h3>
                            <p>From dynamic splash pads to wave pools and lazy rivers, we build refreshing aquatic adventures for all ages.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item-3d tilt-card wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="service-thumb">
                            <img src="<?php echo e(asset("assets/img/snow3.jpg")); ?>" alt="Snow Park" loading="lazy" decoding="async">
                        </div>
                        <div class="service-content">
                            <h3>Snow Park</h3>
                            <p>Immersive sub-zero snow worlds with real snowfall, ice slides, and winter play zones designed to wow visitors of every age.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item-3d tilt-card wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="service-thumb">
                            <img src="<?php echo e(asset("assets/img/adventure.png")); ?>" alt="Adventurous Rides" loading="lazy" decoding="async">
                        </div>
                        <div class="service-content">
                            <h3>Adventurous Rides</h3>
                            <p>Exciting attractions that lift fun to new heights — including monorails, rope riders, and sky gliders.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Parallax CTA Banner -->
            <div class="service-cta-parallax wow fade-in-bottom" data-wow-delay="300ms">
                <div class="service-cta-inner">
                    <h4 class="![color:#f5a100]">Ready to build your signature amusement park?</h4>
                    <a class="btn-glow-primary" href="https://wa.me/+917025777755" target="_blank">
                        <span>Make an Appointment</span>
                        <i class="las la-calendar-check"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         4. SKILL & VIDEO SECTION - PARALLAX DEPTH
         ============================================== -->
    <section class="skill-section bd-bottom padding">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="skill-img-parallax-wrap ageless-video-container tilt-card wow fade-in-left" data-wow-delay="200ms" id="ageless-autoload-video-box">
                        <!-- Poster: Logo visible for 3 seconds before video autoload -->
                        <div class="ageless-video-poster" id="ageless-video-poster">
                            <img src="<?php echo e(asset("assets/img/video-poster.png")); ?>" alt="Ageless Entertainments Logo" class="ageless-poster-img" loading="lazy" decoding="async">
                            <button type="button" class="ageless-play-trigger" id="ageless-manual-play-trigger" title="Watch Video Now" aria-label="Watch Video Now">
                                <i class="las la-play"></i>
                            </button>
                            <!-- 3-Second Loading Progress Indicator -->
                            <div class="video-autoload-countdown" title="Autoloading in 3 seconds...">
                                <div class="countdown-bar"></div>
                            </div>
                        </div>
                        <!-- Video Frame Target -->
                        <div class="ageless-video-player-wrap" id="ageless-video-player-wrap"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading mb-30 wow fade-in-right" data-wow-delay="200ms">
                        <h3>Great Experience in Building</h3>
                        <h2>Manage everything for brand and <span>trademark!</span></h2>
                        <p>With cutting-edge engineering, precision 3D architectural planning, and custom manufacturing, we build world-class entertainment centers from the ground up.</p>
                    </div>
                    <a class="default-btn wow fade-in-bottom" data-wow-delay="400ms" href="<?php echo e(url('/about-company')); ?>">More About Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         5. PROJECTS SECTION - 3D CAROUSEL
         ============================================== -->
    <section class="project-section padding">
        <div class="container">
            <div class="section-heading-wrap mb-40 d-flex justify-content-between align-items-end flex-wrap gap-3">
                <div class="section-heading wow fade-in-left" data-wow-delay="200ms">
                    <h3>Discover Our Iconic Projects</h3>
                    <h2>Work together to create <br>unique <span>experiences!</span></h2>
                </div>
                <a class="btn-glow-primary wow fade-in-right" data-wow-delay="400ms" href="<?php echo e(url('/projects')); ?>">
                    <span>View All Projects</span>
                    <i class="las la-arrow-right"></i>
                </a>
            </div>

            <?php
                $homeCategoryLabels = [
                    'theme' => 'Theme & Amusement Parks',
                    'adventure' => 'Adventure & Aerial Parks',
                    'cinema' => 'Immersive Cinema & Domes',
                    'indoor' => 'Indoor FEC & Edutainment',
                ];
                $homeCategoryCounts = $projects->countBy('category_key');
            ?>

            <!-- Project Category Filter Pills -->
            <div class="project-filter-wrap mb-40 wow fade-in-bottom" data-wow-delay="250ms">
                <button type="button" class="project-filter-btn active" data-filter="all">All Projects <span class="filter-count"><?php echo e($projects->count()); ?></span></button>
                <?php $__currentLoopData = $homeCategoryCounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $count): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <button type="button" class="project-filter-btn" data-filter="<?php echo e($key); ?>"><?php echo e($homeCategoryLabels[$key] ?? ucfirst($key)); ?> <span class="filter-count"><?php echo e($count); ?></span></button>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <div class="swiper-outside">
                <div class="project-carousel">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="swiper-slide" data-category="<?php echo e($project->category_key); ?>">
                                <div class="project-card-3d tilt-card">
                                    <div class="project-thumb">
                                        <a href="<?php echo e(route('projects.show', $project->slug)); ?>" aria-label="<?php echo e($project->title); ?>">
                                            <img src="<?php echo e($project->image_url); ?>" alt="<?php echo e($project->title); ?>" loading="lazy" decoding="async">
                                        </a>
                                    </div>
                                    <div class="project-glass-info">
                                        <span class="category"><?php echo e($project->category ?: ($homeCategoryLabels[$project->category_key] ?? 'Entertainment Projects')); ?></span>
                                        <h3><a href="<?php echo e(route('projects.show', $project->slug)); ?>"><?php echo e($project->title); ?></a></h3>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="carousel-pagination"></div>
                </div>
                <div class="swiper-nav swiper-next"><i class="las la-long-arrow-alt-right"></i></div>
                <div class="swiper-nav swiper-prev"><i class="las la-long-arrow-alt-left"></i></div>
            </div>
        </div>
    </section>


    <!-- ==============================================
         7. SPONSOR / CLIENT CAROUSEL
         ============================================== -->
    <div class="sponsor-section">
        <div class="container">
            <div class="outside-spacing">
                <div class="sponsor-carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/partners/irido.png')); ?>" alt="Irido" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/01_Kerala_Bank.png')); ?>" alt="Kerala Bank" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/02_Magic_Planet.png')); ?>" alt="Magic Planet" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/03_Fantasy_Park.png')); ?>" alt="Fantasy Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/04_Oberon_Mall.png')); ?>" alt="Oberon Mall" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/05_Dream_World_Water_Park.png')); ?>" alt="Dream World Water Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/06_E3_Theme_Parks.png')); ?>" alt="E3 Theme Parks" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/07_Elephant_Valley.png')); ?>" alt="Elephant Valley" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/08_Wonder_Valley.png')); ?>" alt="Wonder Valley" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/09_DTPC_Palakkad.png')); ?>" alt="DTPC Palakkad" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/10_Happyland.png')); ?>" alt="Happyland" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/11_KITCO.png')); ?>" alt="KITCO" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/12_Jatayu_Tourism_Centre.png')); ?>" alt="Jatayu Tourism Centre" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/13_Dreamland_Fun_Adventure.png')); ?>" alt="Dreamland Fun Adventure" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/14_Udan_Khatola.png')); ?>" alt="Udan Khatola" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/15_DTPC.png')); ?>" alt="DTPC" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/16_Forum_Fiza.png')); ?>" alt="Forum Fiza" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/17_DTPC_Malappuram.png')); ?>" alt="DTPC Malappuram" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/18_Green_Valley_Water_Theme_Park.png')); ?>" alt="Green Valley Water Theme Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/19_Grand_Centre_Mall.png')); ?>" alt="Grand Centre Mall" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/20_Cochin_Childrens_Science_Park.png')); ?>" alt="Cochin Children's Science Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/21_Paramount_Technologies.png')); ?>" alt="Paramount Technologies" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/22_HiLITE_Mall.png')); ?>" alt="HiLITE Mall" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/23_Hydel_Tourism.png')); ?>" alt="Hydel Tourism" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="<?php echo e(asset('assets/img/partners/24_Brookefields.png')); ?>" alt="Brookefields" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/partners/snow-fantasy.png')); ?>" alt="Snow Fantasy" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/partners/red-kites-sports-academy.jpg')); ?>" alt="Red Kites Sports Academy" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/partners/fly-over-wonders.png')); ?>" alt="Fly Over Wonders" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/partners/active-planet-park.webp')); ?>" alt="Active Planet Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/partners/vythiri-park.png')); ?>" alt="Vythiri Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/partners/mall-of-qatar.jpg')); ?>" alt="Mall of Qatar" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="<?php echo e(asset('assets/img/partners/cowboy-park.webp')); ?>" alt="Cowboy Park" width="180" height="90" loading="eager" decoding="async"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==============================================
         FLOATING ACTION BUTTONS
         ============================================== -->
    <div class="floating-buttons">
        <a href="https://wa.me/+917025777755" class="whatsapp" target="_blank" title="Chat on WhatsApp">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" loading="lazy" decoding="async">
        </a>
    </div>

    <?php echo $__env->make('partials.home-faq', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Footer -->
<?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <!-- Scroll Up -->
    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top"><i class="las la-arrow-up"></i></button>
    </div>

    <!-- Core Vendor Libs -->
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

    <!-- Animation & Parallax CDNs: GSAP 3, ScrollTrigger & Lenis -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>

    <!-- Parallax & Kinetic Animation Controller -->
    <script src="<?php echo e(asset("assets/js/parallax-engine.js")); ?>?v=<?php echo e(filemtime(public_path('assets/js/parallax-engine.js'))); ?>"></script>

    <!-- Project Carousel Filter Controller -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var filterBtns = document.querySelectorAll('.project-filter-btn');
        var projectWrapper = document.querySelector('.project-carousel .swiper-wrapper');
        if (!projectWrapper || !filterBtns.length) return;

        // Store all original slide elements
        var allSlides = Array.from(projectWrapper.children);

        function initProjectSwiper() {
            if (window.projectSwiperInstance && typeof window.projectSwiperInstance.destroy === 'function') {
                window.projectSwiperInstance.destroy(true, true);
            }
            var slideCount = projectWrapper.children.length;
            window.projectSwiperInstance = new Swiper('.project-carousel', {
                slidesPerView: 3,
                spaceBetween: 25,
                slidesPerGroup: 1,
                loop: slideCount > 3,
                loopAdditionalSlides: 2,
                speed: 700,
                autoplay: {
                    delay: 2500,
                    disableOnInteraction: false,
                    pauseOnMouseEnter: true
                },
                pagination: {
                    el: '.project-carousel .carousel-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-next',
                    prevEl: '.swiper-prev'
                },
                breakpoints: {
                    320: { slidesPerView: 1, slidesPerGroup: 1, spaceBetween: 20 },
                    768: { slidesPerView: 2, slidesPerGroup: 1, spaceBetween: 25 },
                    1024: { slidesPerView: 3, slidesPerGroup: 1, spaceBetween: 30 }
                }
            });

            // Re-init venobox for newly attached slides
            if (typeof jQuery !== 'undefined' && typeof jQuery.fn.venobox !== 'undefined') {
                jQuery('.venobox').venobox({
                    numeration: true,
                    infinigall: true,
                    share: false,
                    spinner: 'spinner-pulse'
                });
            }
        }

        // Delay slight tick to take precedence over main.js
        setTimeout(initProjectSwiper, 150);

        filterBtns.forEach(function(btn) {
            btn.addEventListener('click', function() {
                filterBtns.forEach(function(b) { b.classList.remove('active'); });
                this.classList.add('active');

                var filter = this.getAttribute('data-filter');
                projectWrapper.innerHTML = '';

                allSlides.forEach(function(slide) {
                    var category = slide.getAttribute('data-category');
                    if (filter === 'all' || category === filter) {
                        projectWrapper.appendChild(slide.cloneNode(true));
                    }
                });

                initProjectSwiper();
            });
        });
        // ----------------------------------------------------
        // AGELESS VIDEO AUTOLOAD (3-SECOND LOGO DISPLAY)
        // ----------------------------------------------------
        (function() {
            var videoBox = document.getElementById('ageless-autoload-video-box');
            var poster = document.getElementById('ageless-video-poster');
            var playerWrap = document.getElementById('ageless-video-player-wrap');
            var playBtn = document.getElementById('ageless-manual-play-trigger');
            var countdownBar = videoBox ? videoBox.querySelector('.countdown-bar') : null;

            if (!videoBox || !playerWrap) return;

            var hasLoaded = false;
            var timer = null;
            var videoId = 'QNXkUCMlo7I';
            var activeIframe = null;

            function loadVideo(isManualClick) {
                if (hasLoaded) return;
                hasLoaded = true;

                if (timer) {
                    clearTimeout(timer);
                    timer = null;
                }

                // Autoplay policy requires mute=1 for automated playback without user gesture
                var muteParam = isManualClick ? '&mute=0' : '&mute=1';
                var embedUrl = 'https://www.youtube.com/embed/' + videoId +
                    '?si=bdtfJbViNIEo9Je5&autoplay=1' + muteParam +
                    '&playsinline=1&rel=0&modestbranding=1&enablejsapi=1';

                var iframe = document.createElement('iframe');
                iframe.setAttribute('src', embedUrl);
                iframe.setAttribute('title', 'Ageless Entertainments Video');
                iframe.setAttribute('referrerpolicy', 'strict-origin-when-cross-origin');
                iframe.setAttribute('allow', 'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share');
                iframe.setAttribute('allowfullscreen', 'true');
                iframe.style.width = '100%';
                iframe.style.height = '100%';
                iframe.style.border = '0';

                playerWrap.innerHTML = '';
                playerWrap.appendChild(iframe);
                activeIframe = iframe;

                // Add sound toggle button if autoloaded muted
                if (!isManualClick) {
                    var soundBtn = document.createElement('button');
                    soundBtn.type = 'button';
                    soundBtn.className = 'ageless-sound-toggle-btn';
                    soundBtn.innerHTML = '<i class="las la-volume-mute"></i> <span>Unmute</span>';
                    soundBtn.title = 'Click to enable audio';

                    soundBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        if (activeIframe && activeIframe.contentWindow) {
                            activeIframe.contentWindow.postMessage('{"event":"command","func":"unMute","args":""}', '*');
                            activeIframe.contentWindow.postMessage('{"event":"command","func":"setVolume","args":[100]}', '*');
                        }
                        soundBtn.innerHTML = '<i class="las la-volume-up"></i> <span>Audio On</span>';
                        soundBtn.style.background = '#f5a100';
                        soundBtn.style.color = '#000000';
                        setTimeout(function() {
                            soundBtn.style.opacity = '0';
                            setTimeout(function() { soundBtn.remove(); }, 300);
                        }, 2000);
                    });

                    videoBox.appendChild(soundBtn);
                }

                if (poster) {
                    poster.classList.add('is-hidden');
                }
                videoBox.classList.add('video-active');
                videoBox.classList.remove('tilt-card');
            }

            // Click play button to start immediately
            if (playBtn) {
                playBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    loadVideo(true);
                });
            }

            // Start 3-second timer when visible
            function startCountdown() {
                if (hasLoaded || timer) return;

                if (countdownBar) {
                    countdownBar.classList.add('running');
                }

                timer = setTimeout(function() {
                    loadVideo(false);
                }, 3000);
            }

            if ('IntersectionObserver' in window) {
                var observer = new IntersectionObserver(function(entries) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            startCountdown();
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.25 });

                observer.observe(videoBox);
            } else {
                setTimeout(function() {
                    loadVideo(false);
                }, 3000);
            }
        })();
    });
    </script>
<?php echo $__env->make('partials.website-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\ageless_website\resources\views/pages/home.blade.php ENDPATH**/ ?>