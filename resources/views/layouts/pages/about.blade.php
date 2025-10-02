@extends('layouts.app')
@section('title', 'About Us')
@section('content')
    <div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-1.jpg">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">About Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="{{ route('home') }}">Home</a></li>
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
                    <div class="about-content">
                        {{-- <span class="sub-title">100% Natural Treatment</span> --}}
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-10 col-sm-9">
                                <h2 class="sec-title">About Allure Makeup Studio</h2>
                            </div>
                            <div class="col-lg-12 col-md-9 col-sm-11">
                                <p>Allure Makeup Studio is Dehradun’s premier destination for luxury beauty and makeover
                                    services. Known for its artistry, precision, and commitment to excellence, Allure has
                                    become the preferred choice for brides, celebrities, and beauty enthusiasts.
                                    At Allure, we believe makeup is not just about looking good—it’s about feeling
                                    confident, radiant, and empowered. Our team of highly trained makeup artists and
                                    hairstylists specialize in delivering flawless transformations tailored to your
                                    personality, skin type, and occasion.
                                    From bridal makeovers, party makeup, and fashion shoots to skin treatments, hair
                                    styling, and nail art, we offer a complete beauty experience under one roof. Every
                                    service is crafted with high-end products, personalized consultation, and attention to
                                    detail—ensuring that you shine in your own unique way.</p>
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
    <section class="vs-about-wrapper space-top space-negative-bottom">
        <div class="container">
            <div class="row text-center text-lg-start align-items-center justify-content-between flex-row-reverse">
                <div class="mt-5"></div>
                <div class="col-lg-6 col-xl-5">
                    <div class="about-content">
                        {{-- <span class="sub-title">100% Natural Treatment</span> --}}
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-10 col-sm-9">
                                <h2 class="sec-title">Mission</h2>
                            </div>
                            <div class="col-lg-12">
                                <p>At Allure Makeup Studio, our mission is to redefine beauty by blending luxury,
                                    creativity, and precision. We aim to empower every client with confidence and elegance
                                    through personalized makeup, hair, and skincare services—using premium products, expert
                                    techniques, and a warm, welcoming experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5">
                    <div class="about-content">
                        {{-- <span class="sub-title">100% Natural Treatment</span> --}}
                        <div class="row justify-content-center">
                            <div class="col-lg-12 col-md-10 col-sm-9">
                                <h2 class="sec-title">Vision</h2>
                            </div>
                            <div class="col-lg-12">
                                <p>Our vision is to become the most trusted luxury makeup and beauty destination in Dehradun
                                    and beyond, recognized for innovation, professionalism, and artistry. We aspire to set
                                    new standards in the beauty industry by offering trend-setting looks, world-class
                                    services, and nurturing long-term relationships with our clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('layouts.components.discover')
    @include('layouts.components.testimonials')
    @include('layouts.components.services')
@endsection
