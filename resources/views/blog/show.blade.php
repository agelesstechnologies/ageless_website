@push('tailwind_styles')
@include('partials.tailwind.blog-responsive')
@include('partials.tailwind.blog-show-1')
@endpush

@push('styles')
<style>
    /* Blog detail page only: show the same translucent nav bar as the scrolled state, even at the top of the page */
    html body.blog-page.blog-article-page header.main-header.wonder-nav-header .nav-capsule-wrapper {
        background: rgba(0, 0, 0, 0.65) !important;
    }
</style>
@endpush

@extends('layouts.app')
@section('body_class', 'blog-page blog-article-page')
@push('jsonld')
@include('partials.schema.json', ['data' => array_filter([
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    'headline' => \Illuminate\Support\Str::limit($blog->title, 110, ''),
    'description' => \Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags($blog->seo_description ?: $blog->excerpt ?: $blog->content))), 155, '...', true),
    'image' => $blog->image ? [asset('storage/' . $blog->image)] : null,
    'datePublished' => optional($blog->published_at ?? $blog->created_at)->toIso8601String(),
    'dateModified' => optional($blog->updated_at)->toIso8601String(),
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => url('/blog/' . $blog->slug)],
    'author' => ['@type' => 'Organization', 'name' => 'Ageless Entertainments', 'url' => url('/')],
    'publisher' => ['@type' => 'Organization', 'name' => 'Ageless Entertainments', 'logo' => ['@type' => 'ImageObject', 'url' => asset('assets/img/nlogo.png')]],
])])
@include('partials.schema.breadcrumbs', ['crumbs' => [['Home', url('/')], ['Blog', url('/blog')], [$blog->title, url('/blog/' . $blog->slug)]]])
@endpush

@php
    $postTitle = trim(preg_replace('/\s+/', ' ', $blog->title));
    $customTitle = filled($blog->seo_title);
    if ($customTitle) {
        $postTitle = $blog->seo_title;
    } elseif (mb_strlen($postTitle) > 60) {
        $head = trim(explode(':', $postTitle, 2)[0]);
        $postTitle = mb_strlen($head) >= 25 && mb_strlen($head) <= 60 ? $head : \Illuminate\Support\Str::limit($postTitle, 60, '', true);
    }
    $postTitle = preg_replace('/\s+(of|the|and|for|in|to|a|an|with|are|is)$/i', '', $postTitle);
    if (! $customTitle && mb_strlen($postTitle) <= 45) $postTitle .= ' | Ageless';
@endphp
@section('title', $postTitle)
@section('meta_description', \Illuminate\Support\Str::limit(trim(preg_replace('/\s+/', ' ', strip_tags($blog->seo_description ?: $blog->excerpt ?: $blog->content))), 155, '...', true))
@section('canonical', url('/blog/' . $blog->slug))
@if($blog->image)
@section('og_image', asset('storage/' . $blog->image))
@endif

@section('content')

<section class="blog-detail-wrap">
    <div class="container">
        <div class="blog-detail-card">
            @if($blog->image)
                <div class="blog-detail-img">
                    <img src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}">
                </div>
            @endif

            <div class="blog-detail-content">
                @if($blog->published_at)
                    <span class="blog-date">
                        {{ optional($blog->published_at)->format('d M Y') }}
                    </span>
                @endif

                <h1>{{ $blog->title }}</h1>

                <div class="blog-content">
                    @if($blog->content === strip_tags($blog->content))
                        {!! nl2br(e($blog->content)) !!}
                    @else
                        {!! $blog->content !!}
                    @endif
                </div>

                <div class="blog-actions">
                    <a href="{{ route('blog.index') }}" class="blog-btn">Back to Blog</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
