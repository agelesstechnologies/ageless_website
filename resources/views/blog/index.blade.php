@push('tailwind_styles')
@include('partials.tailwind.aos')
@include('partials.tailwind.blog-page')
@include('partials.tailwind.blog-responsive')
@endpush

@extends('layouts.app')

@section('title', 'Amusement Park Industry Insights & Guides | Ageless')
@section('meta_description', 'Explore amusement park industry insights, ride planning guides and entertainment project ideas from Ageless Entertainments in India.')
@section('canonical', url('/blog'))
@section('body_class', 'blog-page')

@section('content')

<main class="ageless-blog">
    <section class="blog-hero">
        <div class="container">
            <div class="blog-hero-copy" data-aos="fade-right">
            <span class="blog-eyebrow"><i class="las la-newspaper" aria-hidden="true"></i> News &amp; Articles</span>
            <h1>Ideas that shape <span>extraordinary destinations.</span></h1>
            <p>Amusement park insights, attraction guides, and fresh perspectives from the world of entertainment engineering.</p>
            <a href="#latest-articles" class="blog-primary-link">Explore Our Articles <i class="las la-arrow-down" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <section class="blog-articles" id="latest-articles" aria-labelledby="articles-title">
        <div class="container">
            <div class="blog-section-heading">
                <div data-aos="fade-right">
                    <span class="blog-eyebrow blog-eyebrow-light">The Ageless Journal</span>
                    <h2 id="articles-title">Insights &amp; <span>inspiration.</span></h2>
                </div>
                <p data-aos="fade-left">Explore ideas for planning parks, choosing attractions, and bringing entertainment destinations to life.</p>
            </div>
            <div class="journal-carousel" data-journal-carousel role="region" aria-roledescription="carousel" aria-label="Journal articles">
            <div class="blog-card-grid" id="journal-arc-track">
                @forelse($blogs as $blog)
                    <article class="journal-card">
                        <a class="journal-image" href="{{ route('blog.show', $blog->slug) }}" aria-label="Read {{ $blog->title }}">
                            @if($blog->image)
                                <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}" loading="lazy" decoding="async">
                            @else
                                <div class="journal-image-placeholder"><i class="las la-newspaper" aria-hidden="true"></i></div>
                            @endif
                            <span class="journal-image-label">News &amp; Insights</span>
                            <span class="journal-image-arrow" aria-hidden="true"><i class="las la-arrow-up"></i></span>
                        </a>
                        <div class="journal-content">
                            @if($blog->published_at)
                                <time datetime="{{ $blog->published_at->toDateString() }}"><i class="las la-calendar" aria-hidden="true"></i> {{ $blog->published_at->format('d M Y') }}</time>
                            @endif
                            <h3><a href="{{ route('blog.show', $blog->slug) }}">{{ $blog->title }}</a></h3>
                            <p>{!! nl2br(e($blog->excerpt)) !!}</p>
                            <a class="journal-read-link" href="{{ route('blog.show', $blog->slug) }}">Read Article <i class="las la-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </article>
                @empty
                    <div class="journal-empty"><i class="las la-newspaper" aria-hidden="true"></i><h3>More inspiration is on its way.</h3><p>Check back soon for new articles and industry insights.</p></div>
                @endforelse
            </div>
            @if($blogs->count() > 0)
                <div class="journal-carousel-controls" hidden>
                    <p class="journal-carousel-hint">Drag to explore</p>
                    <div class="journal-carousel-navigation">
                        <button type="button" class="journal-carousel-button" data-arc-prev aria-label="Previous article" aria-controls="journal-arc-track"><i class="las la-arrow-left" aria-hidden="true"></i></button>
                        <span class="journal-carousel-count" aria-live="polite" aria-atomic="true"></span>
                        <button type="button" class="journal-carousel-button" data-arc-next aria-label="Next article" aria-controls="journal-arc-track"><i class="las la-arrow-right" aria-hidden="true"></i></button>
                    </div>
                </div>
            @endif
            </div>
            @if($blogs->hasPages())
                <div class="journal-pagination">{{ $blogs->links() }}</div>
            @endif
        </div>
    </section>

</main>
<script src="{{ asset('assets/js/blog-carousel.js') }}?v={{ filemtime(public_path('assets/js/blog-carousel.js')) }}" defer></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    function initBlogAnimations() {
        if (typeof AOS === 'undefined') return;

        AOS.init({
            duration: 1000,
            easing: 'ease-out-cubic',
            once: true,
            offset: 0,
            disable: window.matchMedia('(prefers-reduced-motion: reduce)').matches
        });
    }

    if (document.readyState === 'complete') {
        requestAnimationFrame(initBlogAnimations);
    } else {
        window.addEventListener('load', function () {
            requestAnimationFrame(initBlogAnimations);
        }, { once: true });
    }
</script>
@endsection
