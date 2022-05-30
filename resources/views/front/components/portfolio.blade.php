<div class="content">
    <div class="filters">
        <ul>
            <li class="active" data-filter="*">@lang('site.all')</li>
            @foreach ($categories as $category)
                <li data-filter=".cat-{{ $category->id }}">{{ $category->title }}</li>
            @endforeach
        </ul>
    </div>
    <div class="portfolio-grid row">
        @foreach ($portfolios as $portfolio)
            <div class="col-lg-4 col-md-6 col-sm-12 portfolio-column cat-{{ $portfolio->category_id }}">
                <div class="portfolio-box" data-aos="fade-up" data-wow-delay="100">
                    <div class="img-holder"><img data-src="{{ asset($portfolio->main_image) }}" alt="image"><a
                            class="portfolio-hover img-popup" data-src="{{ asset($portfolio->main_image) }}"
                            data-fancybox="demo">
                            <div class="hover-content"><i class="fa-solid fa-plus"></i></div>
                        </a></div>
                    <div class="text">
                        <h3 class="title">{{ $portfolio->title }}
                        </h3>
                        <p class="cat-link">{{ $portfolio->catrgory->title }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @php
        $route = Route::currentRouteName();
    @endphp
    @if ($route == 'home')
        <div class="portfolio-btn"><a class="btn"
                href="{{ route('front.portfolio') }}">@lang('site.allProjects')<i class="fa-solid fa-chevron-right"></i></a>
        </div>
    @endif
</div>
