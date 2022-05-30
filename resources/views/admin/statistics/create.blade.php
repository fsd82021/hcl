@extends('admin.components.form')
@section('module_name', trans('statistics.statistics'))
@section('page_type', trans('general.add_new'))
@section('title') @lang('statistics.statistics') @endsection
@section('index_route', route('statistics.index'))
@section('store_route', route('statistics.store'))
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
                                href="{{ '#' . $locale }}">@lang('general.' . $locale)</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="card-body">
            <div class="tab-content">
                @foreach (config('translatable.locales') as $key => $locale)
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}"
                        role="tabpanel">
                        <div class="form-group">
                            <label>@lang('statistics.title') - @lang('general.' . $locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[title]' }}" placeholder="@lang('statistics.title')"
                                    class="form-control  pl-5 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                    value="{{ old($locale . '.title') }}">
                            </div>
                        </div>


                        <div class="col form-group">
                            <label>@lang('services.description')(@lang('general.'.$locale))<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control @error($locale . '.description') is-invalid @enderror "
                                type="text" name="{{ $locale . '[description]' }}" rows="4"
                                id="{{ $locale }}.editor1">{{ old($locale . '.description') }} </textarea>
                            <script>
                                CKEDITOR.replace('{{ $locale }}.editor1', {
                                    extraPlugins: 'colorbutton',
                                    colorButton_colors: 'CF5D4E,454545,FFF,DDD,CCEAEE,66AB16',
                                    colorButton_enableAutomatic: false,
                                    // Setting default language direction to right-to-left.
                                    contentsLangDirection: 'rtl',
                                    height: 250,
                                    scayt_customerId: '1:Eebp63-lWHbt2-ASpHy4-AYUpy2-fo3mk4-sKrza1-NsuXy4-I1XZC2-0u2F54-aqYWd1-l3Qf14-umd',
                                    scayt_sLang: 'auto',
                                    removeButtons: 'PasteFromWord'
                                });
                            </script>
                        </div>


                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card card-custom">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>@lang('statistics.icon')<span class="text-danger"> * </span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="flaticon-edit"></i></span>
                            </div>
                            <input type="text" name="icon" placeholder="@lang('statistics.icon')"
                                class="form-control  pl-5 min-h-40px @error($locale . '.icon') is-invalid @enderror"
                                value="{{ old('icon') }}">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
            <a href="{{ route('statistics.index') }}"
                class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
