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

<div id="main-wrapper">
    <!-- Page Preloader -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- preloader -->
    <div class="uc-mobile-menu-pusher">
        <div class="content-wrapper">
            <section id="header_section_wrapper" class="header_section_wrapper">
                <div class="container">
                    <div class="header-section">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="left_section">
                                    <span class="date">
                                    Sunday .
                                    </span>
                                    <!-- Date -->
                                    <span class="time">
                                    09 August . 2018
                                    </span>
                                    <!-- Time -->
                                    <div class="social">
                                        <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                        <!--Twitter-->
                                        <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                        <!--Google +-->
                                        <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                        <!--Linkedin-->
                                        <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                                        <!--Pinterest-->
                                        <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                                    </div>
                                    <!-- Top Social Section -->
                                </div>
                                <!-- Left Header Section -->
                            </div>
                            <div class="col-md-4">
                                <div class="logo">
                                    <a href="/"><img src="{!! url('/assets/img/logo.png') !!}" alt="Tech NewsLogo"></a>
                                </div>
                                <!-- Logo Section -->
                            </div>
                            <div class="col-md-4">
                                <div class="right_section">
                                    <!-- Language Section -->
                                    <ul class="nav-cta hidden-xs" style="left: 0">
                                        <li class="dropdown">
                                            <a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                                class="fa fa-search"></i></a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="head-search">
                                                        <form role="form">
                                                            <!-- Input Group -->
                                                            <div class="input-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Nhập từ khóa"> <span class="input-group-btn">
                                                                <button type="submit"
                                                                    class="btn btn-primary">Tìm kiếm
                                                                </button>
                                                                </span>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <!-- Search Section -->
                                </div>
                                <!-- Right Header Section -->
                            </div>
                        </div>
                    </div>
                    <!-- Header Section -->
                    <div class="navigation-section">
                        <nav class="navbar m-menu navbar-default">
                            <div class="container">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                        data-target="#navbar-collapse-1"><span class="sr-only">Toggle navigation</span> <span
                                        class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                                    <ul class="nav navbar-nav main-nav">
                                        <li class="active"><a href="/">Trang chủ</a></li>
                                        <li><a href="{!! url('/en/page/gioi-thieu') !!}">Giới thiệu</a></li>
                                        <li><a href="/en/project">Dự án</a></li>
                                        <li><a href="/en/news">Tin tức</a></li>
                                        <li><a href="{!! url('/en/page/tuyen-dung') !!}">Tuyển dụng</a></li>
                                        <li><a href="/en/contact">Liên hệ</a></li>
                                    </ul>
                                </div>
                                <!-- .navbar-collapse -->
                            </div>
                            <!-- .container -->
                        </nav>
                        <!-- .nav -->
                    </div>
                    <!-- .navigation-section -->
                </div>
                <!-- .container -->
            </section>
            <!-- header_section_wrapper -->
            @yield('content')
            <!-- Video News Section -->
            
            <section id="footer_section" class="footer_section">
                <div class="container">
                    <hr class="footer-top">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer_widget_title">
                                <h3><a href="category.html" target="_self">Địa chỉ</a></h3>
                            </div>
                            <div class="logo footer-logo">
                                <div id="map" style="width: 100%; height: 250px;">
                                </div>

                                <p>Lô C, Đường Lê Lợi, Phường Hoà Phú, TP.Thủ Dầu Một, Bình Dương
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer_widget_title">
                                <h3><a href="#" target="_self">Editor Picks</a></h3>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{!! url('assets/img/editor_pic1.jpg') !!}"
                                        alt="Generic placeholder image"></a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="single.html">Apple launches photo-centric wrist watch for Android</a>
                                    </h3>
                                    <span class="rating">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star-half-full"></i> 
                                    </span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{!! url('assets/img/editor_pic2.jpg') !!}"
                                        alt="Generic placeholder image"></a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="single.html">Apple launches photo-centric wrist watch for Android</a>
                                    </h3>
                                    <span class="rating">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star-half-full"></i> 
                                    </span>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <a href="#"><img class="media-object" src="{!! url('assets/img/editor_pic3.jpg') !!}"
                                        alt="Generic placeholder image"></a>
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="single.html">Apple launches photo-centric wrist watch for Android</a>
                                    </h3>
                                    <span class="rating">
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star"></i> 
                                    <i class="fa fa-star-half-full"></i> 
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer_widget_title">
                                <h3><a href="category.html" target="_self">Tech Photos</a></h3>
                            </div>
                            <div class="widget_photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo1.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo2.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo3.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo4.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo5.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo6.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo7.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo8.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo9.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo10.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo11.jpg') !!}" alt="Tech Photos">
                                <img class="img-thumbnail" src="{!! url('assets/img/tech_photo12.jpg') !!}" alt="Tech Photos">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bottom_Section">
                    <div class="container">
                        <div class="row">
                            <div class="footer">
                                <div class="col-sm-3">
                                    <div class="social">
                                        <a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
                                        <!--Twitter-->
                                        <a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
                                        <!--Google +-->
                                        <a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
                                        <!--Linkedin-->
                                        <a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
                                        <!--Pinterest-->
                                        <a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <p>Copyright (c) 2018 Dự Án Bất Động Sản Kim Oanh </p>
                                </div>
                                <div class="col-sm-3">
                                    <p>Liên hệ Mr.Lam để được tư vấn 097.183.3739</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- #content-wrapper -->
    </div>
    <!-- .offcanvas-pusher -->
    <a href="#" class="crunchify-top"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
    <div class="uc-mobile-menu uc-mobile-menu-effect">
        <button type="button" class="close" aria-hidden="true" data-toggle="offcanvas"
            id="uc-mobile-menu-close-btn">&times;</button>
        <div>
            <div>
                <ul id="menu">
                    <li class="active"><a href="/">Trang chủ</a></li>
                    <li><a href="{!! url('/en/page/gioi-thieu') !!}">Giới thiệu</a></li>
                    <li><a href="/en/project">Dự án</a></li>
                    <li><a href="/en/news">Tin tức</a></li>
                    <li><a href="{!! url('/en/page/tuyen-dung') !!}">Tuyển dụng</a></li>
                    <li><a href="/en/contact">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- .uc-mobile-menu -->
</div>
<!-- #main-wrapper -->


{!! HTML::script("assets/js/jquery-2.1.4.min.js") !!}
{!! HTML::script("assets/js/bootstrap.min.js") !!}

<script>
    var map;
    function loadGoogleMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: 10.762622, lng: 106.660172},
            zoom: 8
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1mFAnJaAxth0EBUm2RiT71qNeIFiQyHI&callback=loadGoogleMap"></script>
{!! HTML::script("assets/js/mobile-menu.js") !!}
{!! HTML::script("assets/js/owl.carousel.min.js") !!}
{!! HTML::script("assets/js/script.js") !!}
</body>
</html>
