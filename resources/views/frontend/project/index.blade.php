@extends('frontend/layout/layout')
@section('content')
{!! HTML::style('ckeditor/contents.css') !!}
{!! HTML::script("frontend/js/jquery.isotope.min.js") !!}

<section id="entity_section" class="entity_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                @foreach($projects as $project)
                <!-- <li class="portfolio-item apps">
                    <div class="item-inner">
                       @if($project->path)
                        <img src="{!! url($project->path . 'thumb_' . $project->file_name) !!}" alt="">
                       @else
                        <img src="{!! url('assets/images/project_thumb.png') !!}" alt="">
                       @endif
                        <h5>{!! $project->title !!}</h5>
                        <div class="overlay">
                        @if($project->path)
                            <a class="preview btn btn-danger" href="{!! url($project->path . $project->file_name) !!}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                        @else
                            <a class="preview btn btn-danger" href="{!! url('assets/images/default.png') !!}" rel="prettyPhoto"><i class="icon-eye-open"></i></a>
                        @endif

                            <a class="preview btn btn-danger" href="{!! URL::route('dashboard.project.show', array('slug'=>$project->slug)) !!}" ><i class="icon-info-sign"></i></a>
                        </div>
                    </div>
                </li> --><!--/.portfolio-item-->
                @endforeach

                @foreach($projects as $project)
                <div class="entity_wrapper">
                    <div class="entity_title">
                        <h1><a href="{!! URL::route('dashboard.project.show', array('slug'=>$project->slug)) !!}" target="_self">{!! $project->title !!}</a>
                        </h1>
                    </div>
                    <!-- entity_title -->
                    <div class="entity_meta">
                        <a href="#">10Aug- 2015</a>, by: <a href="#">Eric joan</a>
                    </div>
                    <!-- entity_meta -->
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-full"></i>
                    </div>
                    <!-- rating -->
                    <div class="entity_social">
                        <a href="#" class="icons-sm sh-ic"><i class="fa fa-share-alt"></i><b>424</b>
                        <span class="share_ic">Shares</span>
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
                        <span class="arrow">&raquo;</span>
                    </div>
                    <!-- entity_social -->
                    <div class="entity_thumb">
                        @if($project->path)
                        <img class="img-responsive" src="{!! url($project->path . 'thumb_' . $project->file_name) !!}" alt="">
                        @else
                        <img class="img-responsive" src="{!! url('assets/images/project_thumb.png') !!}" alt="">
                        @endif
                    </div>
                    <!-- entity_thumb -->
                    <div class="entity_content">
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I
                            will give you a complete account of the system, and expound the actual teachings of the great explorer of
                            the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself,
                            because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter
                            consequences that are extremely painful. 
                        </p>
                    </div>
                    <!-- entity_content -->
                </div>
                <!-- entity_wrapper -->
                @endforeach
                
                
                <nav aria-label="Page navigation" class="pagination_section">
                    <ul class="pagination">
                        
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
</section>
<!-- entity_section -->

@stop


