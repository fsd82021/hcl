@extends('front.layouts.master')
@section('title')
    {{ settings()->website_title }} | {{ $blog->title }}
@endsection
@section('content')
    <!-- Page Content -->
    @include('front.components.secondBreadcrumb', [
        'name' => $blog->title,
    ])
    <!--breadcrumb-->
    @include('front.components.blog-Details')


@endsection
