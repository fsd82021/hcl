@extends('front.layouts.master')
@section('title')
    {{ settings()->website_title }} | {{ trans('site.about') }}
@endsection
@section('content')

      <!--breadcrumb-->
      <nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url('images/bgs/breadcrumb_bg.jpg')">
        <div class="container">
          <div class="breadcrumb-title">
            <h2>about us</h2>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">about us</li>
            </ol>
          </nav>
        </div>
      </nav>
      <!--breadcrumb-->
      <!--about-->
      <section class="about-in-page">
        <div class="container">
          <div class="content">
            <div class="row">
              <div class="col-lg-4">
                <div class="nav flex-column nav-pills" id="v-about-tab" role="tablist" aria-orientation="vertical">
                  <button class="nav-link active" id="v-about-1-tab" data-bs-toggle="pill" data-bs-target="#v-about-1" type="button" role="tab" aria-controls="v-about-1" aria-selected="true"> <i class="bi bi-check2-square"></i><span>who us</span></button>
                  <button class="nav-link" id="v-about-2-tab" data-bs-toggle="pill" data-bs-target="#v-about-2" type="button" role="tab" aria-controls="v-about-2" aria-selected="false"><i class="bi bi-check2-square"></i><span>Our Vision</span></button>
                  <button class="nav-link" id="v-about-3-tab" data-bs-toggle="pill" data-bs-target="#v-about-3" type="button" role="tab" aria-controls="v-about-3" aria-selected="false"><i class="bi bi-check2-square"></i><span>Our Mission</span></button>
                </div>
              </div>
              <div class="col-lg-8">
                <div class="tab-content" id="v-about-tabContent">
                  <div class="tab-pane fade show active" id="v-about-1" role="tabpanel" aria-labelledby="v-about-1-tab">
                    <div class="about-content">
                      <div class="image"><img class="img-fluid" data-src="images/about/who.jpg" alt="Alt"></div>
                      <p>A warm welcome to all to Hoopoe Cargo & Logistics (HCL), which is one of the strongholds of the Al Jazea Industrial Group, Saudi Arabia.</p>
                      <p>As a fast-emerging Logistics Company, HCL offers comprehensive and personalized Supply Chain Management and Logistics solutions focusing on various industries like eCommerce, Fast-Moving Consumer Goods (FMCG), Pharmaceutical Industry etc., to name a few. Our expertise does not stop there. We move beyond the traditional logistics, warehousing, transportation etc. and are well prepared to provide value-added services like COD (Cash on delivery), transport and pets insurance etc., to all our valuable clients.</p>
                      <p>HCL collaborates with the companies and small businesses and the individuals who wish to utilize our services for home relocation, pet multivendor marketing or customs clearance, apart from cargo & logistics services.</p>
                      <p>We work with individuals, companies and small businesses who wish to excel in their respective fields by optimizing their Supply Chain Management in the best possible manner. We are well aware that one solution might not be applicable and practical for all companies/individuals. For that reason, our team comes up with customized logistic plans and Supply Chain Management strategies that are entirely based on the customers’ real-time needs.</p>
                      <p>Our logistics proficiency is further backed by our continuous efforts to use updated technology and develop trending solutions so that the requirements of all our clients are dealt with effectively and conveniently. If you are facing any of these below-mentioned challenges, get in touch with us:</p>
                      <ul>
                        <li>A lot of customer complaints regarding stock, late deliveries etc.;</li>
                        <li>The increasing gap between the growing demands and warehousing requirements;</li>
                        <li>Poor last-mile logistics/forwarding;</li>
                        <li>Lack of effective distribution planning;</li>
                        <li>Incapable of utilizing and managing company resources and assets.</li>
                      </ul>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-about-2" role="tabpanel" aria-labelledby="v-about-2-tab">
                    <div class="about-content">
                      <div class="image"><img class="img-fluid" data-src="images/about/vision.jpg" alt="Alt"></div>
                      <p>HCL’s vision is to reach newer heights in the Cargo & Logistics Sector in the upcoming years to be in the top ten companies in this field in the Kingdom of Saudi Arabia.</p>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="v-about-3" role="tabpanel" aria-labelledby="v-about-3-tab">
                    <div class="about-content">
                      <div class="image"><img class="img-fluid" data-src="images/about/mission.jpg" alt="Alt"></div>
                      <h3>To achieve this vision, HCL and its employees work towards the following mission:</h3>
                      <ul>
                        <li>Keep offering sustainable logistic solutions to all;</li>
                        <li>Keep maintaining the highest standards of quality;</li>
                        <li>Keep providing pocket-friendly yet innovative solutions and services to all.</li>
                      </ul>
                      <p>Get in touch with our team to know more about how our partnership can prove supportive and helpful for your company to become better and productive in your respective area of operations.</p>
                      <p>We promise to assist you in becoming a pioneer in your field through our improved, efficient and customized Logistics and Supply Chain Management solutions.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--about-->
      <!--logistics-->
      <section class="logistics" style="background-image:url('images/bgs/pattern-8.png')">
        <div class="container">
          <div class="main-title">
            <h2>about us</h2>
            <p>Whether you require distribution or fulfillment, defined freight forwarding, or a complete supply chain solution, GL can provide you with a customized solution tailored to your needs.</p>
            <p>Aliquam pretium ullamcorper dolor nec pretium. Proin lacinia feugiat justo sit amet vulputate.</p>
          </div>
          <div class="content">
            <div class="tab-content">
              <div class="tab-pane fade show active" id="logistics-1" role="tabpanel" aria-labelledby="logistics-1-tab">
                <div class="progress-logistics">
                  <div class="progress-box">
                    <h3 class="progress-title"> <i class="bi bi-check2-square"></i>Air Freight</h3>
                    <div class="progress">
                      <div class="progress-bar" style="width:65%;">
                        <div class="progress-value">65%</div>
                      </div>
                    </div>
                  </div>
                  <div class="progress-box">
                    <h3 class="progress-title"> <i class="bi bi-check2-square"></i>Ocean Freight</h3>
                    <div class="progress">
                      <div class="progress-bar" style="width:87%;">
                        <div class="progress-value">87%</div>
                      </div>
                    </div>
                  </div>
                  <div class="progress-box">
                    <h3 class="progress-title"> <i class="bi bi-check2-square"></i>Road Freight</h3>
                    <div class="progress">
                      <div class="progress-bar" style="width:25%;">
                        <div class="progress-value">25%</div>
                      </div>
                    </div>
                  </div>
                  <div class="progress-box">
                    <h3 class="progress-title"> <i class="bi bi-check2-square"></i>Warehousing</h3>
                    <div class="progress">
                      <div class="progress-bar" style="width:77%;">
                        <div class="progress-value">77%</div>
                      </div>
                    </div>
                  </div>
                  <div class="progress-box">
                    <h3 class="progress-title"> <i class="bi bi-check2-square"></i>Expedited Services</h3>
                    <div class="progress">
                      <div class="progress-bar" style="width:66%;">
                        <div class="progress-value">66%</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--logistics-->
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
