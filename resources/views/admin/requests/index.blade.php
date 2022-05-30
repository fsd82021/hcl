@extends('admin.components.index')
{{-- Preparing page properties --}}
@section('module_name') @lang('general.aside.requests') @endsection
@section('permission', 'organization')
@section('title') @lang('general.aside.requests') @endsection
<style>
    .card-toolbar {
        display: none !important
    }

</style>

@section('page_content')
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>#</th>
                <th>@lang('general.name')</th>
                <th>@lang('general.email')</th>
                <th>@lang('general.phone')</th>
                <th>@lang('general.created_at')</th>
                <th>@lang('general.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td class="dtr-control">{{ $key + 1 }}</td>
                    <td>{{ $value->first_name }}</td>
                    <td>{{ $value->email }}</td>
                    <td>{{ $value->telephone }}</td>
                    <td nowrap="nowrap">{{ $value->created_at }}</td>
                    <td nowrap="nowrap">
                        <a href="{{ route('show.request', $value->id) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="@lang('general.locales.show')">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <i class="fa fa-eye"></i>
                            </span>
                        </a>

                        <a href="{{ route('request.show-reply', $value->id) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm"
                             title="@lang('general.locales.reply')">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <i class="fa fa-reply"></i>
                            </span>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $data->links('admin.components.pagination.default') !!}
@endsection
