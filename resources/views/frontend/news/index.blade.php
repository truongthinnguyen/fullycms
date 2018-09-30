@extends('frontend/layout/layout')
@section('content')

<section class="breadcrumb_section">
    <div class="container">
        <div class="row">
            @yield('partial/breadcrumbs', Breadcrumbs::render('news', $news))
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="entity_wrapper">
                <div class="entity_title header_purple">
                    <h1><a href="category.html" target="_blank">Mobile</a></h1>
                </div>
                <!-- entity_title -->
                <div class="entity_thumb">
                    <img class="img-responsive" src="{!! url('assets/img/category_img_top.jpg') !!}" alt="feature-top">
                </div>
                <!-- entity_thumb -->
                <div class="entity_title">
                    <a href="single.html" target="_blank">
                        <h3> Airbnb launches photo-centric app for iPads and Android
                            tablets. 
                        </h3>
                    </a>
                </div>
                <!-- entity_title -->
                <div class="entity_meta">
                    <a href="#">10Aug- 2015</a>
                </div>
                <!-- entity_meta -->
                <div class="entity_content">
                    Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users
                    after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
                </div>
                <!-- entity_content -->
                <div class="entity_social">
                    <span><i class="fa fa-share-alt"></i>424 <a href="#">Shares</a> </span>
                    <span><i class="fa fa-comments-o"></i>4 <a href="#">Comments</a> </span>
                </div>
                <!-- entity_social -->
            </div>
            <!-- entity_wrapper -->
            <div class="row">
                @foreach( $news as $v )
                <div class="col-md-6">
                    <div class="category_article_body">
                        <div class="top_article_img">
                            @if($v->path)
                            <img class="img-fluid" src="{!! url($v->path) !!}" alt="feature-top"/>
                            @else
                            <img class="img-fluid" src="{!! url('assets/images/news_thumb.png') !!}" alt="feature-top"/>
                            @endif
                        </div>
                        <!-- top_article_img -->
                        <div class="category_article_title">
                            <h5><a href="{!! URL::route('dashboard.news.show', array('slug'=>$v->slug)) !!}">{!! $v->title !!}</a>
                            </h5>
                        </div>
                        <!-- category_article_title -->
                        <div class="article_date">
                            <a href="#">{!! $v->created_at !!}</a>
                        </div>
                        <!-- article_date -->
                        <div class="category_article_content">
                            {!! mb_substr(strip_tags($v->content),0,500) !!}...
                        </div>
                        <!-- category_article_content -->
                        <div class="article_social">
                            <span><a href="#"><i class="fa fa-share-alt"></i>424 </a> Shares</span>
                            <span><i class="fa fa-comments-o"></i><a href="#">4</a> Comments</span>
                        </div>
                        <!-- article_social -->
                    </div>
                    <!-- category_article_body -->
                </div>
                <!-- col-md-6 -->
                @endforeach
                
                
            </div>
            <!-- row -->
        
            <nav aria-label="Page navigation" class="pagination_section">
                <ul class="pagination">
                    {!! $news->render() !!}
                </ul>
            </nav>
            <!-- navigation -->
        </div>
        <!-- col-md-8 -->

        @include('frontend/news/sidebar')

    </div>
    <!-- row -->
</div>
<!-- container -->

@stop

