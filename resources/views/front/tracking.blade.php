@extends('front.layouts.master')
@section('title')
    {{ settings()->website_title }} | {{ trans('site.tracking') }}
@endsection
@section('content')
    <!-- Page Content -->
    <!--breadcrumb-->
    @include('front.components.breadcrumb', [
        'name' => trans('site.tracking'),
    ])
    <!--breadcrumb-->
    <!--tracking-->
    <section class="tracking">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="tracking-box">
                            <div class="tracking-icon"><img class="img-fluid" data-src="{{asset('site/images/parcel.jpg')}}"
                                    alt="image"></div>
                            <div class="tracking-btn"><a class="btn" href="https://hcl.my.shipox.com/track"
                                    target="_blank">{{trans('site.parcel')}}</a></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tracking-box">
                            <div class="tracking-icon"><img class="img-fluid" data-src="{{asset('site/images/freight.jpg')}}"
                                    alt="image"></div>
                            <div class="tracking-btn"><a class="btn" href="https://hcl.logistaas.com/customers"
                                    target="_blank">{{trans('site.freight')}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--tracking-->
@endsection
