@extends('front.layouts.master')
@section('title')
{{settings()->website_title}} | {{trans('site.error')}}
@endsection
@section('content')
    <!--breadcrumb-->
      <!--breadcrumb-->
      <nav class="main-breadcrumb" aria-label="breadcrumb" style="background-image:url('images/bgs/breadcrumb_bg.jpg')">
        <div class="container">
          <div class="breadcrumb-title">
            <h2>error 404</h2>
          </div>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">error 404</li>
            </ol>
          </nav>
        </div>
      </nav>
      <!--breadcrumb-->
      <!--error 404-->
      <section class="error">
        <div class="content">
          <div class="container">
            <div class="text-center mx-auto"> <img class="img-fluid" src="images/404.png" alt="alt">
              <h3>Sorry We Can`t Find That Page!</h3>
              <p class="lead">The page you are looking for was moved, removed, renamed or never existed.</p><a class="btn back" href="index.html">TAKE ME HOME</a>
            </div>
          </div>
        </div>
      </section>
      <!--error 404-->
    @endsection



