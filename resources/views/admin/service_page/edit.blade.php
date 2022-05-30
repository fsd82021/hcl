@extends('admin.components.form')
@section('module_name', trans('general.aside.services'))
@section('page_type', trans('general.edit'))
@section('title') @lang('general.aside.services') @endsection
@section('store_route', route('service_page.update', $data))
@section('form_type', 'POST')

@section('fields_content')
    @method('put')
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
                    <div class="tab-pane fade show @if ($key == 0) active @endif" id="{{ $locale }}"
                        role="tabpanel">
                        <div class="form-group">
                            <label>@lang('services.title') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[title]' }}" placeholder="@lang('services.title')"
                                    class="form-control  pl-5 min-h-40px @error($locale . '.title') is-invalid @enderror"
                                    value="{{ old($locale . '.title', $data->translate($locale)->title) }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>@lang('services.sub_title') - @lang('general.'.$locale)<span class="text-danger"> * </span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="text" name="{{ $locale . '[sub_title]' }}" placeholder="@lang('services.sub_title')"
                                    class="form-control  pl-5 min-h-40px @error($locale . '.sub_title') is-invalid @enderror"
                                    value="{{ old($locale . '.sub_title', $data->translate($locale)->sub_title) }}">
                            </div>
                        </div>
                        <div class="col form-group">
                            <label>@lang('services.description')(@lang('general.'.$locale))<span
                                    class="text-danger">*</span></label>
                            <textarea class="form-control @error($locale . '.description') is-invalid @enderror " type="text"
                                name="{{ $locale . '[description]' }}" rows="4"
                                id="{{ $locale }}.editor1">{{ old($locale . '.description', $data->translate($locale)->description) }} </textarea>
                            <script>
                                CKEDITOR.replace('{{ $locale }}.editor1', {

                                    // Setting default language direction to right-to-left.
                                    contentsLangDirection: 'rtl',
                                    height: 270,
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

        <div class="card card-custom">
            <div class="card-body">
                <div class="row">
                    @if (isset($data->icon))
                        <div class="card-body p-0 px-1 py-1">
                            <img src="{{ asset($data->icon) }}" style="max-width: 100%" class="rounded img-fluid">
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>@lang('mission.icon')<span class="text-danger"> * </span></label>
                            <div class="input-group">


                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="flaticon-edit"></i></span>
                                </div>
                                <input type="file" name="icon" placeholder="@lang('mission.icon')"
                                    class="form-control  pl-5 min-h-40px @error($locale . '.icon') is-invalid @enderror"
                                    value="{{ old('icon', $data->icon) }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="card card-custom">
        <div class="card-footer">
            <button type="submit" class="btn btn-light-success active">@lang('general.save')</button>
            <a href="{{ route('about.edit') }}" class="btn btn-light-success font-weight-bold">@lang('general.cancel')</a>
        </div>
    </div>
@endsection
