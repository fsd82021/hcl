@extends('admin.components.form')
@section('module_name', trans('partners.partners'))
@section('page_type', trans('general.show'))
@section('title') @lang('partners.partners') @endsection

@section('fields_content')
    <div class="card card-custom card-stretch gutter-b">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.show')</h3>
            </div>
        </div>
        <div class="card card-custom">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            @if ($data->main_image !== null)
                                <label class="col-form-label d-block">@lang('partners.image')</label>
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
