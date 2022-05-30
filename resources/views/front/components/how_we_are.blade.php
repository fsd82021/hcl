
          <section class="who-us">
            <div class="container">
              <div class="content">
                <div class="row">
                  <div class="col-lg-7 col-12">
                    <div class="text-box" data-aos="fade-down">
                      <div class="main-title"><span class="sub-title">{{trans('site.how_we_are')}}</span>
                        <h2>{{$how_we_are->title}}</h2>
                      </div>
                      <h4>{{$how_we_are->sub_title}}</h4>
                      {!! $how_we_are->description !!}
                    </div>
                  </div>
                  <div class="col-lg-5 col-12">
                    <div class="image-box" data-aos="fade-up" data-aos-delay="100">
                      <div class="image"><img class="img-fluid" data-src="{{asset($how_we_are->icon)}}" alt="{{$how_we_are->title}}"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>
