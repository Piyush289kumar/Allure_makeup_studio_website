<div class="space-top space-negative-bottom bg-light">
    <div class="container">
        <h2 class="sec-title text-center mb-5">Our Services</h2>
        <div class="row gx-2 vs-carousel" data-slide-show="4" data-lg-slide-show="3" data-sm-slide-show="2" data-dots="true"
            data-speed="1500">
            @foreach ($services as $service)
                <div class="col-xl-3 mb-30">
                    <div class="vs-trends-box">
                        <div class="trends-img"><img src="{{ asset('storage/' . $service->image) }}"
                                alt="{{ $service->title }}" alt="trends img" class="w-100">
                        </div>
                        <div class="trends-header">
                            <h3 class="trends-label">{{ $service->title }}</h3>
                        </div>
                        <div class="trends-body">
                            <a href="{{ route('service.details', $service->slug) }}">
                                <div class="trends-content">
                                    <h4 class="trends-title"><a class="text-reset"
                                            href="{{ route('service.details', $service->slug) }}">{{ $service->title }}</a>
                                    </h4>
                                    <p class="trends-text">
                                        {{ Str::limit(strip_tags($service->short_description), 50, '...') }}</p>
                                    {{-- <div class="blog-text text-white" style="color: #fff;">{!! $service->body !!}</div> --}}
                                </div>
                            </a>
                            <div class="trends-actions"><span class="price"></span> <a
                                    href="{{ route('service.details', $service->slug) }}" class="icon-btn"><i
                                        class="fas fa-chevron-right"></i></a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
