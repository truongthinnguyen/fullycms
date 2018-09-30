
<div class="col-md-4">
    <div class="widget">
        <div class="widget_title widget_black">
            <h2><a href="#">Tin gần đây</a></h2>
        </div>
        @foreach($latestnews as $item)
        <div class="media">
            <div class="media-left">
                <a href="{!! URL::route('dashboard.news.show', array('slug'=>$item->slug)) !!}">
                    @if($item->path)
                        <img style="max-width: 150px;" class="media-object" src="{!! url($item->path) !!}" alt="Generic placeholder image"/>
                    @else
                        <img style="max-width: 150px;" class="media-object" src="{!! url('assets/images/news_thumb.png') !!}" alt="Generic placeholder image"/>
                    @endif
                </a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">
                    <a href="{!! URL::route('dashboard.news.show', array('slug'=>$item->slug)) !!}" target="_blank">{!! $item->title !!}</a>
                </h3>
                <span class="media-date"><a href="#">{!! $item->created_at !!}</a></span>
            </div>
        </div>
        @endforeach
        
        <p class="widget_divider"><a href="/en/news" target="_blank">Xem thêm&nbsp;&raquo;</a></p>
    </div>
    <!-- Popular News -->

    <div class="widget hidden-xs m30">
        <img class="img-responsive adv_img" src="{!! url('assets/img/right_add1.jpg') !!}" alt="add_one">
        <img class="img-responsive adv_img" src="{!! url('assets/img/right_add2.jpg') !!}" alt="add_one">
        <img class="img-responsive adv_img" src="{!! url('assets/img/right_add3.jpg') !!}" alt="add_one">
        <img class="img-responsive adv_img" src="{!! url('assets/img/right_add4.jpg') !!}" alt="add_one">
    </div>
    <!-- Advertisement -->
</div>
<!-- col-md-4 -->
