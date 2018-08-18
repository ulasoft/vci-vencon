@extends('layouts.dashboard')
@section('title_head',trans('admin.home').' - ')
@section('content')

    <div class="row">
        <!--col -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="col-in row">
                    <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E" class="linea-icon linea-basic"></i>
                        <h5 class="text-muted vb">@lang('admin.hotels')</h5> </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h3 class="counter text-right m-t-15 text-danger">{{$hotels}}</h3> </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="progress">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <!--col -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="col-in row">
                    <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                        <h5 class="text-muted vb">@lang('admin.restarans')</h5> </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h3 class="counter text-right m-t-15 text-megna">{{$res}}</h3> </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="progress">
                            <div class="progress-bar progress-bar-megna" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <!--col -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="white-box">
                <div class="col-in row">
                    <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic" data-icon=""></i>
                        <h5 class="text-muted vb">@lang('admin.dist')</h5> </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <h3 class="counter text-right m-t-15 text-primary">{{$dis}}</h3> </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%"> <span class="sr-only">40% Complete (success)</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
    </div>


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
                        @foreach($regions as $row)
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
            <h4 class="page-title">@lang('admin.home') </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                {{--<li><a href="#">Dashboard</a></li>--}}
                <li class="active">@lang('admin.home')</li>
            </ol>
        </div>
    </div>
@endsection