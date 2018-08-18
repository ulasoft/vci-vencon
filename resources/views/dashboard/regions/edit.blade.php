@extends('layouts.dashboard')
@section('title_head',trans('admin.edit').' - ')
@section('content')
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading"> @lang('admin.add') </div>
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
                                            <label class="control-label col-md-3">@lang('admin.titlee')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name_uz" value="{{$data->name_uz}}" required placeholder="@lang('admin.titlee')" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.image')</label>
                                            <div class="col-md-9">

                                                    <input type="file" name="poster">
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.opi')</label>
                                            <div class="col-md-9">
                                                <textarea name="full_text_uz" id="editor1" rows="10" cols="80">{{$data->full_text_uz}}</textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>{{--uz--}}


                                <div role="tabpanel" class="tab-pane fade" id="profile1">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.titlee')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name_ru" value="{{$data->name_ru}}" required placeholder="@lang('admin.titlee')" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.opi')</label>
                                            <div class="col-md-9">
                                                <textarea name="full_text_ru" id="editor2" rows="10" cols="80">{{$data->full_text_ru}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>{{--ru--}}
                                <div role="tabpanel" class="tab-pane fade" id="messages1">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.titlee')</label>
                                            <div class="col-md-9">
                                                <input type="text" name="name_en" value="{{$data->name_en}}" required placeholder="@lang('admin.titlee')" class="form-control"> <!--span class="help-block"> This is inline help </1--span --> </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3">@lang('admin.opi')</label>
                                            <div class="col-md-9">
                                                <textarea name="full_text_en" id="editor3" rows="10" cols="80">{{$data->full_text_en}}</textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>{{--en--}}


                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-offset-3 col-md-9">
                                                    <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('admin.save')</button>
                                                    <a href="{{Route('regions_d',['ru'])}}"  class="btn btn-default">@lang('admin.close')</a>
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
            <h4 class="page-title">@lang('admin.add') </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{Route('dashboard',['ru'])}}">@lang('admin.home')</a></li>
                <li class="active">@lang('admin.regions')</li>
            </ol>
        </div>
    </div>
@endsection

@push('js')
    <script src="/vendor/ckeditor/ckeditor.js"></script>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
        CKEDITOR.replace( 'editor3' );
    </script>
@endpush