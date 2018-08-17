@extends('layouts.dashboard')

@section('content')
    <div class="col-md-12">
        <div class="white-box">
            <h3 class="box-title">Blank page1</h3> </div>
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