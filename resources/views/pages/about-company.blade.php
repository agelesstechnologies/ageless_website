<!doctype html>
<html lang="en" class="no-js @include('partials.tailwind.poppins-font')
@include('partials.tailwind.aos')
@include('partials.tailwind.pages-about-company-1')
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
@include('partials.tailwind.about-page')
@include('partials.tailwind.kite-cursor')
@include('partials.tailwind.responsive')
@include('partials.tailwind.about-responsive')
@include('partials.tailwind.partials-clean-navigation-1')
@include('partials.tailwind.website-chat')
@stack('tailwind_styles')">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- 1. SEO & Head Metadata -->
    <title>About Ageless | Amusement Park Builders in India</title>
    <meta name="description" content="Since 2011, Ageless Entertainments has designed, manufactured, and built world-class amusement rides, adventure parks, and indoor entertainment centres across India and abroad.">
    <meta name="keywords" content="amusement park company India, amusement park builder in India, theme park builder India, amusement ride manufacturer, adventure park manufacturer">
    <meta name="author" content="Ageless Entertainments">
    <link rel="canonical" href="{{ url('/about-company') }}">

    <!-- Open Graph / Social Meta Tags -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/about-company') }}">
    <meta property="og:title" content="About Ageless | Amusement Park Builders in India">
    <meta property="og:description" content="Since 2011, Ageless Entertainments has designed, manufactured, and built world-class amusement rides, adventure parks, and indoor entertainment centres across India and abroad.">
    <meta property="og:image" content="{{ asset('hero-park.png') }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="About Ageless | Amusement Park Builders in India">
    <meta name="twitter:description" content="Since 2011, Ageless Entertainments has designed, manufactured, and built world-class amusement rides, adventure parks, and indoor entertainment centres across India and abroad.">
    <meta name="twitter:image" content="{{ asset('hero-park.png') }}">

    <!-- Favicon & Google Fonts -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ filemtime(public_path('assets/img/favicon.png')) }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}?v={{ filemtime(public_path('assets/img/favicon.png')) }}">
    

    <!-- Stylesheets -->

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "EntertainmentBusiness",
      "name": "Ageless Entertainments",
      "alternateName": "Ageless India",
      "url": "{{ url('/') }}",
      "logo": "{{ asset('assets/img/nlogo.png') }}",
      "description": "Turnkey amusement park builder, ride manufacturer, and experiential entertainment specialist delivering landmark attractions across India and internationally.",
      "foundingDate": "2011",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "A.M.A Arcade, Vallathol Junction, 4/1585, Seaport - Airport Rd, P.O, Thrikkakara, Front",
        "addressLocality": "Kochi, Kakkanad",
        "addressRegion": "Kerala",
        "postalCode": "682021",
        "addressCountry": "IN"
      },
      "telephone": "+91-7025-777-755",
      "email": "sales@agelessind.com"
    }
    </script>
    @include('partials.clean-navigation')
    
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}?v={{ filemtime(public_path('assets/css/tailwind.css')) }}">
</head>

