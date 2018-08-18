@extends('layouts.dashboard')
@section('title_head',trans('admin.regions').' - ')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="text-right" style="margin-bottom: 10px">
                <a href="{{Route('add_regions',['ru'])}}" class="btn btn-success"><i class="fa fa-plus-square-o"></i> @lang('admin.add')</a>
            </div>
            @if(!empty(Session::has('info')))
                <div class="alert alert-info"><i class="fa fa-info-circle fa-fw"></i> {{Session::get('info')}}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">@lang('admin.regions')</div>
                <div class="panel-wrapper collapse in">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th width="40" class="text-center">#</th>
                            <th>@lang('admin.titlee')</th>
                            <th class="text-right">@lang('admin.actions')</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $row)
                                <tr>
                                    <td align="center">{{$row->id}}</td>
                                    <td>{{$row->name_ru}}</td>
                                    <td class="text-right">
                                        <a href="{{Route('edit_regions',['ru',$row->id])}}" class="btn btn-primary btn-xs"><i class="fa fa-edit fa-fw"></i> @lang('admin.edit')</a>
                                        <a href="{{Route('delete_regions',['ru',$row->id])}}" class="btn btn-danger btn-xs"><i class="fa fa-trash fa-fw"></i> @lang('admin.delete')</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('title')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">@lang('admin.regions') </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{Route('dashboard',['ru'])}}">@lang('admin.home')</a></li>
                <li class="active">@lang('admin.regions')</li>
            </ol>
        </div>
    </div>
@endsection