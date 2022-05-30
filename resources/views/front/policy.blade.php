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
            <h2>compliance policy</h2>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">compliance policy</li>
            </ol>
          </nav>
        </div>
      </nav>
      <!--breadcrumb-->
      <!--compliance policy-->
      <section class="compliance-policy">
        <div class="container"><a href="" target="_blank">
            <div class="content">
              <div class="compliance-content">
                <div class="compliance-icon"><img class="img-fluid" data-src="images/icons/pdf.png" alt=""></div>
                <div class="compliance-text">
                  <h3>Please Click To See The Compliance Policy</h3>
                </div>
              </div>
            </div></a></div>
      </section>
      <!--compliance policy-->
@endsection
