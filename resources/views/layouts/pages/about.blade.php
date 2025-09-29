@extends('layouts.app')
@section('title', 'About Us')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-1.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="vs-about-wrapper space-top space-negative-bottom">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between flex-row-reverse">
                <div class="col-lg-6 col-xl-6">
                    <div class="transform-banner mb-30"><img src="assets/img/about/about-1-1.jpg" alt="ABout Image"></div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="about-content"><span class="sub-title">100% Natural Treatment</span>
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-10 col-sm-9">
                                <h2 class="sec-title">Trendy and award winning salons</h2>
                            </div>
                            <div class="col-lg-12 col-md-9 col-sm-11">
                                <p>Alienum phaedrum torquatos nec eu, vis detraxit periculis a is in mei. Mei an
                                    periculaeuripidis, hincartem ei est Alienum drum torquatos nec eu, vis detraxit.</p>
                            </div>
                            <div class="col-lg-12 col-md-8 col-sm-10 pt-xl-2">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6 col-xl-6 mb-20">
                                        <h3 class="fw-semibold fs-22 mb-1 mb-lg-2">Contact</h3>
                                        <p class="mb-1"><a class="text-inherit d-block" href="tel:2129799800">(212)
                                                979-9800</a><a class="text-inherit"
                                                href="mailto:username@domain.com">username@domain.com</a></p>
                                        <p class="mb-0"><span class="d-block">336 E 5th Street</span><span>New York, NY
                                                10003</span></p>
                                    </div>
                                    <div class="col-sm-6 col-lg-6 col-xl-6 mb-20">
                                        <h3 class="fw-semibold fs-22 mb-1 mb-lg-2">Hours</h3>
                                        <p class="mb-1"><span class="d-block">Monday to Friday</span><span> 11am –
                                                8pm</span></p>
                                        <p class="mb-0"><span class="d-block">Saturday to Sunday</span><span> 10am –
                                                6pm</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.components.offer')
    {{-- @include('layouts.components.gallery') --}}
    {{-- <div data-bg-src="assets/img/bg/awards-bg-1.jpg">
        <section class="awards-sec-wrapper space-top space-negative-bottom">
            <div class="container">
                <div class="title-area text-center">
                    <div class="sec-icon"><img src="assets/img/icon/sec-icon.png" alt="Section Title"></div><span
                        class="sub-title">Some of Our Awards</span>
                    <h2 class="sec-title text-uppercase">Our Achievements</h2>
                </div>
                <div class="row vs-carousel" data-slide-show="4" data-md-slide-show="3">
                    <div class="col-xl-3">
                        <div class="awards-box">
                            <div class="awards-img"><img src="assets/img/about/award-1-1.png" alt="Image"></div>
                            <h3 class="awards-title">Award 1995</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="awards-box">
                            <div class="awards-img"><img src="assets/img/about/award-1-2.png" alt="Image"></div>
                            <h3 class="awards-title">Color Award 1995</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="awards-box">
                            <div class="awards-img"><img src="assets/img/about/award-1-3.png" alt="Image"></div>
                            <h3 class="awards-title">best web award</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="awards-box">
                            <div class="awards-img"><img src="assets/img/about/award-1-4.png" alt="Image"></div>
                            <h3 class="awards-title">Gift Certificate</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="awards-box">
                            <div class="awards-img"><img src="assets/img/about/award-1-1.png" alt="Image"></div>
                            <h3 class="awards-title">Award 1995</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="awards-box">
                            <div class="awards-img"><img src="assets/img/about/award-1-2.png" alt="Image"></div>
                            <h3 class="awards-title">Color Award 1995</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="awards-box">
                            <div class="awards-img"><img src="assets/img/about/award-1-3.png" alt="Image"></div>
                            <h3 class="awards-title">best web award</h3>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="awards-box">
                            <div class="awards-img"><img src="assets/img/about/award-1-4.png" alt="Image"></div>
                            <h3 class="awards-title">Gift Certificate</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="pattern-text-img text-center px-2 px-md-5" data-sec-pos="bottom-half" data-pos-for="#location-sec">
            <img src="assets/img/shape/text-pattern.png" alt="Pattern Image">
        </div>
    </div> --}}
    @include('layouts.components.discover')
    @include('layouts.components.testimonials')
    @include('layouts.components.services')
@endsection
