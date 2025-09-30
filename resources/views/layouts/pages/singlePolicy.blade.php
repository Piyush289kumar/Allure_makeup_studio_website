@extends('layouts.app')
@section('title', $policy->title)
@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-1.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">{{ $policy->title }}</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">{{ $policy->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="vs-blog-wrapper blog-details space-top space-negative-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-lg-12">
                    <div class="vs-blog blog-single">
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a><i class="fas fa-calendar-alt"></i> {{ $policy->created_at->format('M d, Y') }}</a>
                            </div>
                            <h2 class="blog-title">{{ $policy->title }}</h2>
                            <div class="blog-text">{!! $policy->description !!}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
