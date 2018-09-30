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
                            {!! mb_substr(strip_tags($v->content),0,200) !!}...
                        </div>
                        <!-- category_article_content -->
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

