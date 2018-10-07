@extends('backend/layout/layout')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Tài khoản
        <small> | Tạo tài khoản</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url(getLang(). '/admin/user') !!}"><i class="fa fa-user"></i> Tài khoản</a></li>
        <li class="active">Tạo tài khoản</li>
    </ol>
</section>
<br>
<br>
<div class="container">
    {!! Form::open(array('action' => '\Fully\Http\Controllers\Admin\UserController@store')) !!}
    
    <!-- Họ -->
    <div class="control-group {!! $errors->has('first-name') ? 'has-error' : '' !!}">
        <label class="control-label" for="first-name">Họ</label>

        <div class="controls">
            {!! Form::text('first_name', null, array('class'=>'form-control', 'id' => 'first_name', 'placeholder'=>'Họ', 'value'=>Input::old('first_name'))) !!}
            @if ($errors->first('first-name'))
            <span class="help-block">{!! $errors->first('first-name') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Tên -->
    <div class="control-group {!! $errors->has('last-name') ? 'has-error' : '' !!}">
        <label class="control-label" for="last-name">Tên</label>

        <div class="controls">
            {!! Form::text('last_name', null, array('class'=>'form-control', 'id' => 'last_name', 'placeholder'=>'Tên', 'value'=>Input::old('last_name'))) !!}
            @if ($errors->first('last-name'))
            <span class="help-block">{!! $errors->first('last-name') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Email -->
    <div class="control-group {!! $errors->has('email') ? 'has-error' : '' !!}">
        <label class="control-label" for="email">Email</label>

        <div class="controls">
            {!! Form::text('email', null, array('class'=>'form-control', 'id' => 'email', 'placeholder'=>'Email', 'value'=>Input::old('email'))) !!}
            @if ($errors->first('email'))
            <span class="help-block">{!! $errors->first('email') !!}</span>
            @endif
        </div>
    </div>
    <br>

    <!-- Role -->
    <div class="control-group {!! $errors->has('is_published') ? 'has-error' : '' !!}">
        <label class="control-label" for="groups">Quyền hạn</label>
        <div class="controls">

            @foreach($roles as $id=>$role)
            <label><input type="checkbox" value="{!! $id !!}" name="roles[{!! $role !!}]">  {!! $role !!}</label>
            @endforeach

        </div>
    </div>
    <br>

    <legend>Mật khẩu</legend>
    <!-- Password -->
    <div class="control-group {!! $errors->has('password') ? 'has-error' : '' !!}">
        <label class="control-label" for="password">Mật khẩu</label>

        <div class="controls">
            {!! Form::password('password', array('class'=>'form-control', 'id' => 'password', 'placeholder'=>'Mật khẩu', 'value'=>Input::old('password'))) !!}
            @if ($errors->first('password'))
            <span class="help-block">{!! $errors->first('password') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Confirm Password -->
    <div class="control-group {!! $errors->has('confirm-password') ? 'has-error' : '' !!}">
        <label class="control-label" for="confirm-password">Nhập lại mật khẩu</label>

        <div class="controls">
            {!! Form::password('confirm_password', array('class'=>'form-control', 'id' => 'confirm_password', 'placeholder'=>'Nhập lại mật khẩu', 'value'=>Input::old('confirm_password'))) !!}
            @if ($errors->first('confirm-password'))
            <span class="help-block">{!! $errors->first('confirm-password') !!}</span>
            @endif
        </div>
    </div>
    <br>
    <!-- Form actions -->
    {!! Form::submit('Lưu thông tin', array('class' => 'btn btn-success')) !!}
    <a href="{!! url('admin/user') !!}"
       class="btn btn-default">
        &nbsp;Hủy
    </a>
    {!! Form::close() !!}
</div>
@stop