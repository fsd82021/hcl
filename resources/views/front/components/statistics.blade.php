<section class="statistics">
    <div class="container">
        <div class="main-title"><span class="sub-title">{{$statistic_page->title}}</span>
            <h2>{{$statistic_page->sub_title}}</h2>
        </div>
        <div class="content">
            <div class="about-boxs">
                <div class="row">
                    @foreach ($statistics as $statistic)
                        <div class="col-lg-3 col-md-6 col-12 col">
                            <div class="statistics-box">
                                <div class="icon"><i class="{{$statistic->icon}}"></i></div>
                                <div class="number"><span class="counter">{{$statistic->number}}</span><span>+</span></div>
                                <div class="text">
                                    <h3>{{$statistic->title}}</h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
