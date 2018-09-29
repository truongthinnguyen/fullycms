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
                    <div class="entity_meta"><a href="#" target="_self">{!! $news->created_at !!}</a>, by: <a href="#" target="_self">Eric joan</a>
                    </div>
                    <!-- entity_meta -->
                    <div class="entity_rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-full"></i>
                    </div>
                    <!-- entity_rating -->
                    <div class="entity_social">
                        <a href="#" class="icons-sm sh-ic">
                        <i class="fa fa-share-alt"></i>
                        <b>424</b> <span class="share_ic">Shares</span>
                        </a>
                        <a href="#" class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                        <!--Twitter-->
                        <a href="#" class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                        <!--Google +-->
                        <a href="#" class="icons-sm inst-ic"><i class="fa fa-google-plus"> </i></a>
                        <!--Linkedin-->
                        <a href="#" class="icons-sm tmb-ic"><i class="fa fa-ge"> </i></a>
                        <!--Pinterest-->
                        <a href="#" class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                    </div>
                    <!-- entity_social -->
                    <div class="entity_thumb">
                        @if($news->path)
                            <img class="img-responsive" src="{!! url($news->path) !!}" alt="feature-top">
                        @else
                            <img class="img-responsive" src="{!! url('assets/images/news_m_thumb.png') !!}" alt="feature-top">
                        @endif
                    </div>
                    <!-- entity_thumb -->
                    <div class="entity_content">
                        {!! $news->content !!}
                    </div>
                    <!-- entity_content -->
                    <div class="entity_footer">
                        <div class="entity_tag">
                            <span class="blank"><a href="#">Tech</a></span>
                            <span class="blank"><a href="#">Transport</a></span>
                            <span class="blank"><a href="#">Mobile</a></span>
                            <span class="blank"><a href="#">Gadgets</a></span>
                        </div>
                        <!-- entity_tag -->
                        <div class="entity_social">
                            <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
                            <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
                        </div>
                        <!-- entity_social -->
                    </div>
                    <!-- entity_footer -->
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