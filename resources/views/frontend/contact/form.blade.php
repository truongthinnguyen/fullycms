@extends('frontend/layout/layout')
@section('content')
<script type="text/javascript">
    $(document).ready(function () {

        $('#notification').show().delay(4000).fadeOut(700);
    });
</script>

<section id="title" class="emerald">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Liên Hệ</h1>

                <p>Quý khách vui lòng điền thông tin vào mẫu bên dưới và gửi những góp ý, thắc mắc cho Kim Oanh Group, chúng tôi sẽ phản hồi email của Quý khách trong thời gian sớm nhất.</p>
            </div>
        </div>
    </div>
</section><!--/#title-->

<section id="contact-page" class="container">
    <div class="row">
        <div class="col-sm-8">
          
            @if(Session::has('notification'))
            <div class="alert alert-success" id="notification">
                {!! Session::get('notification') !!}
            </div>
            @endif
            <div class="status alert alert-success" style="display: none"></div>
            {!! Form::open(array('action' => 'FormPostController@postContact')) !!}
            <div class="row">
                <div class="col-sm-5">

                    <!-- Sender Name Surname -->
                    <div class="control-group {!! $errors->has('sender_name_surname') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::text('sender_name_surname', null, array('class'=>'form-control', 'id' => 'sender_name_surname', 'placeholder'=>'Họ và tên', 'value'=>Input::old('sender_name_surname'))) !!}
                            @if ($errors->first('sender_name_surname'))
                            <span class="help-block">{!! $errors->first('sender_name_surname') !!}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Sender Email -->
                    <div class="control-group {!! $errors->has('sender_email') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::text('sender_email', null, array('class'=>'form-control', 'id' => 'sender_email', 'placeholder'=>'Địa chỉ email', 'value'=>Input::old('sender_email'))) !!}
                            @if ($errors->first('sender_email'))
                            <span class="help-block">{!! $errors->first('sender_email') !!}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Sender Phone -->
                    <div class="control-group {!! $errors->has('sender_phone_number') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::text('sender_phone_number', null, array('class'=>'form-control', 'id' => 'sender_phone_number', 'placeholder'=>'Số điện thoại', 'value'=>Input::old('sender_phone_number'))) !!}
                            @if ($errors->first('sender_phone_number'))
                            <span class="help-block">{!! $errors->first('sender_phone_number') !!}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Subject -->
                    <div class="control-group {!! $errors->has('subject') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::text('subject', null, array('class'=>'form-control', 'id' => 'subject', 'placeholder'=>'Tiêu đề', 'value'=>Input::old('subject'))) !!}
                            @if ($errors->first('subject'))
                            <span class="help-block">{!! $errors->first('subject') !!}</span>
                            @endif
                        </div>
                    </div>

                    {!! Form::submit('Gửi', array('class' => 'btn btn-info')) !!}
                </div>

                <!-- Message -->
                <div class="col-sm-7">
                    <div class="control-group {!! $errors->has('post') ? 'has-error' : '' !!}">

                        <div class="form-group">
                            {!! Form::textarea('message', null, array('class'=>'form-control', 'id' => 'message-content', 'placeholder'=>'Nội dung', 'value'=>Input::old('message'), 'rows'=>8)) !!}

                            @if ($errors->first('post'))
                            <span class="help-block">{!! $errors->first('post') !!}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Form actions -->
            </div>
            {!! Form::close() !!}

        </div>
        <!--/.col-sm-8-->
    </div>
</section><!--/#contact-page-->
@stop