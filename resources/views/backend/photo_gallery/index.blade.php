@extends('backend/layout/layout')
@section('content')
<script type="text/javascript">
    $(document).ready(function () {

        $('#notification').show().delay(4000).fadeOut(700);

        // publish settings
        $(".publish").bind("click", function (e) {
            var id = $(this).attr('id');
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "{!! url(getLang() . '/admin/photo-gallery/" + id + "/toggle-publish/') !!}",
                headers: {
                    'X-CSRF-Token': $('meta[name="_token"]').attr('content')
                },
                success: function (response) {
                    if (response['result'] == 'success') {
                        var imagePath = (response['changed'] == 1) ? "{!!url('/')!!}/assets/images/publish.png" : "{!!url('/')!!}/assets/images/not_publish.png";
                        $("#publish-image-" + id).attr('src', imagePath);
                    }
                },
                error: function () {
                    alert("error");
                }
            })
        });
    });
</script>
<section class="content-header">
    <h1> Thư viện
    </h1>
    <ol class="breadcrumb">
        <li><a href="{!! url(getLang(). '/admin') !!}"><i class="fa fa-dashboard"></i> Bảng điều khiển</a></li>
        <li class="active">Hình ảnh</li>
    </ol>
</section>
<br><br>
<div class="container">
    <div class="col-lg-10">

        @include('flash::message')
        <br>

        <div class="pull-left">
            <div class="btn-toolbar"><a href="{!! langRoute('admin.photo-gallery.create') !!}" class="btn btn-primary">
                    <span class="glyphicon glyphicon-plus"></span>&nbsp;Thêm thư viện hình ảnh </a></div>
        </div>
        <br>
        <br>
        <br>
        @if($photo_galleries->count())
        <div class="">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Tiêu đề</th>
                    <th>Ngày tạo</th>
                    <th>Ngày cập nhật</th>
                    <th>Hành động</th>
                    <th>Cài đặt</th>
                </tr>
                </thead>
                <tbody>
                @foreach( $photo_galleries as $photo_gallery )
                <tr>
                    <td> {!! link_to_route(getLang(). '.admin.photo-gallery.show', $photo_gallery->title, $photo_gallery->id, array( 'class' => 'btn btn-link btn-xs' )) !!}
                    <td>{!! $photo_gallery->created_at !!}</td>
                    <td>{!! $photo_gallery->updated_at !!}</td>
                    <td>
                        <div class="btn-group">
                            <a class="btn btn-danger dropdown-toggle" data-toggle="dropdown" href="#">
                                Hành động
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{!! langRoute('admin.photo-gallery.show', array($photo_gallery->id)) !!}">
                                        <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Xem hình ảnh
                                    </a>
                                </li>
                                <li>
                                    <a href="{!! langRoute('admin.photo-gallery.edit', array($photo_gallery->id)) !!}">
                                        <span class="glyphicon glyphicon-edit"></span>&nbsp;Chỉnh sửa
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="{!! URL::route('admin.photo-gallery.delete', array($photo_gallery->id)) !!}">
                                        <span class="glyphicon glyphicon-remove-circle"></span>&nbsp;Xóa hình ảnh
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a target="_blank" href="{!! URL::route('dashboard.photo_gallery.show', ['slug' => $photo_gallery->slug]) !!}">
                                        <span class="glyphicon glyphicon-eye-open"></span>&nbsp;Xem trước
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                    <td>
                        <a href="#" id="{!! $photo_gallery->id !!}" class="publish"><img id="publish-image-{!! $photo_gallery->id !!}" src="{!!url('/')!!}/assets/images/{!! ($photo_gallery->is_published) ? 'publish.png' : 'not_publish.png'  !!}"/></a>
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
            {!! $photo_galleries->render() !!}
        </ul>
    </div>
</div>
@stop
