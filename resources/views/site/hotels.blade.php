@extends('layouts.site')
@section('title_head',trans('s.hotels').' - ')
@php
    $lang = Request::segment(1);
@endphp
@section('content')
    <section class="regions-section">
        <div class="container">
            <div class="row">
                @if(count($data) == 0)
                    <div class="alert alert-info w-100">
                        @lang('s.not_public')
                    </div>
                @endif
                @foreach($data as $row)
                    <div class="col-md-12 d-flex img-width j-column wow zoomIn" data-wow-offset="100">
                        <div class="col-md-6 p-0 box-shadow">
                            <div>
                                @if(is_file($row->poster))
                                    <img src="/{{$row->poster}}" alt="{{$row->name}}" class="img-width">
                                @else
                                    <img src="/img/nofoto.png" alt="{{$row->name}}" class="img-width">
                                @endif
                            </div>
                        </div><!-- -col-md-6 -->
                        <div class="col-md-6 p-4 p-200 box-shadow">
                            <h2 class="font-weight-bold">{{$row->name}}</h2>
                            <p>{{mb_substr(strip_tags($row->full_text),0,550)}}</p>
                            <p>@lang('s.address'): {{$row->address}}</p>
                        </div><!-- col-md-6 -->
                    </div><!-- col-md-12 -->
                @endforeach
            </div><!-- row -->
        </div><!-- container -->
    </section>
@endsection

