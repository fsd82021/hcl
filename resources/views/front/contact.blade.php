@extends('front.layouts.master')
@section('title')
    {{ settings()->website_title }} | {{ trans('site.contact') }}
@endsection
@section('content')
    <!-- Page Content -->
    <!--breadcrumb-->
    <nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url('images/bgs/breadcrumb_bg.jpg')">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>contacts</h2>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">contacts</li>
                </ol>
            </nav>
        </div>
    </nav>
    <!--breadcrumb-->
    <!--contact form-->
    <section class="contact-in-page">
        <div class="container">
            <div class="main-title">
                <h2>contact us</h2>
            </div>
            <div class="content">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <!--toast error-->
                        <!--div(class="toast-part")
                        div(class="toast align-items-center text-white border-0" class="bg-danger show"  role="alert", aria-live="assertive", aria-atomic="true")
                            div(class="toast-content d-flex")
                                    div(class="toast-body") this is error message
                                    button(type="button", class="btn-close btn-close-white", data-bs-dismiss="toast", aria-label="Close")
                        -->
                        <!--toast success-->
                        <!--div(class="toast-part")
                        div(class="toast align-items-center text-white border-0" class="bg-success show"  role="alert", aria-live="assertive", aria-atomic="true")
                            div(class="toast-content d-flex")
                                    div(class="toast-body") message sent successfully
                                    button(type="button", class="btn-close btn-close-white", data-bs-dismiss="toast", aria-label="Close")
                        -->
                        <div class="contact-form">
                            <form class="needs-validation" novalidate>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="Name">
                                            <!--div(class="invalid-feedback") Please fill this field.-->
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control" type="email" placeholder="Email">
                                            <!--div(class="invalid-feedback") Please select a valid state.-->
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <input class="form-control" type="number" placeholder="Subject">
                                            <!--div(class="invalid-feedback") Please select a valid state.-->
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                            <!--div(class="invalid-feedback") Please select a valid state.-->
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
    <!--contact form-->
    <!--contact info-->
    <section class="contact-info">
        <div class="container">
            <div class="info-area">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="info-box"><i class="bi bi-envelope"> </i>
                            <h3>email</h3><a href="mailto:info@hcl.com.sa">info@hcl.com.sa</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="info-box"><i class="bi bi-pin-map"></i>
                            <h3>location</h3><span>HOOPOE CARGO & LOGISTICS<br>Anas Ibn Malik St, Malaqa AreaRiyadh 13521,
                                Kingdom of Saudi Arabia</span>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="info-box"><i class="bi bi-telephone"></i>
                            <h3>phone</h3><a href="tel:8001222233" dir="ltr">8001222233</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact info-->
    <!--map-->
    <section class="map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55251.33564056191!2d31.22344491853406!3d30.059558098334296!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583fa60b21beeb%3A0x79dfb296e8423bba!2sCairo%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1634654464669!5m2!1sen!2seg"
            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <!--map-->
@endsection
