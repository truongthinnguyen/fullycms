@extends('frontend/layout/layout')
@section('content')
{!! HTML::style('ckeditor/contents.css') !!}
{!! HTML::script("frontend/js/jquery.isotope.min.js") !!}

<section id="entity_section" class="entity_section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @foreach($projects as $project)
                <div class="entity_wrapper">
                    <div class="entity_title">
                        <h1><a href="{!! URL::route('dashboard.project.show', array('slug'=>$project->slug)) !!}" target="_self">{!! $project->title !!}</a>
                        </h1>
                    </div>
                    <!-- entity_title -->
                    <div class="entity_meta">
                        <a href="#">10Aug- 2015</a>
                    </div>
                    <!-- entity_meta -->
                    
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


