<?php $__env->startSection('title', 'SEO Strategy for Ageless Entertainments | Turnkey Amusement Park Builders'); ?>
<?php $__env->startSection('meta_description', 'Comprehensive SEO strategy and roadmap for Ageless Entertainments — amusement park builder, adventure ride manufacturer, 12D theatres, and cinema domes across India.'); ?>
<?php $__env->startSection('meta_keywords', 'amusement park builder in india, amusement park manufacturer, theme park builder india, amusement park consultant, adventure park manufacturer'); ?>
<?php $__env->startSection('canonical', url('/seo-strategy')); ?>

<?php $__env->startSection('content'); ?>
<style>
/* ===================================================
   SEO STRATEGY INFOGRAPHIC & DASHBOARD STYLING
   =================================================== */
:root {
    --seo-primary: #f5a100;
    --seo-navy: #030d28;
    --seo-navy-card: #081638;
    --seo-text-muted: #64748b;
    --seo-border: rgba(226, 232, 240, 0.8);
    --seo-radius: 14px;
}

.seo-page-body {
    background-color: #f8fafc;
    color: #1e293b;
    font-family: 'Poppins', sans-serif;
    padding-bottom: 80px;
}

/* Header & Hero Section */
.seo-hero-banner {
    position: relative;
    background: linear-gradient(135deg, #030d28 0%, #0c2340 50%, #051630 100%);
    color: #ffffff;
    padding: 140px 0 80px 0;
    overflow: hidden;
    border-bottom: 4px solid #f5a100;
}

.seo-hero-banner::before {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle at 80% 20%, rgba(245, 161, 0, 0.15) 0%, transparent 60%);
    pointer-events: none;
}

.seo-badge-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 16px;
    border-radius: 999px;
    background: rgba(245, 161, 0, 0.15);
    border: 1px solid rgba(245, 161, 0, 0.4);
    color: #f5a100;
    font-size: 0.85rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 20px;
}

.seo-hero-title {
    font-family: 'Poppins', sans-serif;
    font-size: clamp(2.4rem, 5vw, 4.2rem);
    letter-spacing: 1px;
    text-transform: uppercase;
    line-height: 1.1;
    margin-bottom: 18px;
}

.seo-hero-title span {
    color: #f5a100;
}

.seo-hero-subtitle {
    font-size: 1.15rem;
    font-weight: 400;
    color: #cbd5e1;
    max-width: 700px;
    margin-bottom: 30px;
}

.seo-hero-tagline {
    font-family: 'Poppins', sans-serif;
    font-size: 1.6rem;
    color: rgba(255, 255, 255, 0.85);
    font-style: italic;
}

/* Metric Strip */
.seo-metrics-row {
    margin-top: -45px;
    position: relative;
    z-index: 10;
}

.seo-metric-card {
    background: #ffffff;
    border-radius: var(--seo-radius);
    padding: 22px 20px;
    box-shadow: 0 10px 30px rgba(3, 13, 40, 0.08);
    border: 1px solid #e2e8f0;
    display: flex;
    align-items: center;
    gap: 16px;
    transition: all 0.3s ease;
    height: 100%;
}

.seo-metric-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 16px 36px rgba(245, 161, 0, 0.15);
    border-color: #f5a100;
}

.seo-metric-icon {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.6rem;
    flex-shrink: 0;
}

