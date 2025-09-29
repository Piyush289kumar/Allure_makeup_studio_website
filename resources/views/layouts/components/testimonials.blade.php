<section class="vs-testimonial-wrapper space-top space-negative-bottom">
    <div class="container">
        <div class="row vs-carousel" data-slide-show="2" data-dots="true" data-arrows="true">
            
            @foreach ($testimonials as $testimonial)
                <div class="col-xl-6">
                    <div class="vs-testimonial-box">
                        <div class="quote-icon">
                            <img src="{{ asset('assets/img/icon/quote-white.png') }}" alt="Quote Icon">
                        </div>
                        <p class="testimonial-text">{{ $testimonial->review }}</p>
                        <h3 class="author-name h5">{{ $testimonial->name }}</h3>
                        @if($testimonial->designation)
                            <p class="author-designation">{{ $testimonial->designation }}</p>
                        @endif
                        <div class="testimonial-rating">
                            @for ($i = 0; $i < 5; $i++)
                                <i class="fas fa-star"></i>
                            @endfor
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
