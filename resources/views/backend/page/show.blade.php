@extends('backend/layout/layout')
@section('content')
{!! HTML::style('ckeditor/contents.css') !!}
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1> Trang web
        <small> | Xem trang web</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! langRoute('admin.page.index') !!}"><i class="fa fa-bookmark"></i> Page</a></li>
        <li class="active">Xem trang web</li>
    </ol>
</section>
<br>
<br>
<div class="container">
    <div class="col-lg-10">
        <div class="pull-left">
            <div class="btn-toolbar">
                <a href="{!! langRoute('admin.page.index') !!}"
                   class="btn btn-primary"> <span class="glyphicon glyphicon-arrow-left"></span>&nbsp;Quay lại </a>
            </div>
        </div>
        <br> <br> <br>
        <table class="table table-striped">
            <tbody>
            <tr>
                <td><strong>Tiêu đề</strong></td>
                <td>{!! $page->title !!}</td>
            </tr>
            <tr>
                <td><strong>Đã xuất bản</strong></td>
                <td>{!! $page->is_published !!}</td>
            </tr>
            <tr>
                <td><strong>Nội dung</strong></td>
                <td>{!! $page->content !!}</td>
            </tr>
            <tr>
                <td><strong>Ngày tạo</strong></td>
                <td>{!! $page->created_at !!}</td>
            </tr>
            <tr>
                <td><strong>Ngày cập nhật</strong></td>
                <td>{!! $page->updated_at !!}</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>
@stop
