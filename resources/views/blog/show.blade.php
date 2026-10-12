@push('tailwind_styles')
@include('partials.tailwind.blog-responsive')
@include('partials.tailwind.blog-show-1')
@endpush

@extends('layouts.app')
@section('body_class', 'blog-page blog-article-page')

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
