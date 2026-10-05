<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ageless Entertainments">
    <meta name="author" content="Ageless Entertainments">

    <title>Ageless Entertainments </title>

    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ time() }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ time() }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/animate.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/keyframe-animation.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/line-awesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/construction-icons.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/odometer.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/nice-select.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/swiper.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/venobox.min.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/slider.css") }}">
    <link rel="stylesheet" href="{{ asset("assets/css/common-style.css") }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset("assets/css/main.css") }}">
    <!-- Full Animation & Parallax Engine Styles -->
    <link rel="stylesheet" href="{{ asset("assets/css/parallax-home.css") }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset("assets/css/responsive.css") }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home-faq.css') }}?v={{ filemtime(public_path('assets/css/home-faq.css')) }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home-responsive.css') }}?v={{ filemtime(public_path('assets/css/home-responsive.css')) }}">
    @include('partials.clean-navigation')
</head>

<body class="home-page">
    <!-- Site Preloader -->
    <div class="site-preloader">
        <div class="spinner"></div>
    </div>

    <!-- Header -->
    <header class="main-header wonder-nav-header">
        <div class="container">
            <div class="nav-capsule-wrapper">
                <div class="site-logo">
                    <a href="{{ url('/') }}"><img src="{{ asset("assets/img/nlogo.png") }}" alt="Ageless Logo"></a>
                </div>
                <div class="header-menu-wrap">
                    <ul class="nav-menu">
                        <li>
                            <a href="{{ url('/') }}">
                                <i class="las la-home nav-item-icon"></i>
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/about-company') }}">
                                <i class="las la-building nav-item-icon"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/projects') }}">
                                <i class="las la-layer-group nav-item-icon"></i>
                                <span>Projects</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/products') }}">
                                <i class="las la-cubes nav-item-icon"></i>
                                <span>Products</span>
                            </a>
                        </li>
                        <li class="dropdown_menu">
                            <a href="{{ route('blog.index') }}">
                                <i class="las la-newspaper nav-item-icon"></i>
                                <span>Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}">
                                <i class="las la-envelope nav-item-icon"></i>
                                <span>Contact</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nav-right-actions">
                    <a href="tel:+917025777755" class="nav-call-btn">
                        <span class="call-icon-wrap"><i class="las la-phone-volume"></i></span>
                        <span>Call Us</span>
                    </a>
                    <button type="button" class="mobile-menu-icon" aria-label="Open navigation" aria-expanded="false" aria-controls="mobile-navigation">
                        <div class="burger-menu">
                            <div class="line-menu line-half first-line"></div>
                            <div class="line-menu"></div>
                            <div class="line-menu line-half last-line"></div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </header>

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
        <video class="hero-bg-layer" autoplay muted loop playsinline preload="metadata" poster="{{ asset('hero-park.png') }}" aria-hidden="true">
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
                            <!-- Roller Coaster 1 (Featured Front) -->
                            <div class="stack-card stack-card-1 is-front" data-index="1">
                                <img class="img-fluid" src="{{ asset("assets/img/roller1.jpg") }}" alt="Roller Coaster Rides">
                                <span class="card-category-pill">Roller Coasters</span>
                                
                            </div>

                            <!-- Dome Cinema 1 -->
                            <div class="stack-card is-back" data-index="2">
                                <img class="img-fluid" src="{{ asset("assets/img/dome1.jpg") }}" alt="Dome Cinema 360">
                                <span class="card-category-pill">Dome Cinema</span>
                               
                            </div>

                            <!-- Flying Cinema 1 -->
                            <div class="stack-card is-hidden-stack" data-index="3">
                                <img class="img-fluid" src="{{ asset("assets/img/flying1.jpg") }}" alt="Flying Cinema Theatre">
                                <span class="card-category-pill">Flying Cinema</span>
                                
                            </div>

                            <!-- Rope Rider 1 -->
                            <div class="stack-card is-hidden-stack" data-index="4">
                                <img class="img-fluid" src="{{ asset("assets/img/IMG_1895.JPG") }}" alt="Rope Rider Glider">
                                <span class="card-category-pill">Rope Rider</span>
                                
                            </div>

                            <!-- Snow Park 1 -->
                            <div class="stack-card is-hidden-stack" data-index="5">
                                <img class="img-fluid" src="{{ asset("assets/img/snow1.jpg") }}" alt="Sub-Zero Snow Park">
                                <span class="card-category-pill">Snow Park</span>
                                
                            </div>

                            <!-- Toy & Kids Rides 1 -->
                            <div class="stack-card is-hidden-stack" data-index="6">
                                <img class="img-fluid" src="{{ asset("assets/img/toy1.jpg") }}" alt="Toy & Kids Family Rides">
                                <span class="card-category-pill">Toy &amp; Kids Rides</span>
                                
                            </div>

                            <!-- Park Design 1 -->
                            <div class="stack-card is-hidden-stack" data-index="7">
                                <img class="img-fluid" src="{{ asset("assets/img/parkdesign1.jpg") }}" alt="Turnkey Park Design">
                                <span class="card-category-pill">Park Design</span>
                                
                            </div>

                            <!-- 12D & 4D Cinema 1 -->
                            <div class="stack-card is-hidden-stack" data-index="8">
                                <img class="img-fluid" src="{{ asset("assets/img/12d4d1.jpg") }}" alt="12D / 4D Cinema">
                                <span class="card-category-pill">12D / 4D Cinema</span>
                                
                            </div>

                            <!-- Additional Roller Coaster 2 -->
                            <div class="stack-card is-hidden-stack" data-index="9">
                                <img class="img-fluid" src="{{ asset("assets/img/roller2.jpg") }}" alt="Thrill Roller Coaster">
                                <span class="card-category-pill">Roller Coasters</span>
                                
                            </div>

                            <!-- Additional Dome Cinema 2 -->
                            <div class="stack-card is-hidden-stack" data-index="10">
                                <img class="img-fluid" src="{{ asset("assets/img/1920x1080.jpg") }}" alt="Geodesic Dome Cinema">
                                <span class="card-category-pill">Dome Cinema</span>
                                
                            </div>

                            <!-- Additional Flying Cinema 2 -->
                            <div class="stack-card is-hidden-stack" data-index="11">
                                <img class="img-fluid" src="{{ asset("assets/img/flying2.jpg") }}" alt="Flight Simulator">
                                <span class="card-category-pill">Flying Cinema</span>
                                
                            </div>

                            <!-- Additional Rope Rider 2 -->
                            <div class="stack-card is-hidden-stack" data-index="12">
                                <img class="img-fluid" src="{{ asset("assets/img/rope2.jpg") }}" alt="Aerial Cable Glider">
                                <span class="card-category-pill">Rope Rider</span>
                               
                            </div>

                            <!-- Additional Snow Park 2 -->
                            <div class="stack-card is-hidden-stack" data-index="13">
                                <img class="img-fluid" src="{{ asset("assets/img/snow2.jpg") }}" alt="Snow Adventure Arena">
                                <span class="card-category-pill">Snow Park</span>
                          
                            </div>

                            <!-- Additional Toy 2 -->
                            <div class="stack-card is-hidden-stack" data-index="14">
                                <img class="img-fluid" src="{{ asset("assets/img/toy2.jpg") }}" alt="Interactive Kids EV Cars">
                                <span class="card-category-pill">Toy &amp; Kids Rides</span>
                                
                            </div>

                            <!-- Additional Park Design 2 -->
                            <div class="stack-card is-hidden-stack" data-index="15">
                                <img class="img-fluid" src="{{ asset("assets/img/parkdesign2.jpg") }}" alt="Theme Park Master Plan">
                                <span class="card-category-pill">Park Design</span>
                               
                            </div>

                            <!-- Additional 12D Cinema 2 -->
                            <div class="stack-card is-hidden-stack" data-index="16">
                                <img class="img-fluid" src="{{ asset("assets/img/12d4d2.jpg") }}" alt="4D Multi-Sensory Cinema">
                                <span class="card-category-pill">12D / 4D Cinema</span>
                               
                            </div>
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
                            <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=351,fit=crop/AGBM0Vqo2Ripq5Zk/393083348_1179677340102907_7185821607908418361_n-removebg-preview-Yan1N0zwyWcZ74pv.png" alt="IAAPI Member">
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
                            <img src="{{ asset("assets/img/amu.png") }}" alt="Amusement Park Rides">
                        </div>
                        <div class="service-content">
                            <h3>Amusement Park Rides</h3>
                            <p>Safe, vibrant, and thrilling family coasters and rides that bring pure joy to every corner of your park.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item-3d tilt-card wow fade-in-bottom" data-wow-delay="200ms">
                        <div class="service-thumb">
                            <img src="{{ asset("assets/img/traffic.png") }}" alt="Traffic Park Vehicles">
                        </div>
                        <div class="service-content">
                            <h3>Traffic Park Vehicles</h3>
                            <p>Interactive electric vehicles designed for kids and families to learn and enjoy safe, authentic driving fun.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item-3d tilt-card wow fade-in-bottom" data-wow-delay="300ms">
                        <div class="service-thumb">
                            <img src="{{ asset("assets/img/water.png") }}" alt="Water Park Attractions">
                        </div>
                        <div class="service-content">
                            <h3>Water Park Attractions</h3>
                            <p>From dynamic splash pads to wave pools and lazy rivers, we build refreshing aquatic adventures for all ages.</p>
                        </div>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="col-lg-3 col-md-6">
                    <div class="service-item-3d tilt-card wow fade-in-bottom" data-wow-delay="400ms">
                        <div class="service-thumb">
                            <img src="{{ asset("assets/img/adventure.png") }}" alt="Sky and Adventure Rides">
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
                    <h4 style="color: #f5a100 !important;">Ready to build your signature amusement park?</h4>
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
                            <img src="{{ asset("assets/img/video-poster.png") }}" alt="Ageless Entertainments Logo" class="ageless-poster-img">
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
                    <ul class="skill-wrap mb-40 wow fade-in-bottom" data-wow-delay="300ms">
                        <li class="skill-item">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mb-0">Factory Manufacture &amp; Ride Engineering</h4>
                                <strong>85%</strong>
                            </div>
                            <div class="progress-box">
                                <div class="progress-bar-glow" data-count="85%" style="width: 85%;"></div>
                            </div>
                        </li>
                        <li class="skill-item mt-3">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mb-0">Turnkey Construction &amp; Safety Compliance</h4>
                                <strong>75%</strong>
                            </div>
                            <div class="progress-box">
                                <div class="progress-bar-glow" data-count="75%" style="width: 75%;"></div>
                            </div>
                        </li>
                        <li class="skill-item mt-3">
                            <div class="d-flex justify-content-between mb-2">
                                <h4 class="mb-0">Architecture Planning &amp; Immersive Theming</h4>
                                <strong>95%</strong>
                            </div>
                            <div class="progress-box">
                                <div class="progress-bar-glow" data-count="95%" style="width: 95%;"></div>
                            </div>
                        </li>
                    </ul>
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
                <button type="button" class="project-filter-btn" data-filter="snow">Snow Park <span class="filter-count">6</span></button>
                <button type="button" class="project-filter-btn" data-filter="rope">Rope Rider <span class="filter-count">8</span></button>
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
                                        <img src="{{ asset("assets/img/toy1.jpg") }}" alt="Electric Trackless Family Train">
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
                                        <img src="{{ asset("assets/img/toy2.jpg") }}" alt="Interactive Kids Safari EV Cars">
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
                                        <img src="{{ asset("assets/img/toy3.jpg") }}" alt="Classic Carousel &amp; Theme Ride">
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
                                        <img src="{{ asset("assets/img/toy4.jpg") }}" alt="Battery Bumper Cars Arena">
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
                                        <img src="{{ asset("assets/img/toy5.jpg") }}" alt="Junior Electric Go-Kart Vehicles">
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
                                        <img src="{{ asset("assets/img/toy6.jpg") }}" alt="Custom Themed Amusement Toy Rides">
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
                                        <img src="{{ asset("assets/img/toy7.jpg") }}" alt="Turnkey Children's Funzone Rides">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Kids &amp; Family Rides</span>
                                    <h3><a href="{{ url('/products') }}">Turnkey Children's Funzone Rides</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- ================= SNOW PARK (1 to 6) ================= -->
                        <!-- Snow 1 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow1.jpg") }}" data-gall="projects" title="Sub-Zero Indoor Snow World">
                                        <img src="{{ asset("assets/img/snow1.jpg") }}" alt="Sub-Zero Indoor Snow World">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Park Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Sub-Zero Indoor Snow World</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 2 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow2.jpg") }}" data-gall="projects" title="Real Snowfall Adventure Arena">
                                        <img src="{{ asset("assets/img/snow2.jpg") }}" alt="Real Snowfall Adventure Arena">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Park Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Real Snowfall Adventure Arena</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 3 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow3.jpg") }}" data-gall="projects" title="Alpine Sledging &amp; Ice Slides">
                                        <img src="{{ asset("assets/img/snow3.jpg") }}" alt="Alpine Sledging &amp; Ice Slides">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Park Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Alpine Sledging &amp; Ice Slides</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 4 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow4.jpg") }}" data-gall="projects" title="Cryogenic Snow Play Zone">
                                        <img src="{{ asset("assets/img/snow4.jpg") }}" alt="Cryogenic Snow Play Zone">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Park Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Cryogenic Snow Play Zone</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 5 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow5.jpg") }}" data-gall="projects" title="Winter Wonderland Family Park">
                                        <img src="{{ asset("assets/img/snow5.jpg") }}" alt="Winter Wonderland Family Park">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Park Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Winter Wonderland Family Park</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- Snow 6 -->
                        <div class="swiper-slide" data-category="snow">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/snow6.jpg") }}" data-gall="projects" title="Turnkey Snow Park Architecture">
                                        <img src="{{ asset("assets/img/snow6.jpg") }}" alt="Turnkey Snow Park Architecture">
                                    </a>
                                </div>
                                <div class="project-glass-info">
                                    <span class="category">Snow Park Attractions</span>
                                    <h3><a href="{{ url('/projects') }}">Turnkey Snow Park Architecture</a></h3>
                                </div>
                            </div>
                        </div>

                        <!-- ================= ROPE RIDER (1 to 8) ================= -->
                        <!-- Rope 1 -->
                        <div class="swiper-slide" data-category="rope">
                            <div class="project-card-3d tilt-card">
                                <div class="project-thumb">
                                    <a class="venobox" href="{{ asset("assets/img/IMG_1895.JPG") }}" data-gall="projects" title="Misty Land Aerial Rope Glider">
                                        <img src="{{ asset("assets/img/IMG_1895.JPG") }}" alt="Misty Land Aerial Rope Glider">
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
                                        <img src="{{ asset("assets/img/rope2.jpg") }}" alt="Suspended Gravity Cable Glider">
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
                                        <img src="{{ asset("assets/img/rope3.jpg") }}" alt="High-Altitude Aerial Circuit">
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
                                        <img src="{{ asset("assets/img/rope4.jpg") }}" alt="Extreme Treetop Adventure Glider">
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
                                        <img src="{{ asset("assets/img/rope5.jpg") }}" alt="Multi-Track Aerial Rope Ride">
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
                                        <img src="{{ asset("assets/img/Munnar%20Net%20park.png") }}" alt="Munnar Net Park">
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
                                        <img src="{{ asset("assets/img/Kanyakumari%20activities.png") }}" alt="Kanyakumari Net Park Activities">
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
                                        <img src="{{ asset("assets/img/Zipline10.jpg") }}" alt="Tandem Zipline Adventure">
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
                                        <img src="{{ asset("assets/img/roller1.jpg") }}" alt="High-Speed Family Coaster">
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
                                        <img src="{{ asset("assets/img/roller2.jpg") }}" alt="Thrill Spiraling Steel Coaster">
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
                                        <img src="{{ asset("assets/img/roller3.jpg") }}" alt="Custom Terrain Amusement Coaster">
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
                                        <img src="{{ asset("assets/img/roller4.jpg") }}" alt="High-Altitude Loop Coaster">
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
                                        <img src="{{ asset("assets/img/roller5.jpg") }}" alt="Wild Kinetic Family Track Coaster">
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
                                        <img src="{{ asset("assets/img/roller6.jpg") }}" alt="Turnkey Theme Park Roller Coaster">
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
                                        <img src="{{ asset("assets/img/parkdesign1.jpg") }}" alt="Turnkey Master Planning &amp; Theming">
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
                                        <img src="{{ asset("assets/img/parkdesign2.jpg") }}" alt="3D Thematic Architectural Layout">
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
                                        <img src="{{ asset("assets/img/parkdesign3.jpg") }}" alt="Integrated Amusement Park Design">
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
                                        <img src="{{ asset("assets/img/parkdesign4.jpg") }}" alt="Adventure &amp; Water World Blueprint">
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
                                        <img src="{{ asset("assets/img/parkdesign5.jpg") }}" alt="Futuristic Entertainment Zone Layout">
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
                                        <img src="{{ asset("assets/img/parkdesign6.jpg") }}" alt="Comprehensive Resort Master Blueprint">
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
                                        <img src="{{ asset("assets/img/parkdesign7.jpg") }}" alt="Themed Landscape &amp; Attraction Architecture">
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
                                        <img src="{{ asset("assets/img/parkdesign8.jpg") }}" alt="Custom Attraction Engineering &amp; Design">
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
                                        <img src="{{ asset("assets/img/flying1.jpg") }}" alt="Mall of Qatar Flying Theatre">
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
                                        <img src="{{ asset("assets/img/flying2.jpg") }}" alt="Suspended Motion Flying Simulator">
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
                                        <img src="{{ asset("assets/img/flying3.jpg") }}" alt="Panoramic Sky Flight Adventure">
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
                                        <img src="{{ asset("assets/img/flying4.jpg") }}" alt="Multi-DOF Kinetic Flight System">
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
                                        <img src="{{ asset("assets/img/flying5.jpg") }}" alt="Immersive Flying Ride Experience">
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
                                        <img src="{{ asset("assets/img/flying6.jpg") }}" alt="Virtual Horizon Flight Theatre">
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
                                        <img src="{{ asset("assets/img/flying7.jpg") }}" alt="Next-Gen Aerial Soaring Simulator">
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
                                        <img src="{{ asset("assets/img/dome1.jpg") }}" alt="Munnar Botanical Garden 360° Dome">
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
                                        <img src="{{ asset("assets/img/1920x1080.jpg") }}" alt="Panoramic Fulldome Immersion Theatre">
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
                                        <img src="{{ asset("assets/img/WhatsApp%20Image%202026-03-27%20at%206.45.07%20PM.jpeg") }}" alt="Geodesic Dome Installation">
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
                                        <img src="{{ asset("assets/img/WhatsApp%20Image%202026-06-09%20at%204.00.17%20PM%20(1).jpeg") }}" alt="High-Resolution 360° Visual Dome">
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
                                        <img src="{{ asset("assets/img/WhatsApp%20Image%202026-07-01%20at%2012.33.06%20PM%20(1).jpeg") }}" alt="Immersive Cinema Dome Installation">
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
                                        <img src="{{ asset("assets/img/WhatsApp%20Image%202026-07-10%20at%209.15.36%20AM.jpeg") }}" alt="Turnkey Immersive Projection Dome">
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
                                        <img src="{{ asset("assets/img/12d4d1.jpg") }}" alt="12D Dynamic Motion Cinema Theatre">
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
                                        <img src="{{ asset("assets/img/12d4d2.jpg") }}" alt="Multi-Sensory 4D FX Special Effects">
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
                                        <img src="{{ asset("assets/img/12d4d3.jpg") }}" alt="Hydraulic Motion Platform Simulator">
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
                                        <img src="{{ asset("assets/img/12d4d4.jpg") }}" alt="Interactive Immersive VR &amp; 12D Theatre">
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
                                        <img src="{{ asset("assets/img/12d4d5.jpg") }}" alt="Turnkey 12D / 4D Cinema Installation">
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
                        <div class="swiper-slide"><img src="https://www.snowfantasy.in/themes/public/img/logo.png" alt="Snow Fantasy" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=220,fit=crop,q=95/m7V5zpaQzrip7On8/iridoogo-YyvZZXxQLEfOwo0l.png" alt="Partner logo 2" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/0d/a1/xmBZL8kX_t.jpg" alt="Partner logo 3" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/ba/26/ysxjzDGR_t.jpg" alt="Partner logo 4" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://f005.backblazeb2.com/file/bmpcdn90/academy/316/316redkitessportsacademy.jpeg" alt="Red Kites Sports Academy" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://i.ibb.co/d4FjYcCN/fly-over-wonders-logo.png" alt="Fly Over Wonders" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://i.ibb.co/70qHWxp/active-planet-park-1-1687596827.webp" alt="Active Planet Park" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/d3/40/gZtcGsgZ_t.jpg" alt="Partner logo 8" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/bb/48/fpG6Ffag_t.jpg" alt="Partner logo 9" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/27/f3/jkOPNWeT_t.jpg" alt="Partner logo 10" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://vythiripark.com/static/web/images/logo.png" alt="Vythiri Park" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/70/62/HilmD9VF_t.jpg" alt="Partner logo 12" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJVhnT9XoxaYkRH0XyHgD4DEnB-chTcVD_cA&amp;s" alt="Partner logo 13" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://storage.googleapis.com/moq-bucket-moq-skwid/Mall_Of_Qatar_Logo_626px_5839461237/Mall_Of_Qatar_Logo_626px_5839461237.jpg" alt="Mall of Qatar" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://i.ibb.co/8gcbjTXy/472154867-27961923506788217-2541636831095699378-n.jpg" alt="Partner logo 15" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://cowboypark.in/wp-content/uploads/2024/10/coboy-logo.webp" alt="Cowboy Park" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/22/be/v6aaVc7C_t.jpg" alt="Partner logo 17" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/e9/8d/6TG3hqtl_t.jpg" alt="Partner logo 18" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/29/16/X61Ffvno_t.jpg" alt="Partner logo 19" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/00/f7/3LND0bsn_t.jpg" alt="Partner logo 20" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/92/ec/2WL5lgDX_t.jpg" alt="Partner logo 21" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/a8/70/fkZ2eQ0k_t.jpg" alt="Partner logo 22" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://thumbs2.imgbox.com/9d/2d/QlA7WYiG_t.jpg" alt="Partner logo 23" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS8FcVuJ-yqRHHGLhPXyJhEuSTBgY2pqLZ65Q&amp;s" alt="Partner logo 24" width="180" height="90" loading="lazy" decoding="async"></div>
                        <div class="swiper-slide"><img src="https://www.keralatourism.org/ktadmin/images/Portfolios/dtpc.png" alt="DTPC" width="180" height="90" loading="lazy" decoding="async"></div>
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
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
        </a>
    </div>

    <style>
    .floating-buttons {
        position: fixed;
        bottom: 170px;
        right: 25px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        z-index: 1000;
    }
    .floating-buttons a {
        position: relative;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }
    .floating-buttons a:hover {
        transform: scale(1.12);
    }
    .whatsapp img {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.5);
    }
    @media (max-width: 767px) {
        .floating-buttons {
            bottom: 160px;
            right: 16px;
            gap: 10px;
        }
        .whatsapp img {
            width: 44px;
            height: 44px;
        }
    }
    </style>

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
    <script src="{{ asset("assets/js/parallax-engine.js") }}?v={{ time() }}"></script>

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
