@extends('layouts.dashboard')
@section('title_head',trans('admin.add').' - ')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading"> @lang('admin.add')</div>
                <div class="panel-wrapper collapse in" aria-expanded="true">
                    <div class="panel-body">
                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label col-md-3">@lang('admin.titlee')</label>
                                    <div class="col-md-9">
                                        <input type="text" required placeholder="@lang('admin.titlee')" name="name" class="form-control"> <!--span class="help-block"> This is inline help </span --> </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">@lang('admin.image')</label>
                                    <div class="col-md-9">
                                        <input type="file" name="poster" class="form-control"> <!--span class="help-block"> This is inline help </span -->
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">@lang('admin.opi')</label>
                                    <div class="col-md-9">
                                        <textarea name="full_text" id="editor1"></textarea> <!--span class="help-block"> This is inline help </span--> </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">@lang('admin.address')</label>
                                    <div class="col-md-9">
                                        <input type="text" required value="" name="address" class="form-control"> <!--span class="help-block"> This is inline help </span --> </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">@lang('admin.lang')</label>
                                    <div class="col-md-9">
                                        <select name="lang" class="form-control">
                                            <option value="uz">Uz</option>
                                            <option value="ru">Ru</option>
                                            <option value="en">En</option>
                                        </select>
                                    </div>
                                </div>
                                @csrf


                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-md-offset-3 col-md-9">
                                                <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> @lang('admin.save')</button>
                                                <a href="{{Route('hotels_d',['ru'])}}" class="btn btn-default"> @lang('admin.close')</a>
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
@endsection

@section('title')
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">@lang('admin.dist') </h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="{{Route('dashboard',['ru'])}}">@lang('admin.home')</a></li>
                <li class="active">@lang('admin.dist')</li>
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

    </script>
@endpush