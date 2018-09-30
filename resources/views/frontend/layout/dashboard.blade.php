@extends('frontend/layout/layout')
@section('content')

<section id="feature_news_section" class="feature_news_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="feature_article_wrapper">
                    <div class="feature_article_img">
                        @if($firstHotNews->path)
                        <img class="img-responsive top_static_article_img" src="{!! url($firstHotNews->path) !!}" alt="feature-top"/>
                        @else
                        <img class="img-responsive top_static_article_img" src="{!! url('assets/img/feature-top.jpg') !!}" alt="feature-top"/>
                        @endif
                    </div>
                    <!-- feature_article_img -->
                    <div class="feature_article_inner">
                        <div class="tag_lg red"><a href="category.html">Hot News</a></div>
                        <div class="feature_article_title">
                            <h1><a href="{!! URL::route('dashboard.news.show', array('slug'=>$firstHotNews->slug)) !!}" target="_self">{!! $firstHotNews->title !!}</a></h1>
                        </div>
                        <!-- feature_article_title -->
                        <div class="feature_article_date"><a href="#" target="_self">{!! $firstHotNews->created_at !!}</a>
                        </div>
                        <!-- feature_article_date -->
                        <div class="feature_article_content">
                            {!! mb_substr(strip_tags($firstHotNews->content),0,250) !!}...
                        </div>
                        <!-- feature_article_content -->
                    </div>
                    <!-- feature_article_inner -->
                </div>
                <!-- feature_article_wrapper -->
            </div>
            <!-- col-md-7 -->
            

            <div class="col-md-5">
                <div class="feature_static_wrapper">
                    <div class="feature_article_img">
                        @if($secondHotNews->path)
                        <img class="img-responsive top_static_article_img" src="{!! url($secondHotNews->path) !!}" alt="feature-top"/>
                        @else
                        <img class="img-responsive top_static_article_img" src="{!! url('assets/img/feature-static1.jpg') !!}" alt="feature-top"/>
                        @endif
                    </div>
                    <!-- feature_article_img -->
                    <div class="feature_article_inner">
                        <div class="tag_lg purple"><a href="category.html">Top Viewed</a></div>
                        <div class="feature_article_title">
                            <h1><a href="{!! URL::route('dashboard.news.show', array('slug'=>$secondHotNews->slug)) !!}" target="_self">{!! $secondHotNews->title !!}</a></h1>
                        </div>
                        <!-- feature_article_title -->
                        <div class="feature_article_date"><a href="#"
                            target="_self">{!! $secondHotNews->created_at !!}</a>
                        </div>
                        <!-- feature_article_date -->
                        <div class="feature_article_content">
                            {!! mb_substr(strip_tags($secondHotNews->content),0,100) !!}...
                        </div>
                        <!-- feature_article_content -->
                    </div>
                    <!-- feature_article_inner -->
                </div>
                <!-- feature_static_wrapper -->
            </div>
            <!-- col-md-5 -->


            <div class="col-md-5">
                <div class="feature_static_last_wrapper">
                    <div class="feature_article_img">
                        @if($thirdHotNews->path)
                        <img class="img-responsive top_static_article_img" src="{!! url($thirdHotNews->path) !!}" alt="feature-top"/>
                        @else
                        <img class="img-responsive top_static_article_img" src="{!! url('assets/img/feature-static2.jpg') !!}" alt="feature-top"/>
                        @endif
                    </div>
                    <!-- feature_article_img -->
                    <div class="feature_article_inner">
                        <div class="tag_lg blue"><a href="category.html">Top Viewed</a></div>
                        <div class="feature_article_title">
                            <h1><a href="{!! URL::route('dashboard.news.show', array('slug'=>$thirdHotNews->slug)) !!}" target="_self">{!! $thirdHotNews->title !!}</a></h1>
                        </div>
                        <!-- feature_article_title -->
                        <div class="feature_article_date"><a href="#"
                            target="_self">{!! $thirdHotNews->created_at !!}</a>
                        </div>
                        <!-- feature_article_date -->
                        <div class="feature_article_content">
                            {!! mb_substr(strip_tags($thirdHotNews->content),0,100) !!}...
                        </div>
                        <!-- feature_article_content -->
                    </div>
                    <!-- feature_article_inner -->
                </div>
                <!-- feature_static_wrapper -->
            </div>
            <!-- col-md-5 -->
        </div>
        <!-- Row -->
    </div>
    <!-- container -->
