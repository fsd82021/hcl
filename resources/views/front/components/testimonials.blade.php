<section class="testimonials">
    <div class="container">
        <div class="main-title"><span class="sub-title">{{ $testimonial_page->title }}</span>
            {!! $testimonial_page->description !!}
        </div>
        <div class="content">
            <div class="row">
                <div class="col-xl-5 col-lg-12">
                    <div class="testimonials-image"><img class="image img-fluid"
                            data-src="{{ asset($testimonial_page->icon) }}" alt="{{ $testimonial_page->title }}">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                    <div class="testimonials-slider owl-carousel owl-theme">
                        @foreach ($testimonials as $testimonial)
                            <div class="item"><i class="fa-solid fa-quote-right"></i>
                                {!! $testimonial->description !!}
                                <div class="author-title">
                                    <h4>{{ $testimonial->title }}</h4>
                                    <p class="position">{{ $testimonial->job_title }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
