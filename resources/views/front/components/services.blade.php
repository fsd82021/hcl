<div class="content">
    <div class="row">
        @foreach ($services as $service)
            <div class="col-lg-4 col-md-6 box" data-aos="fade-up" data-aos-delay="250">
                <div class="services-box">
                    <div class="image"><a href="{{route('single-service',$service->id)}}"> <img class="img-fluid"
                                data-src="{{asset($service->main_image)}}" alt="{{$service->title}}"></a></div>
                    <div class="details">
                        <div class="title">
                            <h3><a href="{{route('single-service',$service->id)}}">{{$service->title}}</a></h3>
                        </div>
                        <p>{!! substr ( $service->description , 0, 210)!!} ...</p><a
                            class="read-more" href="{{route('single-service',$service->id)}}">{{trans('site.read_more')}}<i
                                class="fa-solid fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
