@extends('front.layouts.master')
@section('title')
    {{ settings()->website_title }} | {{ trans('site.home') }}
@endsection
@section('content')
    <!--main slider-->

    <!--main slider-->
    <section class="main-slider" style="background-image:url('images/slider/slider_img_bg.jpg')">
        <div class="container">
            <div class="content">
                <div class="text">
                    <h1><span class="dot dot1"></span>HCL- The Cargo & Logistics Company You Have Been Waiting
                        For!<span class="dot dot2"></span></h1>
                    <div class="slider owl-carousel owl-theme">
                        <h2>Large enough to handle, small enough to care</h2>
                        <h2>Large enough to handle, small enough to care</h2>
                        <h2>Large enough to handle, small enough to care</h2>
                    </div>
                </div>
                <div class="mouse-arrow"><a href="#about">
                        <div class="mouse-dots">...</div>
                        <div class="arrow"> <i class="bi bi-chevron-double-down"></i></div>
                    </a></div>
                <div class="images"><img class="img1 img-fluid" data-src="{{ asset('site/images/slider/airplan.png') }}"
                        alt="image"><img class="img2 img-fluid" data-src="{{ asset('site/images/slider/car.png') }}" alt="image"><img
                        class="main-image img-fluid" data-src="{{ asset('site/images/slider/golve.png') }}" alt="image"></div>
            </div>
        </div>
    </section>
    <!--main slider-->
    <!--about us-->
    <section class="about" id="about">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="text-box" data-aos="fade-down">
                            <h2>HCL- The Cargo & Logistics Company You Have Been Waiting For!</h2>
                            <p>An essential part of the world’s leading Al Jazea Industrial Group, Hoopoe Cargo & Logistics
                                (HCL), is striving to achieve excellence in the fields of Logistics, Supply Chain, Import
                                and Export, Warehouse Solutions and several other associated value-added services.</p>
                            <p>Though established quite recently, the company is driven by its vision to help and support
                                the communities, businesses, and individuals to stay connected by ensuring a hassle-free
                                movement of the commodities from one country/region to another. Our promise to our esteemed
                                partners is that we will remain up-to-date with the technology resources and constantly
                                improve our logistic services so that we offer unparalleled logistic services from the Saudi
                                Arabian region to the rest of the world and vice versa.</p><a class="btn"
                                href="about.html">more about us</a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="image-box" data-aos="fade-up" data-aos-delay="100"><img class="img-fluid"
                                data-src="images/int_cargo_img4.jpg" alt="image"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us-->
    <!--features-->
    <section class="features" style="background-image:url('images/features/features_bg.jpg')">
        <div class="container">
            <div class="main-title">
                <h2>what HCL has in store for you</h2>
                <p>We as a company work endlessly to provide cost-efficient and convenient Freight Forwarding, International
                    Shipping, Trucking and Cargo solutions to each customer according to their needs and requirements.</p>
            </div>
            <div class="content">
                <div class="some-features">
                    <div class="features-box" data-aos="fade-up"><a href="single-feature.html">
                            <div class="icon"><i class="bi bi-basket3"></i></div>
                        </a>
                        <div class="details"><a href="single-feature.html">
                                <h3 class="title">Pharmaceutical Storage and Transport</h3>
                            </a>
                            <p>The eCommerce merchants can depend on HCL for Warehousing, Distribution and Logistics to
                                achieve business success goals and prosperity in their respective niche.</p>
                        </div>
                    </div>
                    <div class="features-box" data-aos="fade-up"><a href="single-feature.html">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                        </a>
                        <div class="details"><a href="single-feature.html">
                                <h3 class="title">Fulfilment/Last-Mile</h3>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text
                                typesetting.</p>
                        </div>
                    </div>
                    <div class="features-box" data-aos="fade-up"><a href="single-feature.html">
                            <div class="icon"><i class="bi bi-border-style"></i></div>
                        </a>
                        <div class="details"><a href="single-feature.html">
                                <h3 class="title">Pharmaceutical Storage and Transport</h3>
                            </a>
                            <p>The eCommerce merchants can depend on HCL for Warehousing, Distribution and Logistics to
                                achieve business success goals and prosperity in their respective niche.</p>
                        </div>
                    </div>
                    <div class="features-box" data-aos="fade-up"><a href="single-feature.html">
                            <div class="icon"><i class="bi bi-eye"></i></div>
                        </a>
                        <div class="details"><a href="single-feature.html">
                                <h3 class="title">Fulfilment/Last-Mile</h3>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text
                                typesetting.</p>
                        </div>
                    </div>
                </div>
                <div class="features-image"><img class="img-fluid" data-src="images/features/features_img.png"
                        alt="image"></div>
                <div class="some-features">
                    <div class="features-box" data-aos="fade-up"><a href="single-feature.html">
                            <div class="icon"><i class="bi bi-basket3"></i></div>
                        </a>
                        <div class="details"><a href="single-feature.html">
                                <h3 class="title">Pets Multivendor Marketplace</h3>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text
                                typesetting.</p>
                        </div>
                    </div>
                    <div class="features-box" data-aos="fade-up"><a href="single-feature.html">
                            <div class="icon"><i class="bi bi-binoculars"></i></div>
                        </a>
                        <div class="details"><a href="single-feature.html">
                                <h3 class="title">Pets Multivendor Marketplace</h3>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text
                                typesetting.</p>
                        </div>
                    </div>
                    <div class="features-box" data-aos="fade-up"><a href="single-feature.html">
                            <div class="icon"><i class="bi bi-border-style"></i></div>
                        </a>
                        <div class="details"><a href="single-feature.html">
                                <h3 class="title">Fulfilment/Last-Mile</h3>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text
                                typesetting.</p>
                        </div>
                    </div>
                    <div class="features-box" data-aos="fade-up"><a href="single-feature.html">
                            <div class="icon"><i class="bi bi-eye"></i></div>
                        </a>
                        <div class="details"><a href="single-feature.html">
                                <h3 class="title">Fulfilment/Last-Mile</h3>
                            </a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry simply dummy text
                                typesetting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--features-->
    <!--video-->
    <section class="video-area" style="background-image:url('images/bgs/video_bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="video-overlay">
                        <div class="row align-items-center">
                            <div class="col-lg-8 order-2 order-lg-0">
                                <div class="video-title" data-aos="fade-up"><span>Our Chalanges</span>
                                    <h2><span>never</span>break our promise</h2><a href="services.html">more
                                        services<span></span></a>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="video-play" data-aos="fade-down"><a class="popup-video"
                                        href="https://youtu.be/LXb3EKWsInQ" data-fancybox="gallery"><img
                                            data-src="images/icons/play_btn.png" alt="img"></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--video-->
    <!--logistics-->
    <section class="logistics" style="background-image:url('images/bgs/pattern-8.png')">
        <div class="container">
            <div class="main-title">
                <h2>Our services</h2>
                <p>As a market leader in global air freight forwarding.</p>
            </div>
            <div class="content">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item" role="presentation" data-aos="fade-up">
                        <button class="nav-link single-logistics active" id="logistics-1-tab" data-bs-toggle="pill"
                            data-bs-target="#logistics-1" type="button" role="tab" aria-controls="logistics-1"
                            aria-selected="true">
                            <div class="logistics-icon"><i class="bi bi-diagram-3"></i></div>
                            <div class="logistics-content">
                                <h2>Logistics</h2>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="100">
                        <button class="nav-link single-logistics" id="logistics-2-tab" data-bs-toggle="pill"
                            data-bs-target="#logistics-2" type="button" role="tab" aria-controls="logistics-2"
                            aria-selected="false">
                            <div class="logistics-icon"><i class="bi bi-speedometer"></i></div>
                            <div class="logistics-content">
                                <h2>Express Delivery</h2>
                            </div>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation" data-aos="fade-up" data-aos-delay="200">
                        <button class="nav-link single-logistics" id="logistics-3-tab" data-bs-toggle="pill"
                            data-bs-target="#logistics-3" type="button" role="tab" aria-controls="logistics-3"
                            aria-selected="false">
                            <div class="logistics-icon"><i class="bi bi-cart-plus"></i></div>
                            <div class="logistics-content">
                                <h2>Pets Stations</h2>
                            </div>
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="logistics-1" role="tabpanel"
                        aria-labelledby="logistics-1-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="image"><img class="img-fluid" data-src="images/packaging.jpg"
                                        alt="image"></div>
                            </div>
                            <div class="col-lg-8">
                                <div class="text">
                                    <h3>logistics</h3>
                                    <p>GL has a menu of supply chain solutions that can optimize the effectiveness of your
                                        product promotion, and reduce the cost of your packaging and distribution as well as
                                        your carbon footprint.</p>
                                    <p>“Sales Lift” is music to any marketing, brand or merchandising manager’s ears. GL
                                        understands the impact packaging has when your customers are competing for market
                                        dollars.</p>
                                    <p>Above all OIA’s retail business model combines material choices with an innovative
                                        design approach and color management process that supports “Sales Lift” to meet or
                                        exceed your ROI expectations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="logistics-2" role="tabpanel" aria-labelledby="logistics-2-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="image"><img class="img-fluid" data-src="images/packaging.jpg"
                                        alt="image"></div>
                            </div>
                            <div class="col-lg-8">
                                <div class="text">
                                    <h3>Express Delivery (parcel delivery)</h3>
                                    <p>GL has a menu of supply chain solutions that can optimize the effectiveness of your
                                        product promotion, and reduce the cost of your packaging and distribution as well as
                                        your carbon footprint.</p>
                                    <p>“Sales Lift” is music to any marketing, brand or merchandising manager’s ears. GL
                                        understands the impact packaging has when your customers are competing for market
                                        dollars.</p>
                                    <p>Above all OIA’s retail business model combines material choices with an innovative
                                        design approach and color management process that supports “Sales Lift” to meet or
                                        exceed your ROI expectations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="logistics-3" role="tabpanel" aria-labelledby="logistics-3-tab">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="image"><img class="img-fluid" data-src="images/delivery-man.jpg"
                                        alt="image"></div>
                            </div>
                            <div class="col-lg-8">
                                <div class="text">
                                    <h3>Pets Stations (ECommerce)</h3>
                                    <p>GL has a menu of supply chain solutions that can optimize the effectiveness of your
                                        product promotion, and reduce the cost of your packaging and distribution as well as
                                        your carbon footprint.</p>
                                    <p>“Sales Lift” is music to any marketing, brand or merchandising manager’s ears. GL
                                        understands the impact packaging has when your customers are competing for market
                                        dollars.</p>
                                    <h3>Optimization</h3>
                                    <p>GL is taking optimization to a whole new level. It has evolved into a comprehensive,
                                        fully integrated program designed to maximize productivity, minimize waste, and
                                        above all, reduce your per unit cost. Nothing exposes the weak links in your supply
                                        chain like optimization. And once those weaknesses are identified, we’ll work to
                                        eliminate them through our extensive program that includes the following key
                                        components:</p>
                                    <ul>
                                        <li>Solutions Engineering</li>
                                        <li>High-Performance Material</li>
                                        <li>Supply Chain Network</li>
                                        <li>Deployed Resources</li>
                                        <li>Logistics</li>
                                        <li>Financial Reporting</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--logistics-->
    <!--contact us-->
    <section class="contact">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="image" data-aos="fade-up"><img class="img-fluid"
                                data-src="images/bgs/contact.jpg" alt=""></div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <div class="main-title">
                                <h2>contact us</h2>
                            </div>
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group" data-aos="fade-up">
                                            <input class="form-control" type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group" data-aos="fade-up" data-aos-delay="100">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group" data-aos="fade-up" data-aos-delay="300">
                                            <input class="form-control" type="text" placeholder="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group" data-aos="fade-up" data-aos-delay="400">
                                            <input class="form-control" type="text" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group" data-aos="fade-up" data-aos-delay="500">
                                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-btn">
                                    <button class="btn" type="submit">send now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us-->
    <!--partners-->

    <section class="partners">
        <div class="container">
            <div class="main-title">
                <h2>Our partners</h2>
            </div>
            <div class="content">
                <div class="partners-carousel owl-carousel owl-theme">
                    <div class="item"><img class="img-fluid" data-src="images/partners/01.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/02.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/03.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/04.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/05.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/06.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/07.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/08.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/09.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/10.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/11.jpg" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/12.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/13.png" alt="image">
                    </div>
                    <div class="item"><img class="img-fluid" data-src="images/partners/14.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--partners-->
@endsection
