@extends('admin.components.form')
@section('module_name', trans('portfolios.portfolios'))
@section('page_type', trans('general.add_new'))
@section('title') @lang('portfolios.portfolios') @endsection
@section('index_route', route('portfolios.index'))
@section('store_route', route('portfolios.store'))
@section('form_type', 'POST')

@section('fields_content')
    <div class="card card-custom mb-2">
        <div class="card-header card-header-tabs-line">
            <div class="card-title">
                <h3 class="card-label">@lang('general.locales.add_new')</h3>
            </div>
            <div class="card-toolbar">
                <ul class="nav nav-tabs nav-bold nav-tabs-line">
                    @foreach (config('translatable.locales') as $key => $locale)

                        <li class="nav-item">
                            <a class="nav-link  @if ($key == 0) active @endif" data-toggle="tab"
                                href="{{ '#' . $locale }}">@lang('general.'.$locale)</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}" role="tabpanel">
                        <div class="form-group">
                            <label>@lang('portfolios.title') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[title]' }}" placeholder="@lang('portfolios.title')" class="form-control  pl-5 min-h-40px @error($locale . '.title') is-invalid @enderror" value="{{ old($locale . '.title') }}">
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <label>@lang('portfolios.description') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <textarea name="{{ $locale . '[description]' }}" @error($locale . '.description' ) is-invalid @enderror class="form-control kt-ckeditor-5">{{ old($locale . '.description') }}</textarea>
                        </div> --}}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-custom">
        <div class="card-body">
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label class="col-form-label d-block">@lang('portfolios.image')</label>
                        @include('admin.components.image_create')
                    </div>
                </div>
                <div class="col-md-10">
                    <div class="form-group">
                        <label class="col-form-label">@lang('properties.category_name')</label>
                        <select class="form-control selectpicker @error('category_id') is-invalid @enderror" name="category_id" title="@lang('properties.category_name')">
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
            <a href="{{ route('portfolios.index') }}" class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
