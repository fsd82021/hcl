@extends('front.layouts.master')
@section('title')
    {{ settings()->website_title }} | {{ $service->title }}
@endsection
@section('content')
    <!-- Page Content -->
    @include('front.components.secondBreadcrumb', [
        'name' => $service->title,
    ])
    <!--breadcrumb-->
    @include('front.components.service-Details')


@endsection
