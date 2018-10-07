@extends('backend/layout/layout')
@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Quyền hạn
        <small> | Xem quyền hạn</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.role.index') !!}"><i class="fa fa-user"></i> Quyền hạn</a></li>
        <li class="active">Xem quyền hạn</li>
    </ol>
</section>
<br>
<br>
<div class="container">
    <div class="pull-left">
        <div class="btn-toolbar">
            <a href="{!! langRoute('admin.role.index') !!}"
               class="btn btn-primary">
                <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Quay lại
            </a>
        </div>
    </div>
    <br>
    <br>
    <br>
    <table class="table table-striped">
        <tbody>
        <tr>
            <td><strong>Tên quyền hạn</strong></td>
            <td>{!! $role->name !!}</td>
        </tr>
        </tbody>
    </table>
</div>
@stop