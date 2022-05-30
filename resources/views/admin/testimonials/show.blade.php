@extends('admin.components.form')
@section('module_name', trans('testimonials.testimonials'))
@section('page_type', trans('general.show'))
@section('title') @lang('testimonials.testimonials') @endsection

@section('fields_content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.show')</h3>
            </div>
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    @foreach (config('translatable.locales') as $key => $locale)
                        <li class="nav-item">
                            <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                href="{{ '#' . $locale }}">@lang('general.' . $locale)</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card-body p-10">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}"
                        role="tabpanel">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark">@lang('testimonials.title'):</h5>
                                    </div>
                                    <p class="m-0">{{ $data->translate($locale)->title }}</p>
                                </div>
                            </div>

                            <div class="col-md-12 mt-10">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark">@lang('testimonials.job_title'):</h5>
                                    </div>
                                    <p class="m-0">{{ $data->translate($locale)->job_title }}</p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-7 bg-light p-5 rounded h-100">
                                    <div class="card-title">
                                        <h5 class="font-weight-bolder text-dark">@lang('testimonials.description'):</h5>
                                    </div>
                                    <p class="m-0">{!! $data->translate($locale)->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="card card-custom">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            @if ($data->main_image !== null)
                                <label class="col-form-label d-block">@lang('testimonials.image')</label>
                                <br>
                                <img src="{{ asset($data->main_image) }}" class="w-100">
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
