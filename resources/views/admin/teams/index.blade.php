@extends('admin.components.index')
@section('module_name') @lang('teams.teams') @endsection
@section('page_type') @lang('general.index') @endsection
@section('title') @lang('teams.teams') @endsection
@section('create_route', route('teams.create'))

@section('page_content')
    <table class="table table-separate table-head-custom table-checkable" >
        <thead>
            <tr>
                <th>#</th>
                <th>@lang('general.title')</th>
                <th>@lang('general.created_at')</th>
                <th>@lang('general.control')</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $key => $value)
                <tr>
                    <td class="dtr-control">{{ $key + 1 }}</td>
                    <td>{{ $value->title }}</td>
                    <td class="sorting_1" nowrap="nowrap">
                        <span class="label-inline">{{ $value->created_at }}</span>
                    </td>
                    <td nowrap="nowrap">
                        @include('admin.components.table-control', ['name'=>'teams', 'value'=>$value])
                        {{-- <a href="{{ route('property.comments', $value->id) }}" class="btn btn-icon btn-light btn-hover-primary btn-sm" title="التعليقات">
                            <span class="svg-icon svg-icon-primary svg-icon-2x">
                                <i class="fa fa-comment"></i>
                            </span>
                        </a> --}}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
