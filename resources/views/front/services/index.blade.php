@extends('front.layouts.master')
@section('title')
    {{ settings()->website_title }} | {{ trans('site.portfolio') }}
@endsection
@section('content')
    <!-- Page Content -->
      <!--breadcrumb-->
      <nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url('images/bgs/breadcrumb_bg.jpg')">
        <div class="container">
          <div class="breadcrumb-title">
            <h2>services</h2>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">services</li>
            </ol>
          </nav>
        </div>
      </nav>
      <!--breadcrumb-->
      <!--services-->
      <section class="services-in-page">
        <div class="container">
          <div class="content">
            <div class="row">
              <div class="col-lg-4 col-md-6">
                <div class="single-services" data-aos="fade-up">
                  <div class="services-thumb"><a href="single-service.html"><img class="img-fluid" data-src="images/services/01.jpg" alt="img"></a></div>
                  <div class="services-content">
                    <div class="services-icon"><i class="bi bi-check2-all"></i></div><a href="single-service.html">
                      <h3>Customs Clearance</h3></a>
                    <p>The successful operation of your business in any region depends entirely on whether you can get</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services" data-aos="fade-up" data-aos-delay="100">
                  <div class="services-thumb"><a href="single-service.html"><img class="img-fluid" data-src="images/services/02.jpg" alt="img"></a></div>
                  <div class="services-content">
                    <div class="services-icon"><i class="bi bi-check2-all"></i></div><a href="single-service.html">
                      <h3>Fulfilment/Last Mile</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services" data-aos="fade-up" data-aos-delay="200">
                  <div class="services-thumb"><a href="single-service.html"><img class="img-fluid" data-src="images/services/03.jpg" alt="img"></a></div>
                  <div class="services-content">
                    <div class="services-icon"><i class="bi bi-check2-all"></i></div><a href="single-service.html">
                      <h3>Home Relocation</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services" data-aos="fade-up" data-aos-delay="300">
                  <div class="services-thumb"><a href="single-service.html"><img class="img-fluid" data-src="images/services/01.jpg" alt="img"></a></div>
                  <div class="services-content">
                    <div class="services-icon"><i class="bi bi-check2-all"></i></div><a href="single-service.html">
                      <h3>Customs Clearance</h3></a>
                    <p>The successful operation of your business in any region depends entirely on whether you can get</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services" data-aos="fade-up" data-aos-delay="400">
                  <div class="services-thumb"><a href="single-service.html"><img class="img-fluid" data-src="images/services/02.jpg" alt="img"></a></div>
                  <div class="services-content">
                    <div class="services-icon"><i class="bi bi-check2-all"></i></div><a href="single-service.html">
                      <h3>Fulfilment/Last Mile</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services" data-aos="fade-up" data-aos-delay="500">
                  <div class="services-thumb"><a href="single-service.html"><img class="img-fluid" data-src="images/services/03.jpg" alt="img"></a></div>
                  <div class="services-content">
                    <div class="services-icon"><i class="bi bi-check2-all"></i></div><a href="single-service.html">
                      <h3>Home Relocation</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services" data-aos="fade-up" data-aos-delay="600">
                  <div class="services-thumb"><a href="single-service.html"><img class="img-fluid" data-src="images/services/01.jpg" alt="img"></a></div>
                  <div class="services-content">
                    <div class="services-icon"><i class="bi bi-check2-all"></i></div><a href="single-service.html">
                      <h3>Customs Clearance</h3></a>
                    <p>The successful operation of your business in any region depends entirely on whether you can get</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services" data-aos="fade-up" data-aos-delay="700">
                  <div class="services-thumb"><a href="single-service.html"><img class="img-fluid" data-src="images/services/02.jpg" alt="img"></a></div>
                  <div class="services-content">
                    <div class="services-icon"><i class="bi bi-check2-all"></i></div><a href="single-service.html">
                      <h3>Fulfilment/Last Mile</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6">
                <div class="single-services" data-aos="fade-up" data-aos-delay="800">
                  <div class="services-thumb"><a href="single-service.html"><img class="img-fluid" data-src="images/services/03.jpg" alt="img"></a></div>
                  <div class="services-content">
                    <div class="services-icon"><i class="bi bi-check2-all"></i></div><a href="single-service.html">
                      <h3>Home Relocation</h3></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--services-->
      <!--partners-->
      <section class="partners">
        <div class="container">
          <div class="content">
            <div class="partners-carousel owl-carousel owl-theme">
              <div class="item"><img class="img-fluid" data-src="images/partners/01.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/02.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/03.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/04.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/05.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/06.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/07.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/08.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/09.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/10.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/11.jpg" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/12.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/13.png" alt="image"></div>
              <div class="item"><img class="img-fluid" data-src="images/partners/14.png" alt="image"></div>
            </div>
          </div>
        </div>
      </section>
      <!--partners-->

@endsection
