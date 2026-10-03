@extends('layouts.app')

@php
    $productSeo = config('product-seo')[$product->name] ?? [];
    $productHeading = $productSeo['heading'] ?? $product->name;
@endphp

@section('title', $productSeo['title'] ?? $productHeading . ' | Ageless')
@section('meta_description', $productSeo['description'] ?? $product->short_description ?? 'Explore amusement ride and attraction solutions from Ageless Entertainments in India.')
@section('canonical', url('/products/' . ($product->slug ?? '')))

@section('content')

<!-- ==============================================
     PRODUCT DETAILS HERO SECTION
     ============================================== -->
<section class="products-hero-wrapper" style="min-height: 50vh; padding: 130px 0 60px 0; background-image: url('{{ asset('hero-park.png') }}');">
    <div class="products-hero-overlay"></div>
    <div class="products-hero-mesh"></div>

    <div class="container products-hero-container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="products-hero-badge wow fadeInDown" data-wow-delay="100ms">
                    <span class="badge-pulse-dot"></span>
                    <span><a href="{{ url('/products') }}" style="color: inherit; text-decoration: none;">Products &amp; Solutions</a> • Specification</span>
                </div>

                <h1 class="products-hero-title wow fadeInUp" data-wow-delay="200ms" style="font-size: clamp(2.2rem, 4.2vw, 3.6rem);">
                    {{ $productHeading }}
                </h1>

                @if($product->short_description)
                    <p class="products-hero-subheading wow fadeInUp" data-wow-delay="300ms">
                        {{ $product->short_description }}
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     PRODUCT DETAILS CONTENT & SPECS
     ============================================== -->
<section class="padding" style="background: #ffffff; padding: 80px 0;">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <!-- Product Media Frame -->
            <div class="col-lg-6">
                <div class="story-media-showcase">
                    <div class="story-main-img-card" style="box-shadow: 0 20px 50px rgba(11, 23, 39, 0.12);">
                        <img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="height: 440px;">
                    </div>
                    <div class="story-floating-badge" style="bottom: -15px; left: -10px;">
                        <div class="floating-badge-icon">
                            <i class="las la-shield-alt"></i>
                        </div>
                        <div class="floating-badge-text">
                            <h4>EN / ASTM Certified</h4>
                            <p>Full Statutory Compliance</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Specs & Inquiries -->
            <div class="col-lg-6 ps-lg-5">
                <div class="section-pill-tag mb-2">
                    <i class="las la-cog"></i> Engineering Specification
                </div>
                
                <h2 style="font-family: 'Poppins', sans-serif; font-size: 2.2rem; text-transform: uppercase; color: #0b1727; margin-bottom: 20px;">
                    {{ $product->name }}
                </h2>

                <div class="story-body-para mb-4" style="font-size: 1rem; line-height: 1.8; color: #475569;">
                    @if($product->description)
                        {!! nl2br(e($product->description)) !!}
                    @else
                        {{ $product->short_description ?? 'Precision-engineered attraction designed for optimum passenger throughput, structural longevity, and superior guest satisfaction.' }}
                    @endif
                </div>

                <!-- Highlights Checklist -->
                <div class="story-features-list mb-4">
                    @foreach(preg_split('/\r\n|\r|\n/', $product->features ?? '', -1, PREG_SPLIT_NO_EMPTY) as $feature)
                    <div class="story-feature-item">
                        <i class="las la-check-circle"></i>
                        <span>{{ $feature }}</span>
                    </div>
                    @endforeach
                </div>

                <!-- Actions -->
                <div class="d-flex flex-wrap gap-3 align-items-center pt-3">
                    <a href="{{ url('/contact') }}" class="btn-glow-primary">
                        <i class="las la-file-invoice"></i>
                        <span>Request Custom Quotation</span>
                    </a>
                    <a href="{{ url('/products') }}" class="btn-card-details" style="padding: 12px 24px;">
                        <i class="las la-arrow-left"></i>
                        <span>Back to All Products</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     THE AGELESS ADVANTAGE STRIP
     ============================================== -->
<section class="about-advantage-section" style="padding: 70px 0;">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="advantage-card">
                    <div class="advantage-icon-box">
                        <i class="las la-drafting-compass"></i>
                    </div>
                    <h3 class="advantage-title">Turnkey Supply</h3>
                    <p class="advantage-desc">From 3D CAD modeling and civil integration to fabrication, erection, and commissioning.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card">
                    <div class="advantage-icon-box">
                        <i class="las la-shield-alt"></i>
                    </div>
                    <h3 class="advantage-title">Safety Rigor</h3>
                    <p class="advantage-desc">Full compliance with international ASTM F24 / EN 13814 standards and statutory safety audits.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card">
                    <div class="advantage-icon-box">
                        <i class="las la-tools"></i>
                    </div>
                    <h3 class="advantage-title">Rapid Spares</h3>
                    <p class="advantage-desc">Indian engineering support hub in Kochi eliminating overseas lead times and high import duties.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
