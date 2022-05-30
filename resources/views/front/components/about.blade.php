<section class="about-in-page">
    <div class="container">
        <div class="content" id="about">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="image-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="image"><img class="img-fluid" data-src="{{ asset($about->icon) }}"
                                alt="{{ $about->title }}"></div>
                        <div class="about-meta">
                            <div class="about-meta-title ct-circle-type">
                                <svg id="tutorial" data-name="tutorial" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 144.48 144.48">
                                    <path id="ct-about-curve"
                                        d="M242.93,123A71.74,71.74,0,1,1,171.2,51.22,71.73,71.73,0,0,1,242.93,123Z"
                                        transform="translate(-98.96 -50.72)"></path>
                                    <text fill="url(#ct-circle-text)">
                                        <textpath href="#ct-about-curve">{{ $about->title }}.</textpath>
                                    </text>
                                </svg>
                            </div>
                            <div class="ct-about-year ct-counter-number-value" data-duration="2000"
                                data-to-value="2021">2022</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="text-box" data-aos="fade-down">
                        <div class="main-title"><span class="sub-title"> @lang('site.about')</span>
                            <h2>{{ $about->title }}</h2>
                        </div>
                        <h4>{{ $about->sub_title }}</h4>
                        {!! $about->description !!}
                        @php
                            $route = Route::currentRouteName();
                        @endphp
                        @if ($route == 'home')
                            <div class="about-btn"><a class="btn" href="{{route('about')}}">@lang('site.moreabout')<i
                                        class="fa-solid fa-chevron-right"></i></a></div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
