<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>{!! $settings['site_title'] or "Dự án bất động sản công ty Kim Oanh" !!}</title>
    <meta name="description" content="{!! isset($meta_description) ? $meta_description : ($settings['meta_description']) !!}">
    <meta name="keywords" content="{!! isset($meta_keywords) ? $meta_keywords : ($settings['meta_keywords']) !!}">
    <meta name="author" content="Mr. Lam">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {!! HTML::style("https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,500&amp;subset=cyrillic,latin,greek,vietnamese") !!}
    {!! HTML::style("assets/css/bootstrap.min.css") !!}
    {!! HTML::style("assets/fonts/font-awesome/font-awesome.min.css") !!}
    {!! HTML::style("assets/css/mobile-menu.css") !!}
    {!! HTML::style("assets/css/owl.carousel.css") !!}
    {!! HTML::style("assets/css/owl.theme.default.min.css") !!}
    {!! HTML::style("assets/css/style.css") !!}
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head><!--/head-->
<body id="page-top" data-spy="scroll" data-target=".navbar">

@yield('content')


{!! HTML::script("assets/js/jquery-2.1.4.min.js") !!}
{!! HTML::script("assets/js/bootstrap.min.js") !!}
{!! HTML::script("assets/js/mobile-menu.js") !!}
{!! HTML::script("assets/js/owl.carousel.min.js") !!}
{!! HTML::script("assets/js/script.js") !!}

</body>
</html>
