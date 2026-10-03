@extends('layouts.app')

@section('title', ($project->title ?? 'Landmark Project') . ' | Ageless Entertainments')
@section('meta_description', $project->short_description ?? 'Landmark amusement park and ride installation case study by Ageless Entertainments.')
@section('canonical', url('/projects/' . ($project->slug ?? '')))

@section('content')

<!-- ==============================================
     PROJECT DETAILS HERO SECTION
     ============================================== -->
<section class="projects-hero-wrapper" style="min-height: 52vh; padding: 130px 0 65px 0; background-image: url('{{ asset('hero-park-ferriswheel.jpg') }}');">
    <div class="projects-hero-overlay"></div>
    <div class="projects-hero-mesh"></div>

    <div class="container projects-hero-container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="projects-hero-badge wow fadeInDown" data-wow-delay="100ms">
                    <span class="badge-pulse-dot"></span>
                    <span><a href="{{ url('/projects') }}" style="color: inherit; text-decoration: none;">Projects Portfolio</a> • Case Study</span>
                </div>

                <h1 class="projects-hero-title wow fadeInUp" data-wow-delay="200ms" style="font-size: clamp(2.2rem, 4.2vw, 3.6rem);">
                    {{ $project->title }}
                </h1>

                @if($project->short_description)
                    <p class="projects-hero-subheading wow fadeInUp" data-wow-delay="300ms">
                        {{ $project->short_description }}
                    </p>
                @endif
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     PROJECT DETAILS CONTENT & SPECS
     ============================================== -->
<section class="padding" style="background: #ffffff; padding: 80px 0;">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <!-- Project Media Frame -->
            <div class="col-lg-6">
                <div class="story-media-showcase">
                    <div class="story-main-img-card" style="box-shadow: 0 20px 50px rgba(11, 23, 39, 0.12);">
                        <img src="{{ $project->image_url }}" alt="{{ $project->title }}" style="height: 460px;">
                    </div>
                    <div class="story-floating-badge" style="bottom: -15px; left: -10px;">
                        <div class="floating-badge-icon">
                            <i class="las la-award"></i>
                        </div>
                        <div class="floating-badge-text">
                            <h4>Flagship Landmark</h4>
                            <p>Delivered on Turnkey Schedule</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Details & Information -->
            <div class="col-lg-6 ps-lg-5">
                <div class="section-pill-tag mb-2">
                    <i class="las la-layer-group"></i> {{ $project->category ?? 'Theme & Amusement Park' }}
                </div>
                
                <h2 style="font-family: 'Poppins', sans-serif; font-size: 2.2rem; text-transform: uppercase; color: #0b1727; margin-bottom: 20px;">
                    {{ $project->title }}
                </h2>

                <div class="story-body-para mb-4" style="font-size: 1rem; line-height: 1.8; color: #475569;">
                    @if($project->description)
                        {!! nl2br(e($project->description)) !!}
                    @else
                        {{ $project->short_description ?? 'A destination-scale entertainment development engineered to maximize guest thrill, structural safety, and operational longevity.' }}
                    @endif
                </div>

                <!-- Scope of Work & Capabilities -->
                <div class="story-features-list mb-4">
                    @foreach(array_filter(array_map('trim', explode(',', $project->scope ?? ''))) as $scopeItem)
                    <div class="story-feature-item">
                        <i class="las la-check-circle"></i>
                        <span>{{ $scopeItem }}</span>
                    </div>
                    @endforeach
                </div>
                @if($project->location || $project->year || $project->capacity)
                    <p>{{ implode(' · ', array_filter([$project->location, $project->year, $project->capacity])) }}</p>
                @endif
                @if($project->specifications)
                    <ul>
                        @foreach(explode('|', $project->specifications) as $specification)
                            <li>{{ trim($specification) }}</li>
                        @endforeach
                    </ul>
                @endif

                <!-- Action Buttons -->
                <div class="d-flex flex-wrap gap-3 align-items-center pt-3">
                    <a href="{{ url('/contact') }}" class="btn-glow-primary">
                        <i class="las la-phone-volume"></i>
                        <span>Plan a Similar Project</span>
                    </a>
                    <a href="{{ route('projects.index') }}" class="btn-card-details" style="padding: 12px 24px;">
                        <i class="las la-arrow-left"></i>
                        <span>Back to All Projects</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     DEVELOPER PARTNERSHIP ADVANTAGES
     ============================================== -->
<section class="about-advantage-section" style="padding: 70px 0;">
    <div class="container position-relative" style="z-index: 2;">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="advantage-card">
                    <div class="advantage-icon-box">
                        <i class="las la-drafting-compass"></i>
                    </div>
                    <h3 class="advantage-title">Turnkey Feasibility</h3>
                    <p class="advantage-desc">Market, land and investment inputs shaped into a bankable, high-ROI entertainment concept.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card">
                    <div class="advantage-icon-box">
                        <i class="las la-shield-alt"></i>
                    </div>
                    <h3 class="advantage-title">Certified Safety</h3>
                    <p class="advantage-desc">Full compliance with international ASTM F24 / EN 13814 standards and statutory safety audits.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="advantage-card">
                    <div class="advantage-icon-box">
                        <i class="las la-tools"></i>
                    </div>
                    <h3 class="advantage-title">Lifecycle Care</h3>
                    <p class="advantage-desc">Operator training, preventative maintenance schedules, and rapid spares supply from Kochi.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
