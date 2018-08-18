@extends('layouts.site')
@section('title_head',trans('s.regions').' - ')
@php
    $lang = Request::segment(1);
@endphp
@section('content')

    <section class="regions-section">
        <div class="container">
            <div class="row">
                @foreach($data as $row)
                    <div class="col-md-12 d-flex img-width j-column wow fadeIn" data-wow-offset="100">
                        <div class="col-md-6 p-0 box-shadow">
                            <div>
                                <a href="{{Route('regions_view',[$lang,$row->slug])}}">
                                    @if(is_file($row->poster))
                                        <img src="/{{$row->poster}}" alt="{{$row->name}}" class="img-width">
                                    @else
                                        <img src="/img/nofoto.png" alt="{{$row->name}}" class="img-width">
                                    @endif
                                </a>
                            </div>
                        </div><!-- -col-md-6 -->
                        <div class="col-md-6 p-4 p-200 box-shadow">
                            <h2 class="font-weight-bold">{{$row->name}}</h2>
                            <p>{{mb_substr(strip_tags($row->full_text),0,230)}}</p>
                            <a href="{{Route('regions_view',[$lang,$row->slug])}}">@lang('s.moree')</a>
                        </div><!-- col-md-6 -->
                    </div><!-- col-md-12 -->
                @endforeach
            </div><!-- row -->
        </div><!-- container -->
    </section>
@endsection

