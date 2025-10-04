@extends('layouts.app')
@section('title', 'Our Services')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-1.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Our Services</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="vs-blog-wrapper space-top space-negative-bottom">
        <div class="container">
            @foreach ($services as $blog)
                <div class="blog-fliped">
                    <div class="row justify-content-between gx-xl-0">
                        <div class="col-lg-6 col-xl-5 align-self-center order-1 order-lg-0">
                            <div class="blog-content">
                                <div class="meta-box">
                                    {{-- <a href="{{ route('service.details', $blog->slug) }}">
                                        <i class="far fa-calendar-alt"></i>{{ $blog->created_at->format('M d, Y') }}
                                    </a> --}}
                                    {{-- Optionally show comment count if available --}}
                                    {{-- <a href="#"><i class="fas fa-comment-alt"></i>{{ $blog->comments_count ?? 0 }}</a> --}}
                                </div>
                                <h2 class="blog-title fw-semibold">
                                    <a href="{{ route('service.details', $blog->slug) }}">{{ $blog->title }}</a>
                                </h2>
                                <p class="blog-text">{{ Str::limit(strip_tags($blog->body), 150) }}</p>
                                <a href="{{ route('service.details', $blog->slug) }}" class="icon-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1">
                            <div class="blog-img">
                                <a href="{{ route('service.details', $blog->slug) }}">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}"
                                        class="w-100">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- Pagination --}}
            <div class="vs-pagination pb-30" style="display: flex; justify-content: center;">
                {{ $blogLists->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </section>
@endsection
