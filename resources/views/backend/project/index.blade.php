@extends('backend/layout/layout')
@section('content')
    <script type="text/javascript">
        $(document).ready(function () {

            $('#notification').show().delay(4000).fadeOut(700);
        });
    </script>
    <section class="content-header">
        <h1> Dự án
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang(). '/admin') !!}"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
            <li class="active">Dự án</li>
        </ol>
    </section>
    <br>
    <div class="container">
        <div class="col-lg-10">
            @include('flash::message')
            <br>

            <div class="pull-left">
                <div class="btn-toolbar"><a href="{!! langRoute('admin.project.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Thêm dự án </a></div>
            </div>
            <br> <br> <br>
            @if($projects->count())
                <div class="">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tiêu đề</th>
                            <th>Ngày tạo</th>
                            <th>Ngày cập nhật</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $projects as $project )
                            <tr>
                                <td> {!! link_to_route(getLang(). '.admin.project.show', $project->title, $project->id,
                                    array( 'class' => 'btn btn-link btn-xs' )) !!}
                                </td>
                                <td>{!! $project->created_at !!}</td>
                                <td>{!! $project->updated_at !!}</td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                            Hành động <span class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{!! langRoute('admin.project.show', array($project->id)) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Xem dự án
                                                </a></li>
                                            <li><a href="{!! langRoute('admin.project.edit', array($project->id)) !!}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Chỉnh sửa
                                                </a></li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="{!! URL::route('admin.project.delete', array($project->id)) !!}">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Xóa dự án </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a target="_blank" href="{!! URL::route('dashboard.project.show', array('slug' => $project->slug)) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Xem trước
                                                </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="alert alert-danger"</i> Chưa có kết quả nào</a>/div>
            @endif
        </div>
        <div class="pull-left">
            <ul class="pagination">
                {!! $projects->render() !!}
            </ul>
        </div>
    </div>
@stop