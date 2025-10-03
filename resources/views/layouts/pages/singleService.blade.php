@extends('layouts.app')
@section('title', $blog->title)
@section('content')

    <div class="breadcumb-wrapper" data-bg-src="{{ asset('assets/img/breadcumb/breadcumb-1.jpg') }}">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">{{ $blog->title }}</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="active">{{ $blog->title }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section class="vs-blog-wrapper blog-details space-top space-negative-bottom">
        <div class="container">
            <div class="row gx-30">
                <div class="col-lg-8">
                    <div class="vs-blog blog-single">
                        <div class="blog-img">
                            <img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="blog-content">
                            {{-- <div class="blog-meta">
                                <a><i class="fas fa-calendar-alt"></i> {{ $blog->created_at->format('M d, Y') }}</a>
                            </div> --}}
                            <h2 class="blog-title">{{ $blog->title }}</h2>
                            <div class="blog-text">{!! $blog->body !!}</div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget">
                            <h3 class="widget_title">Our Services</h3>
                            <div class="recent-post-wrap">
                                @foreach ($recentBlogs as $recent)
                                    <div class="recent-post">
                                        <div class="media-img">
                                            <a href="{{ route('service.details', $recent->slug) }}">
                                                <img src="{{ asset('storage/' . $recent->image) }}"
                                                    alt="{{ $recent->title }}">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="post-title">
                                                <a class="text-inherit" href="{{ route('service.details', $recent->slug) }}">
                                                    {{ $recent->title }}
                                                </a>
                                            </h4>
                                            {{-- <div class="recent-post-meta">
                                                <a href="{{ route('service.details', $recent->slug) }}">
                                                    <i class="fal fa-calendar-alt"></i>
                                                    {{ $recent->created_at->format('M d, Y') }}
                                                </a>
                                            </div> --}}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </aside>
                </div>
            </div>
        </div>
    </section>

@endsection
