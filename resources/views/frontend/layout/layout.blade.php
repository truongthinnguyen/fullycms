<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{!! $settings['site_title'] or "Dự án bất động sản công ty Kim Oanh" !!}</title>
    <meta name="description" content="{!! isset($meta_description) ? $meta_description : ($settings['meta_description']) !!}">
    <meta name="keywords" content="{!! isset($meta_keywords) ? $meta_keywords : ($settings['meta_keywords']) !!}">
    <meta name="author" content="Mr. Lam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! HTML::style("https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese") !!}
    {!! HTML::style("assets/bootstrap/css/bootstrap.min.css") !!}
    {!! HTML::style("assets/animate.css/animate.min.css") !!}
    {!! HTML::style("assets/socicon/css/socicon.min.css") !!}
    {!! HTML::style("assets/mobirise/css/style.css") !!}
    {!! HTML::style("assets/mobirise-slider/style.css") !!}
    {!! HTML::style("assets/mobirise-gallery/style.css") !!}
    {!! HTML::style("assets/mobirise/css/mbr-additional.css") !!}

    <!--[if lt IE 9]>
    {!! HTML::script("frontend/js/html5shiv.js") !!}
    {!! HTML::script("frontend/js/respond.min.js") !!}
    <![endif]-->
    <link rel="shortcut icon" href="assets/images/discover-mobile-350x350-16.png" type="image/x-icon">

    <!-- <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', "{!! $settings['ga_code']  or 'UA-61740707-1' !!}"]);
        _gaq.push(['_trackPageview']);
        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();
    </script> -->
</head><!--/head-->
<body>
@include('frontend/layout/menu')
@yield('content')
@include('frontend/layout/footer')

{!! HTML::script("assets/jquery/jquery.min.js") !!}
{!! HTML::script("assets/bootstrap/js/bootstrap.min.js") !!}
{!! HTML::script("https://maps.googleapis.com/maps/api/js") !!}
{!! HTML::script("assets/smooth-scroll/SmoothScroll.js") !!}
{!! HTML::script("assets/jquery-mb-ytplayer/jquery.mb.YTPlayer.min.js") !!}
{!! HTML::script("assets/jarallax/jarallax.js") !!}
{!! HTML::script("assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js") !!}
{!! HTML::script("assets/masonry/masonry.pkgd.min.js") !!}
{!! HTML::script("assets/imagesloaded/imagesloaded.pkgd.min.js") !!}
{!! HTML::script("assets/social-likes/social-likes.js") !!}
{!! HTML::script("assets/mobirise/js/script.js") !!}
{!! HTML::script("assets/mobirise-gallery/script.js") !!}

</body>
</html>
