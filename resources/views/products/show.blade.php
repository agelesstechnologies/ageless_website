@extends('layouts.app')

@php
    $productSeo = config('product-seo')[$product->name] ?? [];
    $productHeading = $productSeo['heading'] ?? $product->name;

    // Fallback SEO copy for products without a hand-written entry in config/product-seo.php.
    $seoName = trim(preg_replace('/\s+/', ' ', $productHeading));
    $seoTitle = filled($product->seo_title) ? $product->seo_title : ($productSeo['title'] ?? null);
    if (! $seoTitle) {
        foreach ([$seoName . ' Design & Installation in India | Ageless', $seoName . ' Design & Installation in India', $seoName . ' in India | Ageless'] as $candidate) {
            $seoTitle = $candidate;
            if (mb_strlen($candidate) <= 60) break;
        }
    }

    $seoDescription = filled($product->seo_description) ? $product->seo_description : ($productSeo['description'] ?? null);
    if (! $seoDescription) {
        $seoDescription = trim((string) $product->short_description);
        if ($seoDescription !== '' && ! preg_match('/[.!?]$/', $seoDescription)) $seoDescription .= '.';
        if (mb_strlen($seoDescription) < 110) {
            $seoDescription = trim($seoDescription . ' Ageless Entertainments designs, manufactures and installs ' . $seoName . ' for parks, malls and resorts across India. Get a quote.');
        }
        $seoDescription = \Illuminate\Support\Str::limit($seoDescription, 155, '...', true);
    }

    $relatedProducts = \App\Models\Product::where('status', 1)
        ->where('id', '!=', $product->id)
        ->where('category', $product->category)
        ->orderBy('sort_order')->limit(4)->get();
    if ($relatedProducts->count() < 4) {
        $relatedProducts = $relatedProducts->concat(
            \App\Models\Product::where('status', 1)->where('id', '!=', $product->id)
                ->whereNotIn('id', $relatedProducts->pluck('id'))->orderBy('sort_order')
                ->limit(4 - $relatedProducts->count())->get()
        );
    }
@endphp

@push('jsonld')
@include('partials.schema.json', ['data' => array_filter([
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => $seoName,
    'description' => $seoDescription,
    'image' => $product->gallery_images ?: [$product->image_url],
    'url' => url('/products/' . $product->slug),
    'category' => $product->category,
    'brand' => ['@type' => 'Brand', 'name' => 'Ageless Entertainments'],
    'manufacturer' => ['@id' => url('/') . '#organization'],
])])
@include('partials.schema.breadcrumbs', ['crumbs' => [['Home', url('/')], ['Products', url('/products')], [$seoName, url('/products/' . $product->slug)]]])
@endpush

@section('title', $seoTitle)
@section('meta_description', $seoDescription)
@section('canonical', url('/products/' . ($product->slug ?? '')))

@section('content')

<!-- ==============================================
     PRODUCT DETAILS HERO SECTION
     ============================================== -->
<section class="products-hero-wrapper ![min-height:50vh] ![padding:130px_0_60px_0] ![background-image:var(--hero-image)]" style="--hero-image: url('{{ asset('hero-park.png') }}');">
    <div class="products-hero-overlay"></div>
    <div class="products-hero-mesh"></div>

    <div class="container products-hero-container">
        <div class="row align-items-center">
            <div class="col-lg-10">
                <div class="products-hero-badge wow fadeInDown" data-wow-delay="100ms">
                    <span class="badge-pulse-dot"></span>
                    <span><a class="!tw-text-inherit !tw-no-underline" href="{{ url('/products') }}">Products &amp; Solutions</a> • Specification</span>
                </div>

                <h1 class="products-hero-title wow fadeInUp ![font-size:clamp(2.2rem,_4.2vw,_3.6rem)]" data-wow-delay="200ms">
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
<section class="padding ![background:#ffffff] ![padding:80px_0]">
    <div class="container">
        <div class="row gy-5 align-items-center">
            <!-- Product Media Frame -->
            <div class="col-lg-6">
                <div class="story-media-showcase">
                    <div class="story-main-img-card ![box-shadow:0_20px_50px_rgba(11,_23,_39,_0.12)]">
                        @if(count($product->gallery_images) > 1)
                            @include('products.gallery', ['galleryHeight' => '440px', 'images' => $product->gallery_images, 'alt' => $product->name])
                        @else
                            <img class="![height:440px]" src="{{ $product->image_url }}" alt="{{ $product->name }}">
                        @endif
                    </div>
                    @if(!in_array($product->slug, ['rope-rider-ride', 'steel-slide-hi-lite-mall-kozhikode', 'giant-swing', 'marine-drive-express', 'paddle-boats', 'kayaks', 'dino-park', 'aquarium', 'digital-museum']))
                    <div class="story-floating-badge ![bottom:-15px] ![left:-10px]">
                        <div class="floating-badge-icon">
                            <i class="las la-shield-alt"></i>
                        </div>
                        <div class="floating-badge-text">
                            <h4>{{ match ($product->slug) { 'shooting-and-archery' => 'Custom Target Zones', 'interactive-entertainments' => 'Immersive Digital Play', 'interactive-immersive-zone' => 'Interactive Digital Worlds', 'bumper-cars' => 'Classic Dodgem Fun', 'alpine-coaster' => 'Scenic Coaster Experience', default => 'EN / ASTM Certified' } }}</h4>
                            <p>{{ match ($product->slug) { 'shooting-and-archery' => 'Indoor & Outdoor Planning', 'interactive-entertainments' => 'Custom Floor & Wall Experiences', 'interactive-immersive-zone' => 'Themed Visual Experiences', 'bumper-cars' => 'Custom Cars & Arena Planning', 'alpine-coaster' => 'Outdoor Track & Terrain Planning', default => 'Full Statutory Compliance' } }}</p>
                        </div>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Product Specs & Inquiries -->
            <div class="col-lg-6 ps-lg-5">
                <div class="section-pill-tag mb-2">
                    <i class="las la-cog"></i> Engineering Specification
                </div>
                
                <h2 class="![font-family:'Poppins',_sans-serif] ![font-size:2.2rem] !tw-uppercase ![color:#0b1727] ![margin-bottom:20px]">
                    {{ $product->name }}
                </h2>

                <div class="story-body-para mb-4 ![font-size:1rem] ![line-height:1.8] ![color:#475569]">
                    @if($product->description)
                        {!! nl2br(e($product->description)) !!}
                    @else
                        {{ $product->short_description ?? 'Precision-engineered attraction designed for optimum passenger throughput, structural longevity, and superior guest satisfaction.' }}
                    @endif
                </div>

                <!-- Highlights Checklist -->
                @if(!in_array($product->slug, ['interactive-immersive-zone', 'marine-drive-express', 'alpine-coaster', 'paddle-boats', 'kayaks', 'dino-park']) && filled($product->features))
                <div class="story-features-list mb-4">
                    @foreach(preg_split('/\r\n|\r|\n/', $product->features ?? '', -1, PREG_SPLIT_NO_EMPTY) as $feature)
                    <div class="story-feature-item">
                        <i class="las la-check-circle"></i>
                        <span>{{ $feature }}</span>
                    </div>
                    @endforeach
                </div>

                @endif
                <!-- Actions -->
                <div class="d-flex flex-wrap gap-3 align-items-center pt-3">
                    <a href="{{ url('/contact') }}" class="btn-glow-primary">
                        <i class="las la-file-invoice"></i>
                        <span>Request Custom Quotation</span>
                    </a>
                    <a href="{{ url('/products') }}" class="btn-card-details ![padding:12px_24px]">
                        <i class="las la-arrow-left"></i>
                        <span>Back to All Products</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     PLANNING, DELIVERY & RELATED PRODUCTS
     ============================================== -->