</section>
<!-- Feature News Section -->
<section id="category_section" class="category_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="category_section tablet">
                    <div class="article_title header_pink">
                        <h2><a href="category.html" target="_self">Dự án</a></h2>
                    </div>
                    <!-- Mobile News Section -->
                    <div class="category_article_wrapper">
                        <div class="row">
                            @foreach($latestprojects as $project)
                            <div class="col-md-6">
                                <div class="category_article_body">
                                    <div class="top_article_img">
                                        <a href="{!! URL::route('dashboard.project.show', array('slug'=>$project->slug)) !!}" target="_self">
                                            @if($project->path)
                                            <img class="img-responsive" src="{!! url($project->path . 'thumb_' . $project->file_name) !!}" alt="">
                                            @else
                                            <img class="img-responsive" src="{!! url('assets/images/project_thumb.png') !!}" alt="">
                                            @endif
                                        </a>
                                    </div>
                                    <!-- top_article_img -->
                                    <span class="tag pink"><a href="category.html" target="_self">Nổi bật</a></span>
                                    <div class="category_article_title">
                                        <h2><a href="{!! URL::route('dashboard.project.show', array('slug'=>$project->slug)) !!}" target="_self">{!! $project->title !!}</a>
                                        </h2>
                                    </div>
                                    
                                    <!-- article_date -->
                                    <div class="category_article_content">
                                        Collaboratively administrate empowered markets via plug-and-play networks. Dynamically
                                        procrastinate B2C users after.
                                    </div>
                                    <!-- category_article_content -->
                                
                                </div>
                                <!-- category_article_body -->
                            </div>
                            <!-- col-md-6 -->
                            @endforeach
                        </div>
                        <!-- row -->
                    </div>
                    <!-- category_article_wrapper -->
                    <p class="divider"><a href="/en/project">Xem thêm&nbsp;&raquo;</a></p>
                </div>
                <!-- Tablet News Section -->
            
                <div class="category_section camera">
                    <div class="article_title header_orange">
                        <h2><a href="category.html" target="_self">Hình ảnh</a></h2>
                    </div>
                    <!-- article_title -->

                    @foreach($photoGallery as $photo_gallery)
                    <div class="category_article_wrapper">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="top_article_img">
                                    <a href="{!! URL::route('dashboard.photo_gallery.show', array('slug'=>$photo_gallery->slug)) !!}" target="_self">
                                        <img class="img-responsive" src="{!! url('uploads/dropzone/thumb_' . $photo_gallery->photos->first()->file_name) !!}" alt="feature-top">
                                    </a>
                                </div>
                                <!-- top_article_img -->
                            </div>
                            <div class="col-md-7">
                                <div class="category_article_title">
                                    <h2><a href="{!! URL::route('dashboard.photo_gallery.show', array('slug'=>$photo_gallery->slug)) !!}" target="_self">{!! $photo_gallery->title !!}</a></h2>
                                </div>
                                <!-- category_article_title -->
                               
                                <!-- category_article_wrapper -->
                                <div class="category_article_content">
                                   {!! $photo_gallery->content !!}
                                </div>
                                <!-- category_article_content -->
                              
                            </div>
                            <!-- col-md-7 -->
                        </div>
                        <!-- row -->
                    </div>
                    @endforeach
                </div>
                <!-- Camera News Section -->
            </div>
            <!-- Left Section -->
            @include('frontend/news/sidebar')
        </div>
        <!-- Row -->
    </div>
    <!-- Container -->
</section>
<!-- Category News Section -->
<section id="video_section" class="video_section">
    <div class="container">
        <div class="well">
            <div class="row">
                <div class="col-md-6">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/C8rQA8cWjCU"
                            frameborder="0" allowfullscreen></iframe>
                    </div>
                    <!-- embed-responsive -->
                </div>
                <!-- col-md-6 -->
                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zvPy4kUjd30"></iframe>
                    </div>
                    <!-- embed-responsive -->
                    <div class="embed-responsive embed-responsive-4by3 m16">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ikCaI-Lsr8k"></iframe>
                    </div>
                    <!-- embed-responsive -->
                </div>
                <!-- col-md-3 -->
                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/G32adnVaWLU"></iframe>
                    </div>
                    <!-- embed-responsive -->
                    <div class="embed-responsive embed-responsive-4by3 m16">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/KhFXOejagDc"></iframe>
                    </div>
                    <!-- embed-responsive -->
                </div>
                <!-- col-md-3 -->
            </div>
            <!-- row -->
        </div>
        <!-- well -->
    </div>
    <!-- Container -->
</section>
<!-- Video News Section -->
@endsection