<body class="about-page">
    <!-- Preloader -->
    <div class="site-preloader">
        <div class="spinner"></div>
    </div>

    <!-- Main Navigation Header (Wonderla-Style Capsule Navbar) -->
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
         2. HERO SECTION
         ============================================== -->
    <section class="about-hero-wrapper">
        <video class="about-hero-video" autoplay muted loop playsinline preload="auto" aria-hidden="true">
            <source src="{{ asset('assets/videos/about-hero.mp4') }}" type="video/mp4">
        </video>
        <div class="about-hero-overlay"></div>
        <div class="about-hero-mesh"></div>
        <div class="about-hero-mesh-left"></div>

        <div class="container about-hero-container">
            <div class="row align-items-center">
                <div class="col-lg-11 col-xl-10">
                    <!-- Eyebrow / Badge -->
                    <div class="about-hero-badge" data-aos="fade-right">
                        <span class="badge-pulse-dot"></span>
                        <span>Welcome to Ageless Entertainments • Since 2011</span>
                    </div>

                    <!-- Primary Heading (H1) -->
                    <h1 class="about-hero-title" data-aos="fade-right" data-aos-delay="100">
                        About <span class="highlight-orange">Ageless Entertainments</span>
                    </h1>

                    <!-- Subheading (H2) -->
                    <h2 class="about-hero-subheading" data-aos="fade-right" data-aos-delay="200">
                        Building Exciting Amusement &amp; Adventure Parks That Inspire Wonder and Joy
                    </h2>

                    <!-- Introduction Paragraph -->
                    <p class="about-hero-intro" data-aos="fade-right" data-aos-delay="300">
                        Ageless Entertainments is a turnkey amusement park builder, ride manufacturer, and experiential entertainment specialist headquartered in Kochi, Kerala, delivering landmark attractions across India and international markets. Since our inception in 2011, we have combined engineering precision, creative storytelling, and international safety standards to turn open land into vibrant, revenue-generating destinations.
                    </p>

                    <!-- CTA Action Buttons -->
                    <div class="about-hero-actions" data-aos="fade-right" data-aos-delay="400">
                        <a href="{{ url('/projects') }}" class="btn-glow-primary">
                            <span>Explore Our Projects</span>
                            <i class="las la-arrow-right"></i>
                        </a>
                        <a href="{{ url('/contact') }}" class="btn-glass-secondary">
                            <i class="las la-phone-volume"></i>
                            <span>Get in Touch</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Key Stats Callout (Visual Counter Strip) -->
            <div class="about-stats-strip">
                <div class="row g-3 g-lg-4">
                    <!-- Stat 1 -->
                    <div class="col-sm-6 col-lg-3" data-aos="zoom-out" data-aos-delay="0">
                        <div class="stats-grid-card">
                            <div class="stats-icon-wrap">
                                <i class="las la-award"></i>
                            </div>
                            <div class="stats-text-content">
                                <div class="stats-number">10<span class="accent-plus">+</span></div>
                                <p class="stats-label">Years of Industry Experience <br><span class="![color:#f5a100] ![font-size:0.8rem] !tw-font-semibold">(Est. 2011)</span></p>
                            </div>
                        </div>
                    </div>

                    <!-- Stat 2 -->
                    <div class="col-sm-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
                        <div class="stats-grid-card">
                            <div class="stats-icon-wrap">
                                <i class="las la-cubes"></i>
                            </div>
                            <div class="stats-text-content">
                                <div class="stats-number">100<span class="accent-plus">+</span></div>
                                <p class="stats-label">Rides &amp; Attractions Installed</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stat 3 -->
                    <div class="col-sm-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
                        <div class="stats-grid-card">
                            <div class="stats-icon-wrap">
                                <i class="las la-globe-asia"></i>
                            </div>
                            <div class="stats-text-content">
                                <div class="stats-number ![font-size:1.6rem] ![margin-top:4px]">PAN-INDIA<span class="accent-plus">& GLOBAL</span></div>
                                <p class="stats-label">Project Footprint</p>
                            </div>
                        </div>
                    </div>

                    <!-- Stat 4 -->
                    <div class="col-sm-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
                        <div class="stats-grid-card">
                            <div class="stats-icon-wrap">
                                <i class="las la-shield-alt"></i>
                            </div>
                            <div class="stats-text-content stats-safety-content">
                                <div class="stats-number stats-number-safety">ZERO<span class="accent-plus">COMPROMISE</span></div>
                                <p class="stats-label">Safety &amp; Compliance Record</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         3. WHO WE ARE (BRAND STORY)
         ============================================== -->
    <section class="about-story-section">
        <div class="container">
            <div class="row align-items-center gy-5">
                <!-- Left Column: Story Content -->
                <div class="col-lg-7">
                    <div class="section-pill-tag">
                        <i class="las la-compass"></i> Who We Are
                    </div>
                    
                    <h2 class="about-story-heading" data-aos="fade-right">
                        Play Beyond Imagination: <br><span class="gradient-word">From Blueprint to Grand Opening</span>
                    </h2>

                    <p class="story-lead-para" data-aos="fade-right" data-aos-delay="100">
                        Great entertainment spaces don’t happen by accident—they are engineered through imagination, structural rigor, and a deep understanding of crowd dynamics.
                    </p>

                    <p class="story-body-para" data-aos="fade-right" data-aos-delay="200">
                        Over the past decade, Ageless Entertainments has grown from an ambitious ride manufacturer into India's premier full-service entertainment infrastructure partner. We serve theme park operators, resort developers, municipal tourism boards, and shopping centre entertainment zones. Whether creating high-octane roller coasters, multi-tier aerial adventure courses, or next-generation immersive dome cinemas, we manage the entire lifecycle: concept master planning, custom fabrication, civil integration, testing, and lifecycle maintenance.
                    </p>

                    <!-- Highlights Checklist -->
                    <div class="story-features-list" data-aos="fade-right" data-aos-delay="300">
                        <div class="story-feature-item">
                            <i class="las la-check-circle"></i>
                            <span>Concept Master Planning</span>
                        </div>
                        <div class="story-feature-item">
                            <i class="las la-check-circle"></i>
                            <span>Custom In-House Fabrication</span>
                        </div>
                        <div class="story-feature-item">
                            <i class="las la-check-circle"></i>
                            <span>Civil &amp; Electrical Integration</span>
                        </div>
                        <div class="story-feature-item">
                            <i class="las la-check-circle"></i>
                            <span>Lifecycle Maintenance &amp; Care</span>
                        </div>
                    </div>

                    <!-- IAAPI Association Member Badge -->
                    <div class="iaapi-member-pill">
                        <img src="https://assets.zyrosite.com/cdn-cgi/image/format=auto,w=375,h=351,fit=crop/AGBM0Vqo2Ripq5Zk/393083348_1179677340102907_7185821607908418361_n-removebg-preview-Yan1N0zwyWcZ74pv.png" alt="IAAPI Member">
                        <div>
                            <div class="member-title">Proud Member of IAAPI Since 2015</div>
                            <div class="member-subtitle">Indian Association of Amusement Parks &amp; Industries</div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Visual Media Showcase -->
                <div class="col-lg-5">
                    <div class="story-media-showcase park-media-showcase" data-aos="fade-up-left">
                        <div class="story-main-img-card">
                            <img src="{{ asset('park.png') }}" alt="Ageless Amusement Park Engineering">
                        </div>
                        <div class="story-floating-badge">
                            <div class="floating-badge-icon">
                                <i class="las la-cogs"></i>
                            </div>
                            <div class="floating-badge-text">
                                <h4>Turnkey Engineering</h4>
                                <p>End-to-End Park Solutions</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         4. VISION & MISSION
         ============================================== -->
    <section class="about-vision-section">
        <div class="container position-relative ![z-index:2]">
            <div class="text-center mb-50" data-aos="fade-up">
                <div class="section-pill-tag ![background:rgba(11,_23,_39,_0.08)] ![color:#0b1727] ![border-color:rgba(11,_23,_39,_0.25)]">
                    <i class="las la-bullseye"></i> Our North Star
                </div>
                <h2 class="![font-family:'Poppins',_sans-serif] ![font-size:clamp(2rem,_3.5vw,_2.8rem)] !tw-uppercase ![color:#0b1727] ![margin-top:10px]">
                    Driven by Purpose, <span class="![color:#0b1727]">Guided by Excellence</span>
                </h2>
            </div>

            <div class="row g-4 align-items-stretch">
                <!-- Vision Card -->
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="vision-card">
                        <div class="vision-card-header">
                            <div class="vision-card-icon">
                                <i class="las la-eye"></i>
                            </div>
                            <h3 class="vision-card-title">Our <span>Vision</span></h3>
                        </div>
                        <div class="vision-card-body">
                            <p class="![font-size:1.05rem] ![line-height:1.85] ![color:#475569]">
                                To be the benchmark amusement park and experiential attraction builder in India and beyond, setting new standards for guest thrills, family safety, and operational longevity.
                            </p>
                            <div class="![margin-top:24px] ![padding-top:20px] ![border-top:1px_solid_#e2e8f0] !tw-flex !tw-items-center ![gap:12px] ![color:#64748b] ![font-size:0.88rem]">
                                <i class="las la-star ![color:#f5a100] ![font-size:1.2rem]"></i>
                                <span>Setting global standards in amusement innovation</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mission Card -->
                <div class="col-lg-7" data-aos="fade-left">
                    <div class="vision-card">
                        <div class="vision-card-header">
                            <div class="vision-card-icon ![background:linear-gradient(135deg,_rgba(0,_210,_255,_0.25),_rgba(0,_210,_255,_0.05))] ![border-color:rgba(0,_210,_255,_0.4)] ![color:#00d2ff]">
                                <i class="las la-rocket"></i>
                            </div>
                            <h3 class="vision-card-title">Our <span class="![color:#00d2ff]">Mission</span></h3>
                        </div>
                        <div class="vision-card-body">
                            <ul class="mission-points-list">
                                <li class="mission-point-item">
                                    <div class="mission-check-icon"><i class="las la-check"></i></div>
                                    <div>
                                        <strong class="![color:#0b1727] !tw-block ![margin-bottom:2px]">Tailored Engineering for Indian Conditions</strong>
                                        To engineer world-class rides and entertainment concepts tailored to Indian climate conditions, budgets, and operational demands.
                                    </div>
                                </li>
                                <li class="mission-point-item">
                                    <div class="mission-check-icon"><i class="las la-check"></i></div>
                                    <div>
                                        <strong class="![color:#0b1727] !tw-block ![margin-bottom:2px]">End-to-End Reliability &amp; High ROI</strong>
                                        To deliver end-to-end reliability for park owners—maximizing footfalls, dwell time, and return on investment.
                                    </div>
                                </li>
                                <li class="mission-point-item">
                                    <div class="mission-check-icon"><i class="las la-check"></i></div>
                                    <div>
                                        <strong class="![color:#0b1727] !tw-block ![margin-bottom:2px]">Rigorous International Safety Protocols</strong>
                                        To uphold rigorous international safety protocols so that every ride delivers pure, worry-free joy.
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         5. WHAT WE BUILD & DELIVER (CORE CAPABILITIES)
         ============================================== -->
    <section class="about-capabilities-section">
        <div class="container">
            <div class="text-center mb-50" data-aos="fade-up">
                <div class="section-pill-tag">
                    <i class="las la-layer-group"></i> What We Build &amp; Deliver
                </div>
                <h2 class="about-story-heading ![margin-bottom:12px]">
                    Comprehensive Park Solutions <br><span class="gradient-word">Across Every Entertainment Category</span>
                </h2>
                <p class="![font-family:'Poppins',_sans-serif] ![font-size:1.05rem] ![color:#0b1727] ![max-width:750px] ![margin:0_auto]">
                    We design, manufacture, and commission attraction ecosystems built for high capacity and maximum replay value.
                </p>
            </div>

            <div class="row g-4">
                <!-- 1. Outdoor Amusement & Theme Parks -->
                <div class="col-lg-6 col-xl-3" data-aos="zoom-in-up" data-aos-delay="0">
                    <div class="capability-card">
                        <div class="capability-thumb-wrap">
                            <img src="{{ asset('assets/img/roller1.jpg') }}" alt="Outdoor Amusement and Theme Parks">
                            <span class="capability-category-badge">Amusement Parks</span>
                            <div class="capability-number-badge">01</div>
                        </div>
                        <div class="capability-content">
                            <h3 class="capability-title">Outdoor Amusement &amp; Theme Parks</h3>
                            <ul class="capability-items-list">
                                <li>High-thrill and family roller coasters (such as our 120° Thrillium Coaster)</li>
                                <li>Iconic skyline attractions: Swing Towers (Ranger Rider), Giant Ferris Wheels, Drop Towers</li>
                                <li>Classic family staples: Flying Thumper Bumper Cars, Turbo Train track rides, carousel attractions</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2. Adventure & Aerial Parks -->
                <div class="col-lg-6 col-xl-3" data-aos="zoom-in-up" data-aos-delay="100">
                    <div class="capability-card">
                        <div class="capability-thumb-wrap">
                            <img src="{{ asset('assets/img/rope1.jpg') }}" alt="Adventure and Aerial Parks">
                            <span class="capability-category-badge">Adventure Parks</span>
                            <div class="capability-number-badge">02</div>
                        </div>
                        <div class="capability-content">
                            <h3 class="capability-title">Adventure &amp; Aerial Parks</h3>
                            <ul class="capability-items-list">
                                <li>Commercial zipline installations and canopy tours across natural and artificial terrain</li>
                                <li>Multi-level high and low rope challenge courses</li>
                                <li>Continuous-belay net parks, climbing towers, and obstacle courses</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 3. Immersive Cinema & Next-Gen Edutainment -->
                <div class="col-lg-6 col-xl-3" data-aos="zoom-in-up" data-aos-delay="200">
                    <div class="capability-card">
                        <div class="capability-thumb-wrap">
                            <img src="{{ asset('assets/img/12d4d1.jpg') }}" alt="Immersive Cinema and Next-Gen Edutainment">
                            <span class="capability-category-badge">Immersive Tech</span>
                            <div class="capability-number-badge">03</div>
                        </div>
                        <div class="capability-content">
                            <h3 class="capability-title">Immersive Cinema &amp; Next-Gen Edutainment</h3>
                            <ul class="capability-items-list">
                                <li>12D multi-sensory motion theatres with synchronized environmental effects</li>
                                <li>360° Cinema Domes and planetarium projection installations</li>
                                <li>Flying theatre motion platforms and interactive VR simulation zones</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 4. Indoor FECs & Edutainment Centers -->
                <div class="col-lg-6 col-xl-3" data-aos="zoom-in-up" data-aos-delay="300">
                    <div class="capability-card">
                        <div class="capability-thumb-wrap">
                            <img src="{{ asset('assets/img/traffic.png') }}" alt="Indoor FECs and Edutainment Centers">
                            <span class="capability-category-badge">Indoor FECs</span>
                            <div class="capability-number-badge">04</div>
                        </div>
                        <div class="capability-content">
                            <h3 class="capability-title">Indoor FECs &amp; Edutainment Centers</h3>
                            <ul class="capability-items-list">
                                <li>Turnkey indoor amusement zones and family entertainment centers (FECs)</li>
                                <li>Interactive Children’s Traffic Parks (blending safety education with active play)</li>
                                <li>Indoor snow parks, modular trampoline arenas, and modern arcade game zones</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         6. THE AGELESS ADVANTAGE (WHY CHOOSE US)
         ============================================== -->
    <section class="about-advantage-section">
        <div class="container position-relative ![z-index:2]">
            <div class="text-center mb-50" data-aos="fade-up">
                <div class="section-pill-tag ![background:#0b1727] ![color:#ffffff] ![border-color:#0b1727]">
                    <i class="las la-award"></i> The Ageless Advantage
                </div>
                <h2 class="![font-family:'Poppins',_sans-serif] ![font-size:clamp(2rem,_3.8vw,_3rem)] !tw-uppercase ![color:#0b1727] ![margin-top:10px]">
                    Why Park Developers Choose <span class="![color:#0b1727]">Ageless Entertainments</span>
                </h2>
                <p class="![font-family:'Poppins',_sans-serif] ![font-size:1rem] ![color:#0b1727] ![max-width:720px] ![margin:0_auto]">
                    We bring decades of combined engineering ingenuity, commercial acumen, and relentless safety dedication to every square foot.
                </p>
            </div>

            <div class="row g-4">
                <!-- Pillar 1 -->
                <div class="col-md-6 col-lg-3" data-aos="zoom-out-up" data-aos-delay="0">
                    <div class="advantage-card">
                        <div class="advantage-icon-box">
                            <i class="las la-drafting-compass"></i>
                        </div>
                        <h3 class="advantage-title">True Turnkey Capability</h3>
                        <p class="advantage-desc">
                            From greenfield site assessment and 3D master planning to fabrication, foundation engineering, and operator training, we handle everything under one roof.
                        </p>
                    </div>
                </div>

                <!-- Pillar 2 -->
                <div class="col-md-6 col-lg-3" data-aos="zoom-out-up" data-aos-delay="100">
                    <div class="advantage-card">
                        <div class="advantage-icon-box">
                            <i class="las la-shield-alt"></i>
                        </div>
                        <h3 class="advantage-title">Uncompromising Safety Standards</h3>
                        <p class="advantage-desc">
                            All structural, electrical, and pneumatic systems are built to meet or exceed EN/ASTM safety standards and local statutory amusement inspection guidelines.
                        </p>
                    </div>
                </div>

                <!-- Pillar 3 -->
                <div class="col-md-6 col-lg-3" data-aos="zoom-out-up" data-aos-delay="200">
                    <div class="advantage-card">
                        <div class="advantage-icon-box">
                            <i class="las la-chart-line"></i>
                        </div>
                        <h3 class="advantage-title">High ROI &amp; Commercial Viability</h3>
                        <p class="advantage-desc">
                            We design for optimal passenger throughput per hour, energy efficiency, minimal maintenance downtime, and rapid payback periods for operators.
                        </p>
                    </div>
                </div>

                <!-- Pillar 4 -->
                <div class="col-md-6 col-lg-3" data-aos="zoom-out-up" data-aos-delay="300">
                    <div class="advantage-card">
                        <div class="advantage-icon-box">
                            <i class="las la-tools"></i>
                        </div>
                        <h3 class="advantage-title">Localized Support &amp; Spare Parts</h3>
                        <p class="advantage-desc">
                            Based in India, our rapid-response engineering teams eliminate the costly downtime and import delays common with overseas equipment suppliers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         7. 5-STEP PROJECT EXECUTION FRAMEWORK
         ============================================== -->
    <section class="about-framework-section">
        <div class="container">
            <div class="text-center mb-50" data-aos="fade-up">
                <div class="section-pill-tag">
                    <i class="las la-project-diagram"></i> Execution Methodology
                </div>
                <h2 class="about-story-heading ![margin-bottom:12px]">
                    How We Bring Your <span class="gradient-word">Park to Life</span>
                </h2>
                <p class="![font-family:'Poppins',_sans-serif] ![font-size:1.05rem] ![color:#64748b] ![max-width:750px] ![margin:0_auto]">
                    A rigorous 5-step engineering and deployment framework developed to deliver world-class amusement destinations on time and within budget.
                </p>
            </div>

            <div class="framework-timeline-track">
                <div class="row g-4">
                    <!-- Step 1 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="step-card">
                            <div class="step-badge-number">STEP 01</div>
                            <h3 class="step-title">Feasibility &amp; Master Planning</h3>
                            <p class="step-desc">
                                Site evaluation, footfall forecasting, zoning, theme development, and ride mix selection.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="step-card">
                            <div class="step-badge-number">STEP 02</div>
                            <h3 class="step-title">Design &amp; Custom Engineering</h3>
                            <p class="step-desc">
                                Detailed structural design, CAD/BIM blueprints, mechanical engineering, and aesthetic theming.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="col-lg-4 col-md-6">
                        <div class="step-card">
                            <div class="step-badge-number">STEP 03</div>
                            <h3 class="step-title">Precision In-House Manufacturing</h3>
                            <p class="step-desc">
                                High-grade steel fabrication, certified welding, hydraulic/pneumatic assembly, and fail-safe PLC automation.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="col-lg-6 col-md-6">
                        <div class="step-card">
                            <div class="step-badge-number">STEP 04</div>
                            <h3 class="step-title">On-Site Erection &amp; Rigorous Testing</h3>
                            <p class="step-desc">
                                Foundation integration, mechanical assembly, electrical wiring, and multi-cycle load and fail-safe testing.
                            </p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="col-lg-6 col-md-12">
                        <div class="step-card">
                            <div class="step-badge-number">STEP 05</div>
                            <h3 class="step-title">Commissioning &amp; Lifecycle Support</h3>
                            <p class="step-desc">
                                Safety certification assistance, staff operation training, scheduled preventative maintenance, and spare parts supply.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==============================================
         8. CLOSING CALL-TO-ACTION (CTA STRIP)
         ============================================== -->
    <section class="about-cta-section about-company-cta">
        <div class="about-cta-glow"></div>
        <div class="container position-relative ![z-index:2]">
            <div class="about-cta-box" data-aos="fade-up">
                <div class="section-pill-tag ![background:#0b1727] ![color:#ffffff] ![border-color:#0b1727]">
                    <i class="las la-handshake"></i> Let's Build Together
                </div>

                <h2 class="about-cta-heading">
                    Ready to Build India’s Next <br><span class="cta-orange-glow">Landmark Entertainment Destination?</span>
                </h2>

                <p class="about-cta-text">
                    Whether you are planning a 50-acre outdoor theme park, a resort adventure circuit, or an indoor family entertainment center, our engineering and design team is ready to assist.
                </p>

                <div class="about-cta-buttons">
                    <a href="{{ url('/contact') }}" class="btn-glow-primary">
                        <span>Get in Touch with Our Engineers</span>
                        <i class="las la-arrow-right"></i>
                    </a>
                    <a href="{{ url('/projects') }}" class="btn-glass-secondary">
                        <i class="las la-layer-group"></i>
                        <span>Explore Our Projects</span>
                    </a>
                    <a href="tel:+917025777755" class="btn-glass-secondary ![border-color:rgba(245,_161,_0,_0.4)] ![color:#f5a100]">
                        <i class="las la-phone-volume"></i>
                        <span>+91 7025 777 755</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer-section">
        <div class="container">
            <div class="row footer-area">
                <div class="col-lg-3 col-sm-6 sm-padding">
                    <div class="footer-widget">
                        <a class="footer-logo" href="{{ url('/') }}"><img src="{{ asset('assets/img/nlogo.png') }}" alt="Ageless Entertainments Logo"></a>
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
                            <li><a href="{{ url('/projects') }}">Our Projects</a></li>
                            <li><a href="{{ url('/products') }}">Rides &amp; Attractions</a></li>
                            <li><a href="{{ route('blog.index') }}">Blog &amp; News</a></li>
                            <li><a href="{{ url('/contact') }}">Get in Touch</a></li>
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
                            <div id="mc-form-messages" class="alert" role="alert"></div>
                        </form>
                        <p>Subscribe to stay updated with our newest rides and park developments.</p>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                © <span id="currentYear"></span> Ageless Entertainments All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Scroll Up Button -->
    <div id="scrollup">
        <button id="scroll-top" class="scroll-to-top" aria-label="Scroll to top"><i class="las la-arrow-up"></i></button>
    </div>

    <!-- Core Scripts -->
    <script src="{{ asset('assets/js/vendor/jquary-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/mailchimp.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}?v={{ filemtime(public_path('assets/js/main.js')) }}"></script>
    <script src="{{ asset('assets/js/kite-cursor.js') }}?v={{ filemtime(public_path('assets/js/kite-cursor.js')) }}"></script>
    <script src="{{ asset('assets/js/park-parallax.js') }}?v={{ filemtime(public_path('assets/js/park-parallax.js')) }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        function initAboutAnimations() {
            if (!window.AOS) return;

            AOS.init({
                duration: 1000,
                easing: 'ease-out-cubic',
                once: true,
                offset: 0,
                disable: window.matchMedia('(prefers-reduced-motion: reduce)').matches
            });
        }

        // Start the hero entrance after the site's preloader has disappeared.
        if (document.readyState === 'complete') {
            requestAnimationFrame(initAboutAnimations);
        } else {
            window.addEventListener('load', function() {
                requestAnimationFrame(initAboutAnimations);
            }, { once: true });
        }
        document.addEventListener("DOMContentLoaded", function() {
            var yearEl = document.getElementById("currentYear");
            if (yearEl) {
                yearEl.textContent = new Date().getFullYear();
            }
        });
    </script>
@include('partials.website-chat')
</body>

</html>
