@push('tailwind_styles')
@include('partials.tailwind.projects-responsive')
@include('partials.tailwind.projects-index-1')
@endpush

@extends('layouts.app')

@section('title', ($project->title ?? 'Landmark Project') . ' | Ageless Entertainments')
@section('meta_description', $project->short_description ?? 'Landmark amusement park and ride installation case study by Ageless Entertainments.')
@section('canonical', url('/projects/' . ($project->slug ?? '')))

@section('content')

<!-- ==============================================
     PROJECT DETAILS HERO SECTION
     ============================================== -->
<section class="projects-hero-wrapper ![min-height:52vh] ![padding:130px_0_65px_0] ![background-image:var(--hero-image)]" style="--hero-image: url('{{ asset('hero-park-ferriswheel.jpg') }}');">
    <div class="projects-hero-overlay"></div>
    <div class="projects-hero-mesh"></div>

    <div class="container projects-hero-container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="projects-hero-badge wow fadeInDown" data-wow-delay="100ms">
                    <span class="badge-pulse-dot"></span>
                    <span><a class="!tw-text-inherit !tw-no-underline" href="{{ url('/projects') }}">Projects Portfolio</a> • Case Study</span>
                </div>

                <h1 class="projects-hero-title wow fadeInUp ![font-size:clamp(2.2rem,_4.2vw,_3.6rem)]" data-wow-delay="200ms">
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
<section class="padding ![background:#ffffff] ![padding:80px_0]">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <!-- Project Media Frame -->
            <div class="col-lg-6">
                <div class="story-media-showcase">
                    <div class="story-main-img-card ![box-shadow:0_20px_50px_rgba(11,_23,_39,_0.12)]">
                        <img class="![height:460px]" src="{{ $project->image_url }}" alt="{{ $project->title }}">
                    </div>
                    <div class="project-detail-photo-strip" style="display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px;margin-top:16px;">
                        @foreach($project->gallery_images as $photo)
                            <a href="{{ $photo }}" target="_blank" rel="noopener" aria-label="Open {{ $project->title }} photo {{ $loop->iteration }}">
                                <img src="{{ $photo }}" alt="{{ $project->title }} ? photo {{ $loop->iteration }}" style="width:100%;height:110px;object-fit:cover;border-radius:12px;" loading="lazy">
                            </a>
                        @endforeach
                    </div>
                    @if($project->slug === 'funtoppia')
                        <p class="small text-muted mt-3">Illustrative gaming photographs; final Funtoppia interiors and equipment may differ. Photos by <a href="https://unsplash.com/photos/m3hn2Kn5Bns" target="_blank" rel="noopener">Carl Raw</a> and <a href="https://unsplash.com/photos/YpRj5w60zBY" target="_blank" rel="noopener">Ciaran O'Brien</a> on Unsplash.</p>
                    @endif
                    <div class="story-floating-badge ![bottom:-15px] ![left:-10px]">
                        <div class="floating-badge-icon">
                            <i class="las la-award"></i>
                        </div>
                        <div class="floating-badge-text">
                            <h4>{{ $project->slug === 'funtoppia' ? 'Funtoppia Kochi' : 'Flagship Landmark' }}</h4>
                            <p>{{ $project->slug === 'funtoppia' ? 'Planned Gaming Destination' : 'Delivered on Turnkey Schedule' }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project Details & Information -->
            <div class="col-lg-6 ps-lg-5">
                <div class="section-pill-tag mb-2">
                    <i class="las la-layer-group"></i> {{ $project->category ?? 'Theme & Amusement Park' }}
                </div>
                
                <h2 class="![font-family:'Poppins',_sans-serif] ![font-size:2.2rem] !tw-uppercase ![color:#0b1727] ![margin-bottom:20px]">
                    {{ $project->title }}
                </h2>

                <div class="story-body-para mb-4 ![font-size:1rem] ![line-height:1.8] ![color:#475569]">
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
                    <a href="{{ route('projects.index') }}" class="btn-card-details ![padding:12px_24px]">
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
<section class="about-advantage-section ![padding:70px_0]">
    <div class="container position-relative ![z-index:2]">
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
