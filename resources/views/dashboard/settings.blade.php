@extends('layouts.dashboard')
@section('title_head',trans('admin.settings').' - ')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"> @lang('admin.edit') </div>
                <div class="panel-wrapper collapse in">
                    <ul class="nav customtab nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home1" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true"><span class="visible-xs"><i class="ti-home"></i></span><span class="hidden-xs"> UZ</span></a></li>
                        <li role="presentation" class=""><a href="#profile1" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-user"></i></span> <span class="hidden-xs">RU</span></a></li>
                        <li role="presentation" class=""><a href="#messages1" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><span class="visible-xs"><i class="ti-email"></i></span> <span class="hidden-xs">EN</span></a></li>
                    </ul>
                    <div class="panel-body">
                        <form action="{{Route('update_regions',['ru',$data->id])}}"  enctype="multipart/form-data"  method="post" class="form-horizontal form-bordered">
                            @csrf
                            <div class="tab-content m-t-0">
                                <div role="tabpanel" class="tab-pane fade active in" id="home1">

                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.title_site')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="title_uz" value="{{$data->title_uz}}" required placeholder="@lang('admin.title_site')" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.descr_site')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="descr_uz" value="{{$data->descr_uz}}"  class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.keywords_site')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="keywords_uz" value="{{$data->keywords_uz}}" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Instagram</label>
                                            <div class="col-md-9">
                                                <input type="text" name="instagram_link" value="{{$data->instagram_link}}" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Facebook</label>
                                            <div class="col-md-9">
                                                <input type="text" name="fb_link" value="{{$data->fb_link}}" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Vk.com</label>
                                            <div class="col-md-9">
                                                <input type="text" name="vk_link" value="{{$data->vk_link}}" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">Youtube</label>
                                            <div class="col-md-9">
                                                <input type="text" name="youtube_link" value="{{$data->youtube_link}}" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                    </div>

                                </div>{{--uz--}}


                                <div role="tabpanel" class="tab-pane fade" id="profile1">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.title_site')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="title_ru" value="{{$data->title_ru}}" required placeholder="@lang('admin.title_site')" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.descr_site')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="descr_ru" value="{{$data->descr_ru}}"  class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.keywords_site')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="keywords_ru" value="{{$data->keywords_ru}}" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>


                                    </div>
                                </div>{{--ru--}}
                                <div role="tabpanel" class="tab-pane fade" id="messages1">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.title_site')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="title_en" value="{{$data->title_en}}" required placeholder="@lang('admin.title_site')" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.descr_site')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="descr_en" value="{{$data->descr_en}}"  class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.keywords_site')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="keywords_en" value="{{$data->keywords_en}}" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                    </div>
                                </div>{{--en--}}


                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('admin.save')</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('title')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">@lang('admin.settings') </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{Route('dashboard',['ru'])}}">@lang('admin.home')</a></li>
                <li class="active">@lang('admin.settings')</li>
            </ol>
        </div>
    </div>
@endsection

@push('js')

@endpush