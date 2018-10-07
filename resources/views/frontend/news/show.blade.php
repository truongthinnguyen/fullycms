@extends('frontend/layout/layout')
@section('content')
{!! HTML::style('ckeditor/contents.css') !!}

<section id="entity_section" class="entity_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="entity_wrapper">
                    <div class="entity_title">
                        <h1><a href="#">{!! $news->title !!}</a></h1>
                    </div>
                    <!-- entity_title -->
                    <div class="entity_meta"><a href="#" target="_self">{!! $news->created_at !!}</a></a>
                    </div>
                    
                    <!-- <div class="entity_thumb">
                        @if($news->path)
                            <img class="img-responsive" src="{!! url($news->path) !!}" alt="feature-top">
                        @else
                            <img class="img-responsive" src="{!! url('assets/images/news_m_thumb.png') !!}" alt="feature-top">
                        @endif
                    </div> -->
                    <!-- entity_thumb -->
                    <div class="entity_content">
                        {!! $news->content !!}
                    </div>
                    <!-- entity_content -->
                </div>
                <!-- entity_wrapper -->
               
            </div>
            <!--Left Section-->
            
            @include('frontend/news/sidebar')
        </div>
        <!-- row -->
    </div>
    <!-- container -->
</section>

@stop