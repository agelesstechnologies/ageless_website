@extends('layouts.app')
@section('body_class', 'blog-page blog-article-page')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/blog-responsive.css') }}?v={{ filemtime(public_path('assets/css/blog-responsive.css')) }}">
@endpush

@section('content')

<style>
    .blog-detail-wrap {
        padding: 90px 0;
        background: #f8f9fb;
    }

    .blog-detail-card {
        background: #fff;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 15px 45px rgba(0,0,0,.08);
    }

    .blog-detail-img img {
        width: 100%;
        height: 480px;
        object-fit: cover;
        display: block;
    }

    .blog-detail-content {
        padding: 45px;
    }

    .blog-date {
        display: inline-block;
        background: #ff9800;
        color: #fff;
        padding: 7px 16px;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 700;
        margin-bottom: 18px;
    }

    .blog-detail-content h1 {
        font-size: 42px;
        font-weight: 800;
        margin-bottom: 24px;
        color: #111827;
    }

    .blog-content {
        color: #444;
        line-height: 1.9;
        font-size: 16px;
        border-top: 1px solid #eee;
        padding-top: 28px;
    }

    .blog-content p {
        margin-bottom: 18px;
    }

    .blog-actions {
        margin-top: 35px;
    }

    .blog-btn {
        display: inline-block;
        padding: 13px 28px;
        border-radius: 40px;
        background: #111827;
        color: #fff;
        font-weight: 700;
        text-decoration: none;
        transition: .3s;
    }

    .blog-btn:hover {
        background: #ff9800;
        color: #fff;
        transform: translateY(-3px);
    }

    @media(max-width: 768px) {
        .blog-detail-img img {
            height: 280px;
        }

        .blog-detail-content {
            padding: 28px;
        }

        .blog-detail-content h1 {
            font-size: 30px;
        }
    }
</style>


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
                    {!! $blog->content !!}
                </div>

                <div class="blog-actions">
                    <a href="{{ route('blog.index') }}" class="blog-btn">Back to Blog</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
