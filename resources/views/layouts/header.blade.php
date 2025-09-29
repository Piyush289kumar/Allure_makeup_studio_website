{{-- <div class="preloader"><button class="vs-btn preloaderCls">Cancel Preloader</button>
        <div class="preloader-inner"><img src="assets/img/logo.png" alt="Allure Makeup Studio"> <span class="loader"></span></div>
    </div> --}}
<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center"><button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo"><a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-mobile.png') }}"
                    alt="Allure Makeup Studio"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('blog.index') }}">Blogs</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="header-top-style2 bg-black d-none d-md-block">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto"><button type="button" class="hamburger-btn vs-menu-toggle"><span class="bar"><span
                            class="inner"></span> <span class="hidden"></span></span></button>
            </div>
            <div class="col-auto d-none d-md-block">
                <p class="text-white mb-0"><u class="fw-semibold">Test</u> - Lorem ipsum dolor sit amet consectetur
                    adipisicing elit.</p>
            </div>
            <div class="col-auto"><a href="cart.html" class="cart-icon text-white">
                    {{-- <i class="fal fa-shopping-cart"></i> --}}
                    <span class="badge bg-theme"></span></a></div>
        </div>
    </div>
</div>
<header class="vs-header header-layout2">
    <div class="header-transparent">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto d-none d-lg-block">
                    <div class="outline-social">
                        <ul>
                            @if (!empty($appConfig->facebook_link))
                                <li><a href="{{ $appConfig->facebook_link }}" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if (!empty($appConfig->google_plus_link))
                                <li><a href="{{ $appConfig->google_plus_link }}" target="_blank"><i
                                            class="fab fa-google-plus-g"></i></a></li>
                            @endif
                            @if (!empty($appConfig->twitter_link))
                                <li><a href="{{ $appConfig->twitter_link }}" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                            @endif
                            @if (!empty($appConfig->linkedin_link))
                                <li><a href="{{ $appConfig->linkedin_link }}" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            @endif
                            @if (!empty($appConfig->instagram_link))
                                <li><a href="{{ $appConfig->instagram_link }}" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                            @endif
                            @if (!empty($appConfig->youtube_link))
                                <li><a href="{{ $appConfig->youtube_link }}" target="_blank"><i
                                            class="fab fa-youtube"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-9 col-sm-auto">
                    <div class="header-logo"><a href="{{ route('home') }}"><img
                                src="{{ asset('assets/img/logo-mix.png') }}" alt="Allure Makeup Studio"></a>
                    </div>
                </div>
                <div class="col col-sm-auto text-end">
                    <button class="vs-menu-toggle d-inline-block d-md-none">
                        {{-- <i class="fas fa-bars"></i> --}}
                    </button>
                    <div class="header-btn d-none d-md-block"><a href="{{ route('contact') }}" class="text-white">
                            {{-- <i class="fal fa-map-marker-alt"></i> --}}
                        </a> <a href="{{ route('contact') }}" class="vs-btn outline-white">Book Now</a></div>
                </div>
            </div>
        </div>
    </div>
</header>
