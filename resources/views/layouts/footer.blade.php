<footer class="footer-wrapper footer-layout2 bg-dark" data-bg-src="{{ asset('assets/img/bg/bg-fooer-2-1.jpg') }}">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <div class="footer-logo mb-3 mb-xl-5"><a href="{{ route('home') }}"><img
                            src="{{ asset('assets/img/logo-mix.png') }}" alt="Allure Makeup Studio" style="width: 250px;"></a></div>
            </div>
            {{-- <div class="col-md-10 col-lg-8 col-xl-6 footer-subscribe mb-3 pb-4">
                <h2 class="fs-26 text-white mb-4">Sign Up To Our Newsletter</h2>
                <form action="#" class="footer-subscribe"><input type="email" class="form-control"
                        placeholder="Enter your email address"> <button type="submit" class="submit-btn"><span
                            class="hidden"><i class="far fa-arrow-right"></i></span>
                        <span class="default"><i class="fal fa-envelope"></i></span></button></form>
            </div> --}}
            <div class="col-12">
                <div class="vs-social social-white mb-4 pb-3">
                    <h3 class="mb-3 text-white h4">Follow Us:</h3>
                    <ul>
                        @if ($appConfig)
                            @if ($appConfig->facebook_link)
                                <li><a href="{{ $appConfig->facebook_link }}" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                            @endif
                            @if ($appConfig->google_plus_link)
                                <li><a href="{{ $appConfig->google_plus_link }}" target="_blank"><i
                                            class="fab fa-google-plus-g"></i></a></li>
                            @endif
                            @if ($appConfig->twitter_link)
                                <li><a href="{{ $appConfig->twitter_link }}" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                            @endif
                            @if ($appConfig->linkedin_link)
                                <li><a href="{{ $appConfig->linkedin_link }}" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            @endif
                            @if ($appConfig->instagram_link)
                                <li><a href="{{ $appConfig->instagram_link }}" target="_blank"><i
                                            class="fab fa-instagram"></i></a></li>
                            @endif
                            @if ($appConfig->youtube_link)
                                <li><a href="{{ $appConfig->youtube_link }}" target="_blank"><i
                                            class="fab fa-youtube"></i></a></li>
                            @endif
                            @if ($appConfig->whatsapp_link)
                                <li><a href="{{ $appConfig->whatsapp_link }}" target="_blank"><i
                                            class="fab fa-whatsapp"></i></a></li>
                            @endif
                        @endif
                    </ul>
                </div>


                <div>
                    @foreach ($policies as $policy)
                        <a href="{{ route('policy.details', $policy->slug) }}" class="text-white fw-medium mb-2">
                            {{ $policy->title }}
                        </a>
                        @if (!$loop->last)
                            |
                        @endif
                    @endforeach
                </div>


                <p class="text-white fw-medium mb-0">Copyright &copy; </i> 2025 <a class="text-white"
                        href="{{ route('home') }}"></a> - All rights reserved by <a class="text-white">Allure Makeup
                        Studio</a>.</p>
                <p class="text-white fw-medium mb-0">Developed by </i><a class="text-white"
                        href="https://vipprow.com">Vipprow.</a></p>
            </div>
        </div>
    </div>
</footer><a href="#" class="scrollToTop scroll-btn"><i class="fas fa-arrow-up"></i></a>
<script src="{{ asset('assets/js/vendor/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/app.min.js') }}"></script>
<script src="{{ asset('assets/js/vscustom-carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/ajax-mail.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
