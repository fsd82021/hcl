@extends('front.layouts.master')
@section('title')
    {{ settings()->website_title }} | {{ trans('site.blogs') }}
@endsection
@section('content')
    <!-- Page Content -->
    @include('front.components.breadcrumb', [
        'name' => trans('site.blogs'),
        'image' => asset($blog_page->icon),
    ])
    <!--breadcrumb-->
     <!--blogs-->
     <section class="blogs-in-page">
        <div class="container">
          <div class="main-title"><span class="sub-title">{{$blog_page->title}}</span>
            <h2>{{$blog_page->sub_title}}</h2>
          </div>

          @include('front.components.blogs')


        </div>
      </section>
      <!--blogs-->
@endsection
