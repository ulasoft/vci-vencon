@extends('layouts.site')
@section('title_head',$data->name.' - ')
@php
    $lang = Request::segment(1);
@endphp
@section('content')
    <section class="section-city01">
        <div class="top-bg">
            <h1 class="text-center section-city01-h1">{{$data->name}}</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 animated fadeInLeftBig">
                    {!! $data->full_text !!}
                </div>
                <div class="col-md-4 animated bounce">
                    <div class="sidebar">
                        <ul>
                            <li class="animated bounce">@lang('s.other_regions')</li>
                            @foreach($related as $row)
                                <li>
                                    <a href="{{Route('regions_view',[$lang,$row->slug])}}" class="animated bounce">
                                        @if(is_file($row->poster))
                                            <img src="/{{$row->poster}}" alt="{{$row->name}}" class="img-width">
                                        @else
                                            <img src="/img/nofoto.png" alt="{{$row->name}}" class="img-width">
                                        @endif
                                        <span>{{$row->name}}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div><!-- sidebar -->
                </div><!-- col-md-4 -->
            </div><!-- row -->
        </div><!-- container -->
    </section>
@endsection