<section class="padding ![background:#f8fafc] ![padding:70px_0]">
    <div class="container">
        <div class="row gy-5">
            <div class="col-lg-7">
                <h2 class="![font-family:'Poppins',_sans-serif] ![font-size:1.7rem] ![color:#0b1727] ![margin-bottom:18px]">Planning {{ $seoName }} for Your Park or Venue</h2>
                <p class="![color:#475569] ![line-height:1.8]">
                    Every {{ $product->name }} project starts with your site. Our engineers review the available area, ceiling or ground conditions, visitor capacity, power and access, then propose a layout that fits your {{ $product->category ? strtolower($product->category) : 'entertainment' }} plan and your budget. We prepare 3D layouts and a clear scope before any fabrication begins, so you know exactly what is being built and installed.
                </p>
                <h3 class="![font-family:'Poppins',_sans-serif] ![font-size:1.2rem] ![color:#0b1727] ![margin:24px_0_10px]">Where it works well</h3>
                <p class="![color:#475569] ![line-height:1.8]">
                    {{ $product->name }} suits amusement and theme parks, shopping malls and family entertainment centres, resorts, hotels, tourist destinations, schools and event grounds. Whether you are opening a new attraction or adding one to an existing park, we can scale the installation to the space and the crowd you expect.
                </p>
                <h3 class="![font-family:'Poppins',_sans-serif] ![font-size:1.2rem] ![color:#0b1727] ![margin:24px_0_10px]">What we deliver</h3>
                <ul class="![color:#475569] ![line-height:1.9] ![padding-left:20px]">
                    <li>Concept design, layout and 3D visualisation tailored to your site</li>
                    <li>In-house manufacturing with tested materials and quality checks</li>
                    <li>Installation, commissioning and operator training by our Kochi-based team</li>
                    <li>Safety documentation aligned with ASTM and EN standards and statutory inspections</li>
                    <li>After-sales maintenance support and spare parts across India</li>
                </ul>
                <p class="![color:#475569] ![line-height:1.8] ![margin-top:18px]">
                    Ageless Entertainments has been building rides and attractions since 2011. Tell us about your location and target audience, and we will recommend the right specification and a realistic timeline for {{ $product->name }}. <a href="{{ url('/contact') }}">Contact our team</a> for a custom quotation, or browse our <a href="{{ url('/projects') }}">completed projects</a> to see our work in the field.
                </p>
            </div>
            <div class="col-lg-5">
                <h2 class="![font-family:'Poppins',_sans-serif] ![font-size:1.4rem] ![color:#0b1727] ![margin-bottom:18px]">Related Attractions</h2>
                <ul class="list-unstyled">
                    @foreach($relatedProducts as $related)
                        <li class="![margin-bottom:12px]"><a href="{{ url('/products/' . $related->slug) }}" class="![font-weight:600]">{{ $related->name }}</a>@if($related->short_description) <span class="![color:#64748b]">&ndash; {{ \Illuminate\Support\Str::limit($related->short_description, 70, '...', true) }}</span>@endif</li>
                    @endforeach
                </ul>
                <a href="{{ url('/products') }}" class="btn-card-details ![padding:12px_24px]"><span>View All Products</span></a>
            </div>
        </div>
    </div>
</section>

<!-- ==============================================
     THE AGELESS ADVANTAGE STRIP
     ============================================== -->
<section class="about-advantage-section ![padding:70px_0]">
    <div class="container position-relative ![z-index:2]">
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
