<section class="single-service">
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-8">
                    <div class="things-details-content">
                        <div class="image"><img class="img-fluid"
                                data-src="{{ asset($service->main_image) }}" alt="{{ $service->title }}"></div>
                        <div class="details">
                            <div class="title">
                                <h3>{{ $service->title }}</h3>
                            </div>
                            <div class="text">
                                {!! $service->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="side-widget">
                        <div class="other-things">
                            <div class="title">
                                <h3>@lang('site.allServices')</h3>
                            </div>
                            @php
                            $url_path = parse_url( URL::full(), PHP_URL_PATH);
                            $parts = explode("/", $url_path)
                           @endphp
                            <ul>
                                @foreach (Services() as $service)
                                <li class="<?php if ((int)end($parts) == $service->id) {echo "active"; } else  {echo "";}?>"><a href="{{route('single-service',$service->id)}}">{{$service->title}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="need-support" style="background-image:url('/site/images/bgs/sidebar_support.jpg')">
                            <div class="title">
                                <h3>{{$contact_page->title}}</h3>
                                <p>{{$contact_page->sub_title}}</p>
                            </div><a class="btn" href="{{route('contact')}}">@lang('site.contact')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
