@push('tailwind_styles')
@include('partials.tailwind.home-faq')
@endpush

@extends('layouts.app')

@section('title', 'FAQ | Amusement Park & Ride Questions | Ageless')
@section('meta_description', 'Answers to common questions about planning, building and installing amusement parks and attractions with Ageless Entertainments.')
@section('canonical', url('/faq'))
@section('body_class', 'faq-page')

@section('content')

<section class="products-hero-wrapper ![min-height:40vh] ![padding:130px_0_60px_0]">
    <div class="products-hero-overlay"></div>
    <div class="container products-hero-container">
        <h1 class="products-hero-title">Frequently Asked Questions</h1>
        <p class="products-hero-subheading">Everything you need to know before starting your next project.</p>
    </div>
</section>

@include('partials.home-faq')

@endsection
