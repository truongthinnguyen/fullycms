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

    {!! HTML::script("assets/js/jquery-2.1.4.min.js") !!}

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
                                    <?php  
                                    use Carbon\Carbon;

                                    function rebuild_date( $format, $time = 0 )
                                    {
                                        if ( ! $time ) $time = time();

                                        $lang = array();
                                        $lang['sun'] = 'CN';
                                        $lang['mon'] = 'T2';
                                        $lang['tue'] = 'T3';
                                        $lang['wed'] = 'T4';
                                        $lang['thu'] = 'T5';
                                        $lang['fri'] = 'T6';
                                        $lang['sat'] = 'T7';
                                        $lang['sunday'] = 'Chủ nhật';
                                        $lang['monday'] = 'Thứ hai';
                                        $lang['tuesday'] = 'Thứ ba';
                                        $lang['wednesday'] = 'Thứ tư';
                                        $lang['thursday'] = 'Thứ năm';
                                        $lang['friday'] = 'Thứ sáu';
                                        $lang['saturday'] = 'Thứ bảy';
                                        $lang['january'] = 'Tháng Một';
                                        $lang['february'] = 'Tháng Hai';
                                        $lang['march'] = 'Tháng Ba';
                                        $lang['april'] = 'Tháng Tư';
                                        $lang['may'] = 'Tháng Năm';
                                        $lang['june'] = 'Tháng Sáu';
                                        $lang['july'] = 'Tháng Bảy';
                                        $lang['august'] = 'Tháng Tám';
                                        $lang['september'] = 'Tháng Chín';
                                        $lang['october'] = 'Tháng Mười';
                                        $lang['november'] = 'Tháng M. một';
                                        $lang['december'] = 'Tháng M. hai';
                                        $lang['jan'] = 'T01';
                                        $lang['feb'] = 'T02';
                                        $lang['mar'] = 'T03';
                                        $lang['apr'] = 'T04';
                                        $lang['may2'] = 'T05';
                                        $lang['jun'] = 'T06';
                                        $lang['jul'] = 'T07';
                                        $lang['aug'] = 'T08';
                                        $lang['sep'] = 'T09';
                                        $lang['oct'] = 'T10';
                                        $lang['nov'] = 'T11';
                                        $lang['dec'] = 'T12';

                                        $format = str_replace( "r", "D, d M Y H:i:s O", $format );
                                        $format = str_replace( array( "D", "M" ), array( "[D]", "[M]" ), $format );
                                        $return = date( $format, $time );

                                        $replaces = array(
                                            '/\[Sun\](\W|$)/' => $lang['sun'] . "$1",
                                            '/\[Mon\](\W|$)/' => $lang['mon'] . "$1",
                                            '/\[Tue\](\W|$)/' => $lang['tue'] . "$1",
                                            '/\[Wed\](\W|$)/' => $lang['wed'] . "$1",
                                            '/\[Thu\](\W|$)/' => $lang['thu'] . "$1",
                                            '/\[Fri\](\W|$)/' => $lang['fri'] . "$1",
                                            '/\[Sat\](\W|$)/' => $lang['sat'] . "$1",
                                            '/\[Jan\](\W|$)/' => $lang['jan'] . "$1",
                                            '/\[Feb\](\W|$)/' => $lang['feb'] . "$1",
                                            '/\[Mar\](\W|$)/' => $lang['mar'] . "$1",
                                            '/\[Apr\](\W|$)/' => $lang['apr'] . "$1",
                                            '/\[May\](\W|$)/' => $lang['may2'] . "$1",
                                            '/\[Jun\](\W|$)/' => $lang['jun'] . "$1",
                                            '/\[Jul\](\W|$)/' => $lang['jul'] . "$1",
                                            '/\[Aug\](\W|$)/' => $lang['aug'] . "$1",
                                            '/\[Sep\](\W|$)/' => $lang['sep'] . "$1",
                                            '/\[Oct\](\W|$)/' => $lang['oct'] . "$1",
                                            '/\[Nov\](\W|$)/' => $lang['nov'] . "$1",
                                            '/\[Dec\](\W|$)/' => $lang['dec'] . "$1",
                                            '/Sunday(\W|$)/' => $lang['sunday'] . "$1",
                                            '/Monday(\W|$)/' => $lang['monday'] . "$1",
                                            '/Tuesday(\W|$)/' => $lang['tuesday'] . "$1",
                                            '/Wednesday(\W|$)/' => $lang['wednesday'] . "$1",
                                            '/Thursday(\W|$)/' => $lang['thursday'] . "$1",
                                            '/Friday(\W|$)/' => $lang['friday'] . "$1",
                                            '/Saturday(\W|$)/' => $lang['saturday'] . "$1",
                                            '/January(\W|$)/' => $lang['january'] . "$1",
                                            '/February(\W|$)/' => $lang['february'] . "$1",
                                            '/March(\W|$)/' => $lang['march'] . "$1",
                                            '/April(\W|$)/' => $lang['april'] . "$1",
                                            '/May(\W|$)/' => $lang['may'] . "$1",
                                            '/June(\W|$)/' => $lang['june'] . "$1",
                                            '/July(\W|$)/' => $lang['july'] . "$1",
                                            '/August(\W|$)/' => $lang['august'] . "$1",
                                            '/September(\W|$)/' => $lang['september'] . "$1",
                                            '/October(\W|$)/' => $lang['october'] . "$1",
                                            '/November(\W|$)/' => $lang['november'] . "$1",
                                            '/December(\W|$)/' => $lang['december'] . "$1" );

                                        return preg_replace( array_keys( $replaces ), array_values( $replaces ), $return );
                                    }

                                    /*$contents .= 'Thời gian hiện tại: ' . rebuild_date('H:i d/m/Y' ) . '<br />';
                                    $contents .= 'Thứ hiện tại: ' . rebuild_date('l' ) . '<br />';
                                    $contents .= 'Tháng hiện tại: ' . rebuild_date('F' ) . '<br />';

                                    $time = 1444954852;
                                    $contents .= '<br /><br />Timestamp: ' . $time . '<br />';
                                    $contents .= 'Thời gian: ' . rebuild_date('H:i d/m/Y', $time ) . '<br />';
                                    $contents .= 'Thứ: ' . rebuild_date('l', $time ) . '<br />';
                                    $contents .= 'Tháng: ' . rebuild_date('F', $time ) . '<br />';*/

                                    $time = Carbon::now()->timestamp;
                                    ?>

                                    <span class="date">
                                        {!! rebuild_date('l') .' '. rebuild_date('d', $time ) .' '. rebuild_date('F', $time ) . ' '. rebuild_date('Y', $time ) !!}
                                    </span>
                        
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
                                    <a href="/"><img src="{!! url('/assets/img/logo.png') !!}" alt="Kim Oanh Thành Phố Mới"></a>
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
                                <p></p>
                                <p>Lô C, Đường Lê Lợi, Phường Hoà Phú, TP.Thủ Dầu Một, Bình Dương
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer_widget_title">
                                <h3><a href="#" target="_self">Liên hệ</a></h3>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="single.html">Email: support@kimoanhthanhphomoi.com</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="single.html">Phone: 097.183.3739</a>
                                    </h3>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdEJG14wdhMvkvgu4iYTfA_7hmYc7V25Q&callback=loadGoogleMap"></script>
{!! HTML::script("assets/js/mobile-menu.js") !!}
{!! HTML::script("assets/js/owl.carousel.min.js") !!}
{!! HTML::script("assets/js/script.js") !!}
</body>
</html>
