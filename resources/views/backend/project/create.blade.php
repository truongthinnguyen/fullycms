@extends('backend/layout/layout')
@section('content')
{!! HTML::script('ckeditor/ckeditor.js') !!}
{!! HTML::style('jasny-bootstrap/css/jasny-bootstrap.min.css') !!}
{!! HTML::script('jasny-bootstrap/js/jasny-bootstrap.min.js') !!}

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Project
        <small> | Add Project</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url(getLang(). '/admin/project') !!}"><i class="fa fa-gears"></i> Project</a></li>
        <li class="active">Add Project</li>
    </ol>
</section>
<br>
<br>
<div class="container">

    {!! Form::open(array('action' => '\Fully\Http\Controllers\Admin\ProjectController@store', 'files'=>true)) !!}

    <!-- Title -->
    <div class="control-group {!! $errors->has('title') ? 'has-error' : '' !!}">
        <label class="control-label" for="title">Tiêu đề</label>

        <div class="controls"> {!! Form::text('title', null, array('class'=>'form-control', 'id' => 'title', 'placeholder'=>'Title', 'value'=>Input::old('title'))) !!}
            @if ($errors->first('title')) <span class="help-block">{!! $errors->first('title') !!}</span> @endif
        </div>
    </div>
    <br>

    <!-- Description -->
    <div class="control-group {!! $errors->has('description') ? 'has-error' : '' !!}">
        <label class="control-label" for="description">Mô tả</label>

        <div class="controls"> {!! Form::textarea('description', null, array('class'=>'form-control', 'id' => 'description', 'placeholder'=>'Description', 'value'=>Input::old('content'))) !!}
            @if ($errors->first('description'))
            <span class="help-block">{!! $errors->first('description') !!}</span> @endif
        </div>
    </div>
    <br>

    <!-- Image -->
    <div class="fileinput fileinput-new control-group {!! $errors->has('image') ? 'has-error' : '' !!}" data-provides="fileinput">
        <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"></div>
        <div> <span class="btn btn-default btn-file"><span class="fileinput-new">Chọn hình ảnh</span><span class="fileinput-exists">Thay đổi</span> {!! Form::file('image', null, array('class'=>'form-control', 'id' => 'image', 'placeholder'=>'Image', 'value'=>Input::old('image'))) !!}
      @if ($errors->first('image')) <span class="help-block">{!! $errors->first('image') !!}</span> @endif </span>
            <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Xóa</a></div>
    </div>
    <!-- Published -->
    <div class="control-group {!! $errors->has('is_hot') ? 'has-error' : '' !!}">
            <div class="controls">
                <label class="">{!! Form::checkbox('is_hot', 'is_hot') !!} Is Hot ?</label>
                @if ($errors->first('is_hot'))
                    <span class="help-block">{!! $errors->first('is_hot') !!}</span> @endif </div>
    </div>
    <br>

    {!! Form::submit('Create', array('class' => 'btn btn-success')) !!}
    {!! Form::close() !!}
    <script type="text/javascript">
        window.onload = function () {
            CKEDITOR.replace('description', {
                "filebrowserBrowseUrl": "{!! url('filemanager/show') !!}"
            });
        };
    </script>
</div>
@stop