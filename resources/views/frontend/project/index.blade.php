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
                        <a href="#">{!! $project->created_at !!}</a>
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
                        {!! mb_substr(strip_tags($project->description),0,500) !!}...
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


