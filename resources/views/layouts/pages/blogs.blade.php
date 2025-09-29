@extends('layouts.app')

@section('title', 'Blogs')

@section('content')


    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-1.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Our Blog</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Our Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{--     
    <section class="vs-blog-wrapper space-top space-negative-bottom">
        <div class="container">
            <div class="blog-fliped">
                <div class="row justify-content-between gx-xl-0">
                    <div class="col-lg-6 col-xl-5 align-self-center order-1 order-lg-0">
                        <div class="blog-content">
                            <div class="meta-box"><a href="blog.html"><i class="far fa-calendar-alt"></i>Dec 12, 2022</a> <a
                                    href="blog.html"><i class="fas fa-comment-alt"></i>21</a></div>
                            <h2 class="blog-title fw-semibold"><a href="blog-details.html">Hair thinning: what can you do
                                    about it?</a></h2>
                            <p class="blog-text">Alienum phaedrum torquato eu, vis detraxit Mei an per m vs iculaeuripidis
                                Alienum phaedrum vis detraxit periculis a enu quato eu, ienum phaedrume vis detraxit.</p><a
                                href="blog-details.html" class="icon-btn"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-3-1.jpg"
                                    alt="Blog Image" class="w-100"></a></div>
                    </div>
                </div>
            </div>
            <div class="blog-fliped">
                <div class="row justify-content-between gx-xl-0">
                    <div class="col-lg-6 col-xl-5 align-self-center order-1 order-lg-0">
                        <div class="blog-content">
                            <div class="meta-box"><a href="blog.html"><i class="far fa-calendar-alt"></i>Dec 12, 2022</a> <a
                                    href="blog.html"><i class="fas fa-comment-alt"></i>21</a></div>
                            <h2 class="blog-title fw-semibold"><a href="blog-details.html">Do you really know what’s your
                                    shampoo?</a></h2>
                            <p class="blog-text">Alienum phaedrum torquato eu, vis detraxit Mei an per m vs iculaeuripidis
                                Alienum phaedrum vis detraxit periculis a enu quato eu, ienum phaedrume vis detraxit.</p><a
                                href="blog-details.html" class="icon-btn"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-3-2.jpg"
                                    alt="Blog Image" class="w-100"></a></div>
                    </div>
                </div>
            </div>
            <div class="blog-fliped">
                <div class="row justify-content-between gx-xl-0">
                    <div class="col-lg-6 col-xl-5 align-self-center order-1 order-lg-0">
                        <div class="blog-content">
                            <div class="meta-box"><a href="blog.html"><i class="far fa-calendar-alt"></i>Dec 12, 2022</a> <a
                                    href="blog.html"><i class="fas fa-comment-alt"></i>21</a></div>
                            <h2 class="blog-title fw-semibold"><a href="blog-details.html">What is this magic ingredient
                                    Olaplex?</a></h2>
                            <p class="blog-text">Alienum phaedrum torquato eu, vis detraxit Mei an per m vs iculaeuripidis
                                Alienum phaedrum vis detraxit periculis a enu quato eu, ienum phaedrume vis detraxit.</p><a
                                href="blog-details.html" class="icon-btn"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-3-3.jpg"
                                    alt="Blog Image" class="w-100"></a></div>
                    </div>
                </div>
            </div>
            <div class="blog-fliped">
                <div class="row justify-content-between gx-xl-0">
                    <div class="col-lg-6 col-xl-5 align-self-center order-1 order-lg-0">
                        <div class="blog-content">
                            <div class="meta-box"><a href="blog.html"><i class="far fa-calendar-alt"></i>Dec 12, 2022</a> <a
                                    href="blog.html"><i class="fas fa-comment-alt"></i>21</a></div>
                            <h2 class="blog-title fw-semibold"><a href="blog-details.html">Fringe Benefits. Do fringes suit
                                    everyone?</a></h2>
                            <p class="blog-text">Alienum phaedrum torquato eu, vis detraxit Mei an per m vs iculaeuripidis
                                Alienum phaedrum vis detraxit periculis a enu quato eu, ienum phaedrume vis detraxit.</p><a
                                href="blog-details.html" class="icon-btn"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-3-4.jpg"
                                    alt="Blog Image" class="w-100"></a></div>
                    </div>
                </div>
            </div>
            <div class="blog-fliped">
                <div class="row justify-content-between gx-xl-0">
                    <div class="col-lg-6 col-xl-5 align-self-center order-1 order-lg-0">
                        <div class="blog-content">
                            <div class="meta-box"><a href="blog.html"><i class="far fa-calendar-alt"></i>Dec 12, 2022</a>
                                <a href="blog.html"><i class="fas fa-comment-alt"></i>21</a></div>
                            <h2 class="blog-title fw-semibold"><a href="blog-details.html">Need to know about allergy skin
                                    tests</a></h2>
                            <p class="blog-text">Alienum phaedrum torquato eu, vis detraxit Mei an per m vs iculaeuripidis
                                Alienum phaedrum vis detraxit periculis a enu quato eu, ienum phaedrume vis detraxit.</p><a
                                href="blog-details.html" class="icon-btn"><i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-0 order-lg-1">
                        <div class="blog-img"><a href="blog-details.html"><img src="assets/img/blog/blog-3-5.jpg"
                                    alt="Blog Image" class="w-100"></a></div>
                    </div>
                </div>
            </div>
            <div class="vs-pagination pb-30">
                <ul>
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fas fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </section> --}}



    <section class="vs-blog-wrapper space-top space-negative-bottom">
        <div class="container">
            @foreach ($blogLists as $blog)
                <div class="blog-fliped">
                    <div class="row justify-content-between gx-xl-0">
                        <div class="col-lg-6 col-xl-5 align-self-center order-1 order-lg-0">
                            <div class="blog-content">
                                <div class="meta-box">
                                    <a href="{{ route('blog.details', $blog->slug) }}">
                                        <i class="far fa-calendar-alt"></i>{{ $blog->created_at->format('M d, Y') }}
                                    </a>
                                    {{-- Optionally show comment count if available --}}
                                    {{-- <a href="#"><i class="fas fa-comment-alt"></i>{{ $blog->comments_count ?? 0 }}</a> --}}
                                </div>
                                <h2 class="blog-title fw-semibold">
                                    <a href="{{ route('blog.details', $blog->slug) }}">{{ $blog->title }}</a>
                                </h2>
                                <p class="blog-text">{{ Str::limit(strip_tags($blog->body), 150) }}</p>
                                <a href="{{ route('blog.details', $blog->slug) }}" class="icon-btn">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-1">
                            <div class="blog-img">
                                <a href="{{ route('blog.details', $blog->slug) }}">
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
