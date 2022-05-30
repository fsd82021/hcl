@extends('admin.components.form')
@section('module_title', trans('contact.contact'))
@section('index_route', route('contact.index'))
@section('page_type', trans('general.show'))
@section('title') @lang('contact.contact') @endsection

@section('fields_content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.show')</h3>
            </div>
        </div>
        <div class="card-body p-10">
            <div class="tab-content">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.name'):</h5>
                            </div>
                            <p class="m-0">{{ $data->first_name }} {{ $data->last_name }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.email'):</h5>
                            </div>
                            <p class="m-0">{{ $data->email }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.phone'):</h5>
                            </div>
                            <p class="m-0">{{ $data->telephone }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.company'):</h5>
                            </div>
                            <p class="m-0">{{ $data->company }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.address'):</h5>
                            </div>
                            <p class="m-0">{{ $data->address }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.city'):</h5>
                            </div>
                            <p class="m-0">{{ $data->city }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.zip'):</h5>
                            </div>
                            <p class="m-0">{{ $data->zip }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.pieces_count'):</h5>
                            </div>
                            <p class="m-0">{{ $data->pieces_count }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.weight'):</h5>
                            </div>
                            <p class="m-0">{{ $data->weight }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.height'):</h5>
                            </div>
                            <p class="m-0">{{ $data->height }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.width'):</h5>
                            </div>
                            <p class="m-0">{{ $data->width }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.depth'):</h5>
                            </div>
                            <p class="m-0">{{ $data->depth }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.commodity'):</h5>
                            </div>
                            <p class="m-0">{{ $data->commodity }}</p>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="mb-7 bg-light p-5 rounded h-100">
                            <div class="card-title">
                                <h5 class="font-weight-bolder text-dark">@lang('contact.message'):</h5>
                            </div>
                            <p class="m-0">{!! $data->message !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card card-custom">
        <div class="card-footer">
            <a href="{{ route('contact.show-reply', $data->id) }}" class="btn btn-light-success active">@lang('contact.reply_now')</a>
            <a href="{{ route('contact.index') }}" class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
