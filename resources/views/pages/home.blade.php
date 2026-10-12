<!doctype html>
<html lang="en" class="no-js @include('partials.tailwind.poppins-font')
@include('partials.tailwind.bootstrap')
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
@include('partials.tailwind.home-faq')
@include('partials.tailwind.home-responsive')
@include('partials.tailwind.partials-clean-navigation-1')
@include('partials.tailwind.pages-home-1')
@include('partials.tailwind.website-chat')
@include('partials.tailwind.kite-cursor')
@stack('tailwind_styles')">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ageless Entertainments">
    <meta name="author" content="Ageless Entertainments">

    <title>Ageless Entertainments </title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ filemtime(public_path('assets/img/favicon.png')) }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ filemtime(public_path('assets/img/favicon.png')) }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Full Animation & Parallax Engine Styles -->

    <link rel="preload" as="image" href="{{ asset('hero-park-poster.jpg') }}" fetchpriority="high">
    @include('partials.clean-navigation')
    
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}?v={{ filemtime(public_path('assets/css/tailwind.css')) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/partner-logos.css') }}?v={{ filemtime(public_path('assets/css/partner-logos.css')) }}">
</head>

<body class="home-page">

    <!-- Header -->
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
         1. HERO SECTION - MULTI-LAYER 3D PARALLAX
         ============================================== -->
    <section class="hero-parallax-wrapper">
        <video class="hero-bg-layer" autoplay muted loop playsinline preload="metadata" poster="{{ asset('hero-park-poster.jpg') }}" aria-hidden="true">
            <source src="{{ asset('assets/videos/hero-park-clouds.mp4') }}?v={{ filemtime(public_path('assets/videos/hero-park-clouds.mp4')) }}" type="video/mp4">
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
                            <a href="{{ url('/projects') }}" class="btn-glow-primary">
                                <span>Explore Projects</span>
                                <i class="las la-arrow-right"></i>
                            </a>
                            <a href="{{ url('/contact') }}" class="btn-glass-secondary">
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
                            @foreach($aboutProducts as $product)
                            <div class="stack-card {{ $loop->first ? 'stack-card-1 is-front' : ($loop->iteration === 2 ? 'is-back' : 'is-hidden-stack') }}" data-index="{{ $loop->iteration }}">
                                <img class="img-fluid" src="{{ $product->image_url }}" alt="{{ $product->name }}" loading="lazy" decoding="async">
                                <span class="card-category-pill">{{ $product->name }}</span>
                            </div>
                            @endforeach
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
                        <a href="{{ url('/about-company') }}" class="default-btn wow fade-in-bottom" data-wow-delay="200ms">More About Us</a>
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
                            <img src="{{ asset("assets/img/roller1.jpg") }}" alt="Amusement Park" loading="lazy" decoding="async">
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
                            <img src="{{ asset("assets/img/products/kayaks.jpg") }}" alt="Water Park Attractions" loading="lazy" decoding="async">
                        </div>
                        <div class="service-content">
                            <h3>Water Park Attractions</h3>
                            <p>From dynamic splash pads to wave pools and lazy rivers, we build refreshing aquatic adventures for all ages.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item-3d tilt-card wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="service-thumb">
                            <img src="{{ asset("assets/img/snow3.jpg") }}" alt="Theme Parks" loading="lazy" decoding="async">
                        </div>
                        <div class="service-content">
                            <h3>Theme Parks</h3>
                            <p>Immersive themed worlds, from snow parks to fantasy zones, designed to wow visitors of every age.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item-3d tilt-card wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="service-thumb">
                            <img src="{{ asset("assets/img/adventure.png") }}" alt="Sky and Adventure Rides" loading="lazy" decoding="async">
                        </div>
                        <div class="service-content">
                            <h3>Sky &amp; Adventure Rides</h3>
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
                            <img src="{{ asset("assets/img/video-poster.png") }}" alt="Ageless Entertainments Logo" class="ageless-poster-img" loading="lazy" decoding="async">
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
                    <a class="default-btn wow fade-in-bottom" data-wow-delay="400ms" href="{{ url('/about-company') }}">More About Us</a>
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
                <a class="btn-glow-primary wow fade-in-right" data-wow-delay="400ms" href="{{ url('/projects') }}">
                    <span>View All Projects</span>
                    <i class="las la-arrow-right"></i>
                </a>
            </div>

            <!-- Project Category Filter Pills -->
            <div class="project-filter-wrap mb-40 wow fade-in-bottom" data-wow-delay="250ms">
                <button type="button" class="project-filter-btn active" data-filter="all">All Attractions <span class="filter-count">53</span></button>
                <button type="button" class="project-filter-btn" data-filter="toy">Toy &amp; Kids Rides <span class="filter-count">7</span></button>
                <button type="button" class="project-filter-btn" data-filter="snow">Snow Fantasy <span class="filter-count">6</span></button>
                <button type="button" class="project-filter-btn" data-filter="rope">High &amp; Low Rope Rider <span class="filter-count">8</span></button>
                <button type="button" class="project-filter-btn" data-filter="roller">Roller Coaster <span class="filter-count">6</span></button>
                <button type="button" class="project-filter-btn" data-filter="parkdesign">Park Design <span class="filter-count">8</span></button>
                <button type="button" class="project-filter-btn" data-filter="flying">Flying Cinema <span class="filter-count">7</span></button>
                <button type="button" class="project-filter-btn" data-filter="dome">Dome Cinema <span class="filter-count">6</span></button>
                <button type="button" class="project-filter-btn" data-filter="12d4d">12D &amp; 4D Cinema <span class="filter-count">5</span></button>
            </div>

            <div class="swiper-outside">
                <div class="project-carousel">
                    <div class="swiper-wrapper">
                        <!-- ================= TOY & KIDS RIDES (1 to 7) ================= -->
                        <!-- Toy 1 -->
                        <div class="swiper-slide" data-category="toy">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/toy1.jpg") }}" data-gall="projects" title="Electric Trackless Family Train">
                                        <img src="{{ asset("assets/img/toy1.jpg") }}" alt="Electric Trackless Family Train" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Kids &amp; Family Rides</span>
                                    <h3><a href="{{ url('/products') }}">Electric Trackless Family Train</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Toy 2 -->
                        <div class="swiper-slide" data-category="toy">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/toy2.jpg") }}" data-gall="projects" title="Interactive Kids Safari EV Cars">
                                        <img src="{{ asset("assets/img/toy2.jpg") }}" alt="Interactive Kids Safari EV Cars" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Kids &amp; Family Rides</span>
                                    <h3><a href="{{ url('/products') }}">Interactive Kids Safari EV Cars</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Toy 3 -->
                        <div class="swiper-slide" data-category="toy">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/toy3.jpg") }}" data-gall="projects" title="Classic Carousel &amp; Theme Ride">
                                        <img src="{{ asset("assets/img/toy3.jpg") }}" alt="Classic Carousel &amp; Theme Ride" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Kids &amp; Family Rides</span>
                                    <h3><a href="{{ url('/products') }}">Classic Carousel &amp; Theme Ride</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Toy 4 -->
                        <div class="swiper-slide" data-category="toy">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/toy4.jpg") }}" data-gall="projects" title="Battery Bumper Cars Arena">
                                        <img src="{{ asset("assets/img/toy4.jpg") }}" alt="Battery Bumper Cars Arena" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Kids &amp; Family Rides</span>
                                    <h3><a href="{{ url('/products') }}">Battery Bumper Cars Arena</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Toy 5 -->
                        <div class="swiper-slide" data-category="toy">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/toy5.jpg") }}" data-gall="projects" title="Junior Electric Go-Kart Vehicles">
                                        <img src="{{ asset("assets/img/toy5.jpg") }}" alt="Junior Electric Go-Kart Vehicles" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Kids &amp; Family Rides</span>
                                    <h3><a href="{{ url('/products') }}">Junior Electric Go-Kart Vehicles</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Toy 6 -->
                        <div class="swiper-slide" data-category="toy">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/toy6.jpg") }}" data-gall="projects" title="Custom Themed Amusement Toy Rides">
                                        <img src="{{ asset("assets/img/toy6.jpg") }}" alt="Custom Themed Amusement Toy Rides" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Kids &amp; Family Rides</span>
                                    <h3><a href="{{ url('/products') }}">Custom Themed Amusement Toy Rides</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Toy 7 -->
                        <div class="swiper-slide" data-category="toy">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/toy7.jpg") }}" data-gall="projects" title="Turnkey Children's Funzone Rides">
                                        <img src="{{ asset("assets/img/toy7.jpg") }}" alt="Turnkey Children's Funzone Rides" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Kids &amp; Family Rides</span>
                                    <h3><a href="{{ url('/products') }}">Turnkey Children's Funzone Rides</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- ================= SNOW FANTASY (1 to 6) ================= -->
                        <!-- Snow 1 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow1.jpeg") }}" data-gall="projects" title="Sub-Zero Indoor Snow World">
                                        <img src="{{ asset("assets/img/snow1.jpeg") }}" alt="Sub-Zero Indoor Snow World" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Fantasy Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Sub-Zero Indoor Snow World</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 2 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow2.jpeg") }}" data-gall="projects" title="Real Snowfall Adventure Arena">
                                        <img src="{{ asset("assets/img/snow2.jpeg") }}" alt="Real Snowfall Adventure Arena" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Fantasy Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Real Snowfall Adventure Arena</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 3 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow3.jpeg") }}" data-gall="projects" title="Alpine Sledging &amp; Ice Slides">
                                        <img src="{{ asset("assets/img/snow3.jpeg") }}" alt="Alpine Sledging &amp; Ice Slides" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Fantasy Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Alpine Sledging &amp; Ice Slides</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 4 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow4.jpg") }}" data-gall="projects" title="Cryogenic Snow Play Zone">
                                        <img src="{{ asset("assets/img/snow4.jpg") }}" alt="Cryogenic Snow Play Zone" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Fantasy Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Cryogenic Snow Play Zone</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 5 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow5.jpg") }}" data-gall="projects" title="Winter Wonderland Family Park">
                                        <img src="{{ asset("assets/img/snow5.jpg") }}" alt="Winter Wonderland Family Park" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Fantasy Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Winter Wonderland Family Park</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 6 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow6.jpg") }}" data-gall="projects" title="Turnkey Snow Fantasy Architecture">
                                        <img src="{{ asset("assets/img/snow6.jpg") }}" alt="Turnkey Snow Fantasy Architecture" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Fantasy Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Turnkey Snow Fantasy Architecture</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- ================= ROPE RIDER (1 to 8) ================= -->
                        <!-- Rope 1 -->
                        <div class="swiper-slide" data-category="rope">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/rope3.jpg") }}" data-gall="projects" title="Misty Land Aerial Rope Glider">
                                        <img src="{{ asset("assets/img/rope3.jpg") }}" alt="Misty Land Aerial Rope Glider" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Rope Rider &amp; Adventure</span>
                                    <h3><a href="{{ url('/rope-rider') }}">Misty Land Aerial Rope Glider</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Rope 2 -->
                        <div class="swiper-slide" data-category="rope">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/rope2.jpg") }}" data-gall="projects" title="Suspended Gravity Cable Glider">
                                        <img src="{{ asset("assets/img/rope2.jpg") }}" alt="Suspended Gravity Cable Glider" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Rope Rider &amp; Adventure</span>
                                    <h3><a href="{{ url('/rope-rider') }}">Suspended Gravity Cable Glider</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Rope 3 -->
                        <div class="swiper-slide" data-category="rope">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/rope3.jpg") }}" data-gall="projects" title="High-Altitude Aerial Circuit">
                                        <img src="{{ asset("assets/img/rope3.jpg") }}" alt="High-Altitude Aerial Circuit" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Rope Rider &amp; Adventure</span>
                                    <h3><a href="{{ url('/rope-rider') }}">High-Altitude Aerial Circuit</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Rope 4 -->
                        <div class="swiper-slide" data-category="rope">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/rope4.jpg") }}" data-gall="projects" title="Extreme Treetop Adventure Glider">
                                        <img src="{{ asset("assets/img/rope4.jpg") }}" alt="Extreme Treetop Adventure Glider" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Rope Rider &amp; Adventure</span>
                                    <h3><a href="{{ url('/rope-rider') }}">Extreme Treetop Adventure Glider</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Rope 5 -->
                        <div class="swiper-slide" data-category="rope">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/rope5.jpg") }}" data-gall="projects" title="Multi-Track Aerial Rope Ride">
                                        <img src="{{ asset("assets/img/rope5.jpg") }}" alt="Multi-Track Aerial Rope Ride" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Rope Rider &amp; Adventure</span>
                                    <h3><a href="{{ url('/rope-rider') }}">Multi-Track Aerial Rope Ride</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Rope 6 -->
                        <div class="swiper-slide" data-category="rope">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/Munnar%20Net%20park.png") }}" data-gall="projects" title="Munnar Net Park">
                                        <img src="{{ asset("assets/img/Munnar%20Net%20park.png") }}" alt="Munnar Net Park" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Rope Rider &amp; Adventure</span>
                                    <h3><a href="{{ url('/rope-rider') }}">Munnar Net Park</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Rope 7 -->
                        <div class="swiper-slide" data-category="rope">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/Kanyakumari%20activities.png") }}" data-gall="projects" title="Kanyakumari Net Park Activities">
                                        <img src="{{ asset("assets/img/Kanyakumari%20activities.png") }}" alt="Kanyakumari Net Park Activities" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Rope Rider &amp; Adventure</span>
                                    <h3><a href="{{ url('/rope-rider') }}">Kanyakumari Net Park Activities</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Rope 8 -->
                        <div class="swiper-slide" data-category="rope">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/Zipline10.jpg") }}" data-gall="projects" title="Tandem Zipline Adventure">
                                        <img src="{{ asset("assets/img/Zipline10.jpg") }}" alt="Tandem Zipline Adventure" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Rope Rider &amp; Adventure</span>
                                    <h3><a href="{{ url('/rope-rider') }}">Tandem Zipline Adventure</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- ================= ROLLER COASTER (1 to 6) ================= -->
                        <!-- Roller 1 -->
                        <div class="swiper-slide" data-category="roller">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/roller1.jpg") }}" data-gall="projects" title="High-Speed Family Coaster">
                                        <img src="{{ asset("assets/img/roller1.jpg") }}" alt="High-Speed Family Coaster" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Roller Coaster</span>
                                    <h3><a href="{{ url('/projects') }}">High-Speed Family Coaster</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Roller 2 -->
                        <div class="swiper-slide" data-category="roller">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/roller2.jpg") }}" data-gall="projects" title="Thrill Spiraling Steel Coaster">
                                        <img src="{{ asset("assets/img/roller2.jpg") }}" alt="Thrill Spiraling Steel Coaster" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Roller Coaster</span>
                                    <h3><a href="{{ url('/projects') }}">Thrill Spiraling Steel Coaster</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Roller 3 -->
                        <div class="swiper-slide" data-category="roller">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/roller3.jpg") }}" data-gall="projects" title="Custom Terrain Amusement Coaster">
                                        <img src="{{ asset("assets/img/roller3.jpg") }}" alt="Custom Terrain Amusement Coaster" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Roller Coaster</span>
                                    <h3><a href="{{ url('/projects') }}">Custom Terrain Amusement Coaster</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Roller 4 -->
                        <div class="swiper-slide" data-category="roller">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/roller4.jpg") }}" data-gall="projects" title="High-Altitude Loop Coaster">
                                        <img src="{{ asset("assets/img/roller4.jpg") }}" alt="High-Altitude Loop Coaster" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Roller Coaster</span>
                                    <h3><a href="{{ url('/projects') }}">High-Altitude Loop Coaster</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Roller 5 -->
                        <div class="swiper-slide" data-category="roller">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/roller5.jpg") }}" data-gall="projects" title="Wild Kinetic Family Track Coaster">
                                        <img src="{{ asset("assets/img/roller5.jpg") }}" alt="Wild Kinetic Family Track Coaster" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Roller Coaster</span>
                                    <h3><a href="{{ url('/projects') }}">Wild Kinetic Family Track Coaster</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Roller 6 -->
                        <div class="swiper-slide" data-category="roller">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/roller6.jpg") }}" data-gall="projects" title="Turnkey Theme Park Roller Coaster">
                                        <img src="{{ asset("assets/img/roller6.jpg") }}" alt="Turnkey Theme Park Roller Coaster" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Roller Coaster</span>
                                    <h3><a href="{{ url('/projects') }}">Turnkey Theme Park Roller Coaster</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- ================= PARK DESIGN & MASTER PLANNING (1 to 8) ================= -->
                        <!-- Park Design 1 -->
                        <div class="swiper-slide" data-category="parkdesign">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/parkdesign1.jpg") }}" data-gall="projects" title="Turnkey Master Planning &amp; Theming">
                                        <img src="{{ asset("assets/img/parkdesign1.jpg") }}" alt="Turnkey Master Planning &amp; Theming" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Park Design &amp; Architecture</span>
                                    <h3><a href="{{ url('/about-company') }}">Turnkey Master Planning &amp; Theming</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Park Design 2 -->
                        <div class="swiper-slide" data-category="parkdesign">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/parkdesign2.jpg") }}" data-gall="projects" title="3D Thematic Architectural Layout">
                                        <img src="{{ asset("assets/img/parkdesign2.jpg") }}" alt="3D Thematic Architectural Layout" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Park Design &amp; Architecture</span>
                                    <h3><a href="{{ url('/about-company') }}">3D Thematic Architectural Layout</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Park Design 3 -->
                        <div class="swiper-slide" data-category="parkdesign">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/parkdesign3.jpg") }}" data-gall="projects" title="Integrated Amusement Park Design">
                                        <img src="{{ asset("assets/img/parkdesign3.jpg") }}" alt="Integrated Amusement Park Design" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Park Design &amp; Architecture</span>
                                    <h3><a href="{{ url('/about-company') }}">Integrated Amusement Park Design</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Park Design 4 -->
                        <div class="swiper-slide" data-category="parkdesign">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/parkdesign4.jpg") }}" data-gall="projects" title="Adventure &amp; Water World Blueprint">
                                        <img src="{{ asset("assets/img/parkdesign4.jpg") }}" alt="Adventure &amp; Water World Blueprint" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Park Design &amp; Architecture</span>
                                    <h3><a href="{{ url('/about-company') }}">Adventure &amp; Water World Blueprint</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Park Design 5 -->
                        <div class="swiper-slide" data-category="parkdesign">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/parkdesign5.jpg") }}" data-gall="projects" title="Futuristic Entertainment Zone Layout">
                                        <img src="{{ asset("assets/img/parkdesign5.jpg") }}" alt="Futuristic Entertainment Zone Layout" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Park Design &amp; Architecture</span>
                                    <h3><a href="{{ url('/about-company') }}">Futuristic Entertainment Zone Layout</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Park Design 6 -->
                        <div class="swiper-slide" data-category="parkdesign">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/parkdesign6.jpg") }}" data-gall="projects" title="Comprehensive Resort Master Blueprint">
                                        <img src="{{ asset("assets/img/parkdesign6.jpg") }}" alt="Comprehensive Resort Master Blueprint" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Park Design &amp; Architecture</span>
                                    <h3><a href="{{ url('/about-company') }}">Comprehensive Resort Master Blueprint</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Park Design 7 -->
                        <div class="swiper-slide" data-category="parkdesign">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/parkdesign7.jpg") }}" data-gall="projects" title="Themed Landscape &amp; Attraction Architecture">
                                        <img src="{{ asset("assets/img/parkdesign7.jpg") }}" alt="Themed Landscape &amp; Attraction Architecture" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Park Design &amp; Architecture</span>
                                    <h3><a href="{{ url('/about-company') }}">Themed Landscape &amp; Attraction Architecture</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Park Design 8 -->
                        <div class="swiper-slide" data-category="parkdesign">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/parkdesign8.jpg") }}" data-gall="projects" title="Custom Attraction Engineering &amp; Design">
                                        <img src="{{ asset("assets/img/parkdesign8.jpg") }}" alt="Custom Attraction Engineering &amp; Design" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Park Design &amp; Architecture</span>
                                    <h3><a href="{{ url('/about-company') }}">Custom Attraction Engineering &amp; Design</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- ================= FLYING CINEMA (1 to 7) ================= -->
                        <!-- Flying 1 -->
                        <div class="swiper-slide" data-category="flying">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/flying1.jpg") }}" data-gall="projects" title="Mall of Qatar Flying Theatre">
                                        <img src="{{ asset("assets/img/flying1.jpg") }}" alt="Mall of Qatar Flying Theatre" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Flying Cinema</span>
                                    <h3><a href="{{ url('/flying-cinema') }}">Mall of Qatar Flying Theatre</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Flying 2 -->
                        <div class="swiper-slide" data-category="flying">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/flying2.jpg") }}" data-gall="projects" title="Suspended Motion Flying Simulator">
                                        <img src="{{ asset("assets/img/flying2.jpg") }}" alt="Suspended Motion Flying Simulator" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Flying Cinema</span>
                                    <h3><a href="{{ url('/flying-cinema') }}">Suspended Motion Flying Simulator</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Flying 3 -->
                        <div class="swiper-slide" data-category="flying">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/flying3.jpg") }}" data-gall="projects" title="Panoramic Sky Flight Adventure">
                                        <img src="{{ asset("assets/img/flying3.jpg") }}" alt="Panoramic Sky Flight Adventure" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Flying Cinema</span>
                                    <h3><a href="{{ url('/flying-cinema') }}">Panoramic Sky Flight Adventure</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Flying 4 -->
                        <div class="swiper-slide" data-category="flying">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/flying4.jpg") }}" data-gall="projects" title="Multi-DOF Kinetic Flight System">
                                        <img src="{{ asset("assets/img/flying4.jpg") }}" alt="Multi-DOF Kinetic Flight System" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Flying Cinema</span>
                                    <h3><a href="{{ url('/flying-cinema') }}">Multi-DOF Kinetic Flight System</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Flying 5 -->
                        <div class="swiper-slide" data-category="flying">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/flying5.jpg") }}" data-gall="projects" title="Immersive Flying Ride Experience">
                                        <img src="{{ asset("assets/img/flying5.jpg") }}" alt="Immersive Flying Ride Experience" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Flying Cinema</span>
                                    <h3><a href="{{ url('/flying-cinema') }}">Immersive Flying Ride Experience</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Flying 6 -->
                        <div class="swiper-slide" data-category="flying">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/flying6.jpg") }}" data-gall="projects" title="Virtual Horizon Flight Theatre">
                                        <img src="{{ asset("assets/img/flying6.jpg") }}" alt="Virtual Horizon Flight Theatre" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Flying Cinema</span>
                                    <h3><a href="{{ url('/flying-cinema') }}">Virtual Horizon Flight Theatre</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Flying 7 -->
                        <div class="swiper-slide" data-category="flying">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/flying7.jpg") }}" data-gall="projects" title="Next-Gen Aerial Soaring Simulator">
                                        <img src="{{ asset("assets/img/flying7.jpg") }}" alt="Next-Gen Aerial Soaring Simulator" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Flying Cinema</span>
                                    <h3><a href="{{ url('/flying-cinema') }}">Next-Gen Aerial Soaring Simulator</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- ================= DOME CINEMA (1 to 6) ================= -->
                        <!-- Dome 1 -->
                        <div class="swiper-slide" data-category="dome">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/dome1.jpg") }}" data-gall="projects" title="Munnar Botanical Garden 360° Dome">
                                        <img src="{{ asset("assets/img/dome1.jpg") }}" alt="Munnar Botanical Garden 360° Dome" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Dome Cinema</span>
                                    <h3><a href="{{ url('/dome-cinema') }}">Munnar Botanical Garden 360° Dome</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Dome 2 -->
                        <div class="swiper-slide" data-category="dome">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/1920x1080.jpg") }}" data-gall="projects" title="Panoramic Fulldome Immersion Theatre">
                                        <img src="{{ asset("assets/img/1920x1080.jpg") }}" alt="Panoramic Fulldome Immersion Theatre" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Dome Cinema</span>
                                    <h3><a href="{{ url('/dome-cinema') }}">Panoramic Fulldome Immersion Theatre</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Dome 3 -->
                        <div class="swiper-slide" data-category="dome">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/WhatsApp%20Image%202026-03-27%20at%206.45.07%20PM.jpeg") }}" data-gall="projects" title="Geodesic Dome Installation">
                                        <img src="{{ asset("assets/img/WhatsApp%20Image%202026-03-27%20at%206.45.07%20PM.jpeg") }}" alt="Geodesic Dome Installation" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Dome Cinema</span>
                                    <h3><a href="{{ url('/dome-cinema') }}">Geodesic Dome Installation</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Dome 4 -->
                        <div class="swiper-slide" data-category="dome">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/WhatsApp%20Image%202026-06-09%20at%204.00.17%20PM%20(1).jpeg") }}" data-gall="projects" title="High-Resolution 360° Visual Dome">
                                        <img src="{{ asset("assets/img/WhatsApp%20Image%202026-06-09%20at%204.00.17%20PM%20(1).jpeg") }}" alt="High-Resolution 360° Visual Dome" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Dome Cinema</span>
                                    <h3><a href="{{ url('/dome-cinema') }}">High-Resolution 360° Visual Dome</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Dome 5 -->
                        <div class="swiper-slide" data-category="dome">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/WhatsApp%20Image%202026-07-01%20at%2012.33.06%20PM%20(1).jpeg") }}" data-gall="projects" title="Immersive Cinema Dome Installation">
                                        <img src="{{ asset("assets/img/WhatsApp%20Image%202026-07-01%20at%2012.33.06%20PM%20(1).jpeg") }}" alt="Immersive Cinema Dome Installation" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Dome Cinema</span>
                                    <h3><a href="{{ url('/dome-cinema') }}">Immersive Cinema Dome Installation</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Dome 6 -->
                        <div class="swiper-slide" data-category="dome">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/WhatsApp%20Image%202026-07-10%20at%209.15.36%20AM.jpeg") }}" data-gall="projects" title="Turnkey Immersive Projection Dome">
                                        <img src="{{ asset("assets/img/WhatsApp%20Image%202026-07-10%20at%209.15.36%20AM.jpeg") }}" alt="Turnkey Immersive Projection Dome" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Dome Cinema</span>
                                    <h3><a href="{{ url('/dome-cinema') }}">Turnkey Immersive Projection Dome</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- ================= 12D & 4D CINEMA (1 to 5) ================= -->
                        <!-- 12D 1 -->
                        <div class="swiper-slide" data-category="12d4d">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/12d4d1.jpg") }}" data-gall="projects" title="12D Dynamic Motion Cinema Theatre">
                                        <img src="{{ asset("assets/img/12d4d1.jpg") }}" alt="12D Dynamic Motion Cinema Theatre" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">12D / 4D Cinema</span>
                                    <h3><a href="{{ url('/interactive-room') }}">12D Dynamic Motion Cinema Theatre</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- 12D 2 -->
                        <div class="swiper-slide" data-category="12d4d">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/12d4d2.jpg") }}" data-gall="projects" title="Multi-Sensory 4D FX Special Effects">
                                        <img src="{{ asset("assets/img/12d4d2.jpg") }}" alt="Multi-Sensory 4D FX Special Effects" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">12D / 4D Cinema</span>
                                    <h3><a href="{{ url('/interactive-room') }}">Multi-Sensory 4D FX Special Effects</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- 12D 3 -->
                        <div class="swiper-slide" data-category="12d4d">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/12d4d3.jpg") }}" data-gall="projects" title="Hydraulic Motion Platform Simulator">
                                        <img src="{{ asset("assets/img/12d4d3.jpg") }}" alt="Hydraulic Motion Platform Simulator" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">12D / 4D Cinema</span>
                                    <h3><a href="{{ url('/interactive-room') }}">Hydraulic Motion Platform Simulator</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- 12D 4 -->
                        <div class="swiper-slide" data-category="12d4d">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/12d4d4.jpg") }}" data-gall="projects" title="Interactive Immersive VR &amp; 12D Theatre">
                                        <img src="{{ asset("assets/img/12d4d4.jpg") }}" alt="Interactive Immersive VR &amp; 12D Theatre" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">12D / 4D Cinema</span>
                                    <h3><a href="{{ url('/interactive-room') }}">Interactive Immersive VR &amp; 12D Theatre</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- 12D 5 -->
                        <div class="swiper-slide" data-category="12d4d">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/12d4d5.jpg") }}" data-gall="projects" title="Turnkey 12D / 4D Cinema Installation">
                                        <img src="{{ asset("assets/img/12d4d5.jpg") }}" alt="Turnkey 12D / 4D Cinema Installation" loading="lazy" decoding="async">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">12D / 4D Cinema</span>
                                    <h3><a href="{{ url('/interactive-room') }}">Turnkey 12D / 4D Cinema Installation</a></h3>
                                </div>
                            </div>
                        </div>
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
                        <div class="swiper-slide"><img src="{{ asset('assets/img/partners/irido.png') }}" alt="Irido" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/01_Kerala_Bank.png') }}" alt="Kerala Bank" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/02_Magic_Planet.png') }}" alt="Magic Planet" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/03_Fantasy_Park.png') }}" alt="Fantasy Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/04_Oberon_Mall.png') }}" alt="Oberon Mall" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/05_Dream_World_Water_Park.png') }}" alt="Dream World Water Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/06_E3_Theme_Parks.png') }}" alt="E3 Theme Parks" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/07_Elephant_Valley.png') }}" alt="Elephant Valley" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/08_Wonder_Valley.png') }}" alt="Wonder Valley" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/09_DTPC_Palakkad.png') }}" alt="DTPC Palakkad" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/10_Happyland.png') }}" alt="Happyland" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/11_KITCO.png') }}" alt="KITCO" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/12_Jatayu_Tourism_Centre.png') }}" alt="Jatayu Tourism Centre" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/13_Dreamland_Fun_Adventure.png') }}" alt="Dreamland Fun Adventure" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/14_Udan_Khatola.png') }}" alt="Udan Khatola" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/15_DTPC.png') }}" alt="DTPC" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/16_Forum_Fiza.png') }}" alt="Forum Fiza" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/17_DTPC_Malappuram.png') }}" alt="DTPC Malappuram" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/18_Green_Valley_Water_Theme_Park.png') }}" alt="Green Valley Water Theme Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/19_Grand_Centre_Mall.png') }}" alt="Grand Centre Mall" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/20_Cochin_Childrens_Science_Park.png') }}" alt="Cochin Children's Science Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/21_Paramount_Technologies.png') }}" alt="Paramount Technologies" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/22_HiLITE_Mall.png') }}" alt="HiLITE Mall" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/23_Hydel_Tourism.png') }}" alt="Hydel Tourism" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img class="brochure-partner-logo" src="{{ asset('assets/img/partners/24_Brookefields.png') }}" alt="Brookefields" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/partners/snow-fantasy.png') }}" alt="Snow Fantasy" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/partners/red-kites-sports-academy.jpg') }}" alt="Red Kites Sports Academy" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/partners/fly-over-wonders.png') }}" alt="Fly Over Wonders" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/partners/active-planet-park.webp') }}" alt="Active Planet Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/partners/vythiri-park.png') }}" alt="Vythiri Park" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/partners/mall-of-qatar.jpg') }}" alt="Mall of Qatar" width="180" height="90" loading="eager" decoding="async"></div>
                        <div class="swiper-slide"><img src="{{ asset('assets/img/partners/cowboy-park.webp') }}" alt="Cowboy Park" width="180" height="90" loading="eager" decoding="async"></div>
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

    @include('partials.home-faq')

    <!-- Footer -->
    <footer class="footer-section">
        <div class="container">
            <div class="row footer-area">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget">
                        <a class="footer-logo" href="{{ url('/') }}"><img src="{{ asset("assets/img/nlogo.png") }}" alt="logo"></a>
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
                            <li><a href="{{ url('/about-company') }}">About Us</a></li>
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
                            <li><a href="mailto:sales@agelessind.com">sales@agelessind.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget">
                        <h3>Subscribe Newsletters</h3>
                        <form action="php/mailchimp-subscribe.php" id="ajax_mc_form" class="subscribe-form">
                            <div class="mc-fields">
                                <input id="mc_email" class="form-control" type="email" name="mc_email" placeholder="Your Email" required>
                                <button class="submit"><i class="las la-long-arrow-alt-right"></i></button>
                            </div>
                            <div class="clearfix"></div>
                            <div id="mc-form-messages" class="alert" role="alert"></div>
                        </form>
                        <p>Subscribe us and get all the benefits from today.</p>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                &copy; <span id="currentYear"></span> Ageless Entertainments All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Scroll Up -->
    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top"><i class="las la-arrow-up"></i></button>
    </div>

    <!-- Core Vendor Libs -->
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
    <script src="{{ asset('assets/js/main.js') }}?v={{ filemtime(public_path('assets/js/main.js')) }}"></script>

    <!-- Animation & Parallax CDNs: GSAP 3, ScrollTrigger & Lenis -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.29/bundled/lenis.min.js"></script>

    <!-- Parallax & Kinetic Animation Controller -->
    <script src="{{ asset("assets/js/parallax-engine.js") }}?v={{ filemtime(public_path('assets/js/parallax-engine.js')) }}"></script>

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
@include('partials.website-chat')
</body>
</html>