.seo-metric-icon.pink { background: #ffe4e6; color: #e11d48; }
.seo-metric-icon.blue { background: #e0f2fe; color: #0284c7; }
.seo-metric-icon.green { background: #dcfce7; color: #16a34a; }
.seo-metric-icon.gold { background: #fef3c7; color: #d97706; }

.seo-metric-info h5 {
    font-size: 1.05rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 2px;
}

.seo-metric-info p {
    font-size: 0.85rem;
    color: var(--seo-text-muted);
    margin: 0;
    line-height: 1.3;
}

/* Section Common */
.seo-section-card {
    background: #ffffff;
    border-radius: var(--seo-radius);
    padding: 36px 32px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
    border: 1px solid #e2e8f0;
    margin-bottom: 35px;
}

.seo-section-head {
    margin-bottom: 28px;
    border-bottom: 2px solid #f1f5f9;
    padding-bottom: 16px;
}

.seo-section-num {
    display: inline-block;
    font-size: 1.35rem;
    font-weight: 800;
    color: #0f172a;
    font-family: 'Poppins', sans-serif;
}

.seo-section-sub {
    font-size: 0.95rem;
    color: var(--seo-text-muted);
    margin-top: 2px;
}

/* 1. SEO Goals Grid */
.seo-goal-card {
    border-radius: 12px;
    padding: 24px 20px;
    text-align: center;
    transition: all 0.3s ease;
    height: 100%;
    border: 1px solid transparent;
}

.seo-goal-card:hover {
    transform: translateY(-4px);
}

.seo-goal-1 { background: #fff1f2; border-color: #fecdd3; }
.seo-goal-2 { background: #f0f9ff; border-color: #bae6fd; }
.seo-goal-3 { background: #f0fdf4; border-color: #bbf7d0; }
.seo-goal-4 { background: #fffbeb; border-color: #fde68a; }
.seo-goal-5 { background: #faf5ff; border-color: #e9d5ff; }

.seo-goal-icon {
    width: 48px;
    height: 48px;
    margin: 0 auto 16px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
}

.seo-goal-1 .seo-goal-icon { background: #ffe4e6; color: #e11d48; }
.seo-goal-2 .seo-goal-icon { background: #e0f2fe; color: #0284c7; }
.seo-goal-3 .seo-goal-icon { background: #dcfce7; color: #16a34a; }
.seo-goal-4 .seo-goal-icon { background: #fef3c7; color: #d97706; }
.seo-goal-5 .seo-goal-icon { background: #f3e8ff; color: #9333ea; }

.seo-goal-card p {
    font-size: 0.92rem;
    font-weight: 600;
    color: #1e293b;
    margin: 0;
    line-height: 1.45;
}

/* 2. Homepage Mockup & Meta Info */
.seo-device-mockup {
    background: #0f172a;
    border-radius: 14px;
    padding: 12px;
    box-shadow: 0 18px 40px rgba(15, 23, 42, 0.25);
    border: 3px solid #334155;
}

.seo-browser-bar {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 10px;
    padding: 4px 8px;
    background: #1e293b;
    border-radius: 8px;
}

.seo-browser-dot {
    width: 10px;
    height: 10px;
    border-radius: 50%;
}
.seo-dot-red { background: #ef4444; }
.seo-dot-yellow { background: #f59e0b; }
.seo-dot-green { background: #10b981; }

.seo-browser-url {
    background: #0f172a;
    color: #94a3b8;
    font-size: 0.75rem;
    padding: 3px 12px;
    border-radius: 4px;
    flex-grow: 1;
    margin-left: 8px;
}

.seo-screen-preview {
    border-radius: 8px;
    overflow: hidden;
    position: relative;
    background: #030d28;
}

.seo-screen-preview img {
    width: 100%;
    height: 260px;
    object-fit: cover;
    opacity: 0.7;
}

.seo-screen-overlay-content {
    position: absolute;
    inset: 0;
    padding: 24px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    background: linear-gradient(90deg, rgba(3, 13, 40, 0.9) 0%, rgba(3, 13, 40, 0.4) 100%);
    color: #ffffff;
}

.seo-screen-overlay-content h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 1.4rem;
    text-transform: uppercase;
    line-height: 1.2;
    margin-bottom: 10px;
}

.seo-screen-overlay-content h3 span {
    color: #f5a100;
}

.seo-meta-box {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 18px 20px;
    margin-bottom: 16px;
}

.seo-meta-label {
    display: flex;
    align-items: center;
    gap: 8px;
    font-size: 0.85rem;
    font-weight: 700;
    color: #2563eb;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    margin-bottom: 6px;
}

.seo-meta-val {
    font-size: 0.95rem;
    color: #1e293b;
    margin: 0;
    font-weight: 500;
    line-height: 1.5;
}

.seo-h2-checklist-card {
    background: #f0fdf4;
    border: 1px solid #bbf7d0;
    border-radius: 12px;
    padding: 20px;
}

.seo-h2-checklist-title {
    font-size: 1rem;
    font-weight: 700;
    color: #166534;
    margin-bottom: 14px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.seo-h2-list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 10px;
}

.seo-h2-list li {
    font-size: 0.88rem;
    color: #14532d;
    display: flex;
    align-items: flex-start;
    gap: 8px;
    line-height: 1.4;
}

.seo-h2-list li i {
    color: #16a34a;
    font-size: 1.1rem;
    flex-shrink: 0;
    margin-top: 2px;
}

/* 3. Keyword Clusters */
.seo-keyword-cluster {
    border-radius: 12px;
    padding: 24px 20px;
    height: 100%;
    border: 1px solid transparent;
}

.cluster-core { background: #fff1f2; border-color: #fecdd3; }
.cluster-adventure { background: #eff6ff; border-color: #bfdbfe; }
.cluster-indoor { background: #f0fdf4; border-color: #bbf7d0; }
.cluster-cinema { background: #fffbeb; border-color: #fde68a; }

.seo-cluster-header {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 16px;
    padding-bottom: 10px;
    border-bottom: 1px dashed rgba(0, 0, 0, 0.1);
}

.seo-cluster-header i {
    font-size: 1.4rem;
}
.cluster-core i { color: #e11d48; }
.cluster-adventure i { color: #2563eb; }
.cluster-indoor i { color: #16a34a; }
.cluster-cinema i { color: #d97706; }

.seo-cluster-header h4 {
    font-size: 1.05rem;
    font-weight: 700;
    margin: 0;
    color: #0f172a;
}

.seo-kw-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.seo-kw-list li {
    font-size: 0.9rem;
    color: #334155;
    padding: 6px 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.seo-kw-list li i {
    font-size: 1rem;
    color: #10b981;
}

/* 4. Page Recommendations Table */
.seo-table-responsive {
    overflow-x: auto;
    border-radius: 10px;
    border: 1px solid #e2e8f0;
}

.seo-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.9rem;
    margin: 0;
}

.seo-table thead {
    background: #0f172a;
    color: #ffffff;
}

.seo-table th {
    padding: 14px 18px;
    font-weight: 600;
    text-transform: uppercase;
    font-size: 0.82rem;
    letter-spacing: 0.05em;
    border: none;
}

.seo-table td {
    padding: 14px 18px;
    border-bottom: 1px solid #f1f5f9;
    color: #334155;
    vertical-align: middle;
}

.seo-table tr:hover td {
    background: #f8fafc;
}

.seo-badge-page {
    font-weight: 700;
    color: #0f172a;
    background: #e2e8f0;
    padding: 4px 10px;
    border-radius: 6px;
    display: inline-block;
}

.seo-kw-tag {
    background: #e0f2fe;
    color: #0369a1;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 6px;
    display: inline-block;
    font-size: 0.82rem;
}

/* 5. Product Page Cards */
.seo-prod-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    height: 100%;
}

.seo-prod-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 28px rgba(0,0,0,0.08);
    border-color: #cbd5e1;
}

.seo-prod-thumb {
    height: 150px;
    overflow: hidden;
    position: relative;
}

.seo-prod-thumb img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.seo-prod-card:hover .seo-prod-thumb img {
    transform: scale(1.06);
}

.seo-prod-content {
    padding: 16px;
}

.seo-prod-content h5 {
    font-size: 0.95rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
    line-height: 1.4;
}

.seo-prod-content a {
    font-size: 0.85rem;
    font-weight: 600;
    color: #f5a100;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 4px;
}

/* 6, 7, 8 Triple Columns */
.seo-card-col {
    background: #f8fafc;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px 20px;
    height: 100%;
}

.seo-card-col-head {
    display: flex;
    align-items: center;
    gap: 10px;
    margin-bottom: 18px;
    padding-bottom: 12px;
    border-bottom: 1px solid #e2e8f0;
}

.seo-card-col-head h4 {
    font-size: 1.05rem;
    font-weight: 700;
    color: #0f172a;
    margin: 0;
}

.seo-checklist-items {
    list-style: none;
    padding: 0;
    margin: 0;
}

.seo-checklist-items li {
    font-size: 0.88rem;
    color: #334155;
    padding: 5px 0;
    display: flex;
    align-items: flex-start;
    gap: 8px;
}

.seo-checklist-items li i {
    font-size: 1.05rem;
    color: #10b981;
    flex-shrink: 0;
    margin-top: 2px;
}

/* Bottom Quote Banner */
.seo-quote-box {
    background: linear-gradient(135deg, #fff7ed 0%, #ffedd5 100%);
    border: 1px solid #fed7aa;
    border-left: 6px solid #f97316;
    border-radius: 12px;
    padding: 24px 30px;
    margin: 30px 0;
    text-align: center;
}

.seo-quote-box h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 1.8rem;
    color: #c2410c;
    margin: 0;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Bottom CTA Strip */
.seo-bottom-cta {
    background: linear-gradient(135deg, #030d28 0%, #0b1f48 100%);
    border-radius: var(--seo-radius);
    padding: 40px;
    color: #ffffff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: gap;
    box-shadow: 0 20px 50px rgba(3, 13, 40, 0.2);
    border: 1px solid rgba(245, 161, 0, 0.3);
}

.seo-cta-text h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 2rem;
    margin-bottom: 6px;
    text-transform: uppercase;
}

.seo-cta-text p {
    font-size: 1rem;
    color: #cbd5e1;
    margin: 0;
}
</style>

<div class="seo-page-body">
    <!-- Hero Banner -->
    <section class="seo-hero-banner">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="seo-badge-pill">
                        <i class="las la-chart-line"></i> Strategic Growth Plan
                    </div>
                    <h1 class="seo-hero-title">
                        SEO Strategy for <br><span>Ageless Entertainments</span>
                    </h1>
                    <p class="seo-hero-subtitle">
                        Higher Visibility &bull; More Enquiries &bull; More Parks &bull; A Bigger Tomorrow
                    </p>
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <a href="<?php echo e(url('/contact')); ?>" class="btn-glow-primary">
                            <span>Let's Grow Online</span>
                            <i class="las la-arrow-right"></i>
                        </a>
                        <span class="seo-hero-tagline ms-lg-3">Play Beyond Imagination</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Metrics Highlight Strip -->
    <div class="container seo-metrics-row">
        <div class="row g-3">
            <div class="col-sm-6 col-lg-3">
                <div class="seo-metric-card">
                    <div class="seo-metric-icon pink">
                        <i class="las la-chart-bar"></i>
                    </div>
                    <div class="seo-metric-info">
                        <h5>Higher Rankings</h5>
                        <p>For your key amusement services</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="seo-metric-card">
                    <div class="seo-metric-icon blue">
                        <i class="las la-users"></i>
                    </div>
                    <div class="seo-metric-info">
                        <h5>More Visitors</h5>
                        <p>From highly relevant searches</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="seo-metric-card">
                    <div class="seo-metric-icon green">
                        <i class="las la-bullseye"></i>
                    </div>
                    <div class="seo-metric-info">
                        <h5>Qualified Leads</h5>
                        <p>From across India &amp; abroad</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="seo-metric-card">
                    <div class="seo-metric-icon gold">
                        <i class="las la-trophy"></i>
                    </div>
                    <div class="seo-metric-info">
                        <h5>Brand Presence</h5>
                        <p>In the amusement park industry</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Container -->
    <div class="container mt-5">

        <!-- 1. SEO Goals -->
        <div class="seo-section-card">
            <div class="seo-section-head">
                <div class="seo-section-num">1. SEO Goals</div>
                <div class="seo-section-sub">What we want to achieve</div>
            </div>
            <div class="row g-3">
                <div class="col-md-4 col-lg">
                    <div class="seo-goal-card seo-goal-1">
                        <div class="seo-goal-icon"><i class="las la-search"></i></div>
                        <p>Rank for high-intent keywords like "amusement park builder in india"</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="seo-goal-card seo-goal-2">
                        <div class="seo-goal-icon"><i class="las la-user-friends"></i></div>
                        <p>Increase organic traffic &amp; qualified enquiries by 150%+</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg">
                    <div class="seo-goal-card seo-goal-3">
                        <div class="seo-goal-icon"><i class="las la-file-invoice-dollar"></i></div>
                        <p>Generate 200+ qualified lead inquiries / month via SEO</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="seo-goal-card seo-goal-4">
                        <div class="seo-goal-icon"><i class="las la-map-marker-alt"></i></div>
                        <p>Strengthen local SEO for Kochi, Kerala &amp; Pan-India execution</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg">
                    <div class="seo-goal-card seo-goal-5">
                        <div class="seo-goal-icon"><i class="las la-seedling"></i></div>
                        <p>Grow long-term domain authority &amp; industry leadership</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Homepage SEO Example -->
        <div class="seo-section-card">
            <div class="seo-section-head">
                <div class="seo-section-num">2. Homepage SEO (Example)</div>
                <div class="seo-section-sub">Recommended SEO elements for the homepage</div>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-6">
                    <div class="seo-device-mockup">
                        <div class="seo-browser-bar">
                            <span class="seo-browser-dot seo-dot-red"></span>
                            <span class="seo-browser-dot seo-dot-yellow"></span>
                            <span class="seo-browser-dot seo-dot-green"></span>
                            <span class="seo-browser-url">https://agelessind.com/</span>
                        </div>
                        <div class="seo-screen-preview">
                            <img src="<?php echo e(asset('hero-park.png')); ?>" alt="Ageless Homepage">
                            <div class="seo-screen-overlay-content">
                                <div class="badge-pulse-dot mb-2"></div>
                                <h3>Amusement Park Builder &amp; <br><span>Ride Manufacturer in India</span></h3>
                                <p style="font-size: 0.8rem; color: #cbd5e1; margin-bottom: 12px;">Quality &bull; Innovation &bull; Trust</p>
                                <a href="<?php echo e(url('/')); ?>" class="default-btn" style="padding: 6px 16px; font-size: 0.8rem; width: fit-content;">Explore Our Attractions</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Meta Title -->
                    <div class="seo-meta-box">
                        <div class="seo-meta-label"><i class="las la-tag"></i> Meta Title</div>
                        <p class="seo-meta-val"><strong>Amusement Park Builder &amp; Ride Manufacturer in India | Ageless</strong></p>
                    </div>

                    <!-- Meta Description -->
                    <div class="seo-meta-box">
                        <div class="seo-meta-label"><i class="las la-align-left"></i> Meta Description</div>
                        <p class="seo-meta-val">Ageless Entertainments designs, builds and installs amusement parks, adventure rides, immersive attractions, 12D theatres, flying cinemas, traffic parks and entertainment solutions across India.</p>
                    </div>

                    <!-- H1 -->
                    <div class="seo-meta-box">
                        <div class="seo-meta-label"><i class="las la-heading"></i> H1 (Main Heading)</div>
                        <p class="seo-meta-val"><strong>Amusement Park Builder &amp; Ride Manufacturer in India</strong></p>
                    </div>
                </div>
            </div>

            <!-- Recommended H2 Checklist -->
            <div class="seo-h2-checklist-card mt-4">
                <div class="seo-h2-checklist-title">
                    <i class="las la-check-circle"></i> Recommended H2 Sections on Homepage
                </div>
                <ul class="seo-h2-list">
                    <li><i class="las la-check-circle"></i> End-to-End Amusement Park Design &amp; Development</li>
                    <li><i class="las la-check-circle"></i> Amusement Rides &amp; Entertainment Attractions</li>
                    <li><i class="las la-check-circle"></i> Adventure Park &amp; Sky Ride Solutions</li>
                    <li><i class="las la-check-circle"></i> Immersive Cinema, VR &amp; Indoor Attractions</li>
                    <li><i class="las la-check-circle"></i> Traffic Park &amp; Edutainment Solutions</li>
                    <li><i class="las la-check-circle"></i> Snow Park &amp; Indoor Entertainment Solutions</li>
                    <li><i class="las la-check-circle"></i> Featured Amusement Park Projects Across India</li>
                    <li><i class="las la-check-circle"></i> Why Choose Ageless Entertainments?</li>
                    <li><i class="las la-check-circle"></i> Frequently Asked Questions</li>
                </ul>
            </div>
        </div>

        <!-- 3. Main Keyword Strategy -->
        <div class="seo-section-card">
            <div class="seo-section-head">
                <div class="seo-section-num">3. Main Keyword Strategy</div>
                <div class="seo-section-sub">Primary keyword clusters to target by intent</div>
            </div>
            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <div class="seo-keyword-cluster cluster-core">
                        <div class="seo-cluster-header">
                            <i class="las la-city"></i>
                            <h4>Company / Core</h4>
                        </div>
                        <ul class="seo-kw-list">
                            <li><i class="las la-check"></i> amusement park builder in india</li>
                            <li><i class="las la-check"></i> amusement park manufacturer</li>
                            <li><i class="las la-check"></i> theme park builder india</li>
                            <li><i class="las la-check"></i> amusement park consultant</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="seo-keyword-cluster cluster-adventure">
                        <div class="seo-cluster-header">
                            <i class="las la-mountain"></i>
                            <h4>Adventure Keywords</h4>
                        </div>
                        <ul class="seo-kw-list">
                            <li><i class="las la-check"></i> adventure park manufacturer</li>
                            <li><i class="las la-check"></i> zipline manufacturer india</li>
                            <li><i class="las la-check"></i> rope course manufacturer</li>
                            <li><i class="las la-check"></i> net park manufacturer</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="seo-keyword-cluster cluster-indoor">
                        <div class="seo-cluster-header">
                            <i class="las la-gamepad"></i>
                            <h4>Indoor Entertainment</h4>
                        </div>
                        <ul class="seo-kw-list">
                            <li><i class="las la-check"></i> indoor amusement park setup</li>
                            <li><i class="las la-check"></i> trampoline park manufacturer</li>
                            <li><i class="las la-check"></i> arcade game zone setup</li>
                            <li><i class="las la-check"></i> indoor snow park manufacturer</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="seo-keyword-cluster cluster-cinema">
                        <div class="seo-cluster-header">
                            <i class="las la-film"></i>
                            <h4>Cinema / Immersive</h4>
                        </div>
                        <ul class="seo-kw-list">
                            <li><i class="las la-check"></i> 12D theatre manufacturer</li>
                            <li><i class="las la-check"></i> flying cinema manufacturer</li>
                            <li><i class="las la-check"></i> dome cinema manufacturer</li>
                            <li><i class="las la-check"></i> planetarium installation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- 4. Page-by-Page SEO Recommendations -->
        <div class="seo-section-card">
            <div class="seo-section-head">
                <div class="seo-section-num">4. Page-by-Page SEO Recommendations</div>
                <div class="seo-section-sub">Suggested meta titles, H1 headings, and primary keywords for main pages</div>
            </div>
            <div class="seo-table-responsive">
                <table class="seo-table">
                    <thead>
                        <tr>
                            <th>Page</th>
                            <th>Recommended SEO Title</th>
                            <th>Recommended H1</th>
                            <th>Primary Keyword</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><span class="seo-badge-page">Home</span></td>
                            <td>Amusement Park Builder &amp; Ride Manufacturer in India | Ageless</td>
                            <td>Amusement Park Builder &amp; Ride Manufacturer in India</td>
                            <td><span class="seo-kw-tag">amusement park builder india</span></td>
                        </tr>
                        <tr>
                            <td><span class="seo-badge-page">About</span></td>
                            <td>About Ageless | Amusement Park Builders in India</td>
                            <td>About Ageless Entertainments</td>
                            <td><span class="seo-kw-tag">amusement park company india</span></td>
                        </tr>
                        <tr>
                            <td><span class="seo-badge-page">Products</span></td>
                            <td>Amusement Park Rides &amp; Attractions Manufacturer India | Ageless</td>
                            <td>Amusement Park Rides &amp; Entertainment Attractions</td>
                            <td><span class="seo-kw-tag">amusement park rides manufacturer</span></td>
                        </tr>
                        <tr>
                            <td><span class="seo-badge-page">Projects</span></td>
                            <td>Amusement Park Projects in India | Ageless</td>
                            <td>Amusement Park &amp; Entertainment Projects</td>
                            <td><span class="seo-kw-tag">amusement park projects india</span></td>
                        </tr>
                        <tr>
                            <td><span class="seo-badge-page">Blog</span></td>
                            <td>Amusement Park Industry Insights &amp; Guides | Ageless</td>
                            <td>Amusement Park &amp; Entertainment Industry Blog</td>
                            <td><span class="seo-kw-tag">amusement park industry india</span></td>
                        </tr>
                        <tr>
                            <td><span class="seo-badge-page">Contact</span></td>
                            <td>Contact Ageless Entertainments | Amusement Park Builder India</td>
                            <td>Contact Ageless Entertainments</td>
                            <td><span class="seo-kw-tag">amusement park consultant india</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 5. Product Page Examples -->
        <div class="seo-section-card">
            <div class="seo-section-head">
                <div class="seo-section-num">5. Product Page Examples</div>
                <div class="seo-section-sub">SEO structure &amp; unique titles for key ride / product pages</div>
            </div>
            <div class="row g-3">
                <!-- Product 1 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="seo-prod-card">
                        <div class="seo-prod-thumb">
                            <img src="<?php echo e(asset('assets/img/snow1.jpg')); ?>" alt="Indoor Snow Park">
                        </div>
                        <div class="seo-prod-content">
                            <h5>Indoor Snow Park Design &amp; Installation in India | Ageless</h5>
                            <a href="<?php echo e(url('/products')); ?>">View Details <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="seo-prod-card">
                        <div class="seo-prod-thumb">
                            <img src="<?php echo e(asset('assets/img/12d4d1.jpg')); ?>" alt="12D Theatre">
                        </div>
                        <div class="seo-prod-content">
                            <h5>12D Theatre Manufacturer &amp; Installation in India</h5>
                            <a href="<?php echo e(url('/interactive-room')); ?>">View Details <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="seo-prod-card">
                        <div class="seo-prod-thumb">
                            <img src="<?php echo e(asset('assets/img/flying1.jpg')); ?>" alt="Flying Theatre">
                        </div>
                        <div class="seo-prod-content">
                            <h5>Flying Theatre Manufacturer &amp; Installation in India</h5>
                            <a href="<?php echo e(url('/flying-cinema')); ?>">View Details <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="seo-prod-card">
                        <div class="seo-prod-thumb">
                            <img src="<?php echo e(asset('assets/img/dome1.jpg')); ?>" alt="360 Dome Cinema">
                        </div>
                        <div class="seo-prod-content">
                            <h5>360° Dome Cinema in India | Ageless</h5>
                            <a href="<?php echo e(url('/dome-cinema')); ?>">View Details <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="seo-prod-card">
                        <div class="seo-prod-thumb">
                            <img src="<?php echo e(asset('assets/img/rope1.jpg')); ?>" alt="Rope Rider">
                        </div>
                        <div class="seo-prod-content">
                            <h5>Rope Rider Manufacturer for Adventure Parks</h5>
                            <a href="<?php echo e(url('/rope-rider')); ?>">View Details <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="col-sm-6 col-lg-4">
                    <div class="seo-prod-card">
                        <div class="seo-prod-thumb">
                            <img src="<?php echo e(asset('assets/img/toy1.jpg')); ?>" alt="Traffic Park Vehicles">
                        </div>
                        <div class="seo-prod-content">
                            <h5>Traffic Park Vehicles Manufacturer in India | Irido by Ageless</h5>
                            <a href="<?php echo e(url('/products')); ?>">View Details <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 6, 7, 8 Checklist / Ideas / Local SEO -->
        <div class="seo-section-card">
            <div class="row g-4">
                <!-- 6. Technical SEO Checklist -->
                <div class="col-lg-4">
                    <div class="seo-card-col">
                        <div class="seo-card-col-head">
                            <i class="las la-cogs text-primary" style="font-size: 1.4rem;"></i>
                            <h4>6. Technical SEO Checklist</h4>
                        </div>
                        <ul class="seo-checklist-items">
                            <li><i class="las la-check-circle"></i> Unique meta titles &amp; descriptions</li>
                            <li><i class="las la-check-circle"></i> Proper H1, H2, H3 hierarchy structure</li>
                            <li><i class="las la-check-circle"></i> XML sitemap &amp; robots.txt generated</li>
                            <li><i class="las la-check-circle"></i> 301 redirects from legacy URLs</li>
                            <li><i class="las la-check-circle"></i> Canonical self-referencing tags</li>
                            <li><i class="las la-check-circle"></i> Mobile-friendly &amp; fast loading</li>
                            <li><i class="las la-check-circle"></i> Schema markup (Organization, Product)</li>
                            <li><i class="las la-check-circle"></i> Optimized images with descriptive alt tags</li>
                            <li><i class="las la-check-circle"></i> Broken link audit &amp; resolution</li>
                            <li><i class="las la-check-circle"></i> SSL certificate (HTTPS) security</li>
                        </ul>
                    </div>
                </div>

                <!-- 7. Content & Blog Ideas -->
                <div class="col-lg-4">
                    <div class="seo-card-col">
                        <div class="seo-card-col-head">
                            <i class="las la-edit text-success" style="font-size: 1.4rem;"></i>
                            <h4>7. Content &amp; Blog Ideas</h4>
                        </div>
                        <ul class="seo-checklist-items">
                            <li><i class="las la-file-alt"></i> Cost to build an amusement park in India</li>
                            <li><i class="las la-file-alt"></i> Land required for an amusement park</li>
                            <li><i class="las la-file-alt"></i> Amusement park business plan &amp; ROI</li>
                            <li><i class="las la-file-alt"></i> Top amusement park rides for small parks</li>
                            <li><i class="las la-file-alt"></i> Trampoline park setup cost in India</li>
                            <li><i class="las la-file-alt"></i> Snow park setup cost &amp; requirements</li>
                            <li><i class="las la-file-alt"></i> 12D theatre ROI &amp; guest throughput</li>
                            <li><i class="las la-file-alt"></i> Flying theatre vs 5D cinema comparison</li>
                            <li><i class="las la-file-alt"></i> Amusement ride safety standards in India</li>
                        </ul>
                    </div>
                </div>

                <!-- 8. Local SEO -->
                <div class="col-lg-4">
                    <div class="seo-card-col">
                        <div class="seo-card-col-head">
                            <i class="las la-map-pin text-danger" style="font-size: 1.4rem;"></i>
                            <h4>8. Local SEO Strategy</h4>
                        </div>
                        <ul class="seo-checklist-items mb-4">
                            <li><i class="las la-check-circle"></i> Consistent NAP (Name, Address, Phone)</li>
                            <li><i class="las la-check-circle"></i> Google Business Profile optimization</li>
                            <li><i class="las la-check-circle"></i> Client reviews &amp; project testimonials</li>
                            <li><i class="las la-check-circle"></i> Local citations &amp; B2B directories</li>
                            <li><i class="las la-check-circle"></i> Kochi, Kerala &amp; Pan-India schema</li>
                        </ul>

                        <div class="seo-quote-box mt-3 mb-0">
                            <h3>"Better SEO today. <br>Bigger parks tomorrow."</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom CTA Strip -->
        <div class="seo-bottom-cta">
            <div class="seo-cta-text">
                <h3>Let's Build a Stronger Online Presence</h3>
                <p>More Visibility &bull; More Visitors &bull; More Adventures</p>
            </div>
            <a href="<?php echo e(url('/contact')); ?>" class="btn-glow-primary">
                <span>Get Started</span>
                <i class="las la-arrow-right"></i>
            </a>
        </div>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\ageless_website\resources\views\pages\seo-strategy.blade.php ENDPATH**/ ?>