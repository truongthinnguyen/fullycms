@extends('backend/layout/layout')
@section('content')
    <script type="text/javascript">
        $(document).ready(function () {
            $('#notification').show().delay(4000).fadeOut(700);
        });
    </script>
    <section class="content-header">
        <h1> Quyền hạn
            
        </h1>
        <ol class="breadcrumb">
            <li><a href="{!! url(getLang(). '/admin/role') !!}"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
            <li class="active">Quyền hạn</li>
        </ol>
    </section>
    <br>
    <div class="container">
        <div class="col-lg-10">
            @include('flash::message')
            <br>

            <div class="pull-left">
                <div class="btn-toolbar">
                    <a href="{!! langRoute('admin.role.create') !!}" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus"></span>&nbsp;Tạo quyền hạn </a>
                </div>
            </div>
            <br> <br> <br>
            @if($roles->count())
                <div class="">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Tên</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $roles as $role )
                            <tr>
                                <td> {!! link_to_route(getLang(). '.admin.role.show', $role->name, $role->id, array(
                                    'class' => 'btn btn-link btn-xs' )) !!}
                                <td>
                                    <div class="btn-group">
                                        <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                            Hành động <span class="caret"></span> </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{!! langRoute('admin.role.show', array($role->id)) !!}">
                                                    <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Xem tài khoản
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{!! langRoute('admin.role.edit', array($role->id)) !!}">
                                                    <span class="glyphicon glyphicon-edit"></span>&nbsp;Chỉnh sửa </a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="{!! URL::route('admin.role.delete', array($role->id)) !!}">
                                                    <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Xóa quyền hạn</a>
                                            </li>
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
                {!! $roles->render() !!}
            </ul>
        </div>
    </div>
@stop