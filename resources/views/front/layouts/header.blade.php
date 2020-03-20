<!DOCTYPE html>
<html dir="ltr" lang="tr-TR">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="Çağkan TAŞCI" />

    <!-- Stylesheets
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Source+Sans+Pro:300,400,600,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('front/')}}/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/')}}/style.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/')}}/css/swiper.css" type="text/css" />

    <!-- Construction Demo Specific Stylesheet -->
    <link rel="stylesheet" href="{{asset('front/')}}/demos/construction/construction.css" type="text/css" />
    <!-- / -->

    <link rel="stylesheet" href="{{asset('front/')}}/css/dark.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/')}}/css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/')}}/css/animate.css" type="text/css" />
    <link rel="stylesheet" href="{{asset('front/')}}/css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="{{asset('front/')}}/demos/construction/css/fonts.css" type="text/css" />

    <link rel="stylesheet" href="{{asset('front/')}}/css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="{{asset('front/')}}/demos/construction/css/colors.css" type="text/css" />

    <!-- Document Title
    ============================================= -->
    <title>{{env('APP_NAME')}}</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Top Bar
    ============================================= -->
    <div id="top-bar">

        <div class="container clearfix">

            <div class="col_half nobottommargin clearfix">

                <!-- Top Social
                ============================================= -->
                <div id="top-social">
                    <ul>
                        <li><a href="#" class="si-facebook"><span class="ts-icon"><i class="icon-facebook"></i></span><span class="ts-text">Facebook</span></a></li>
                        <li><a href="#" class="si-twitter"><span class="ts-icon"><i class="icon-twitter"></i></span><span class="ts-text">Twitter</span></a></li><!--
							<li><a href="#" class="si-dribbble"><span class="ts-icon"><i class="icon-dribbble"></i></span><span class="ts-text">Dribbble</span></a></li>
							<li><a href="#" class="si-github"><span class="ts-icon"><i class="icon-github-circled"></i></span><span class="ts-text">Github</span></a></li>
							<li><a href="#" class="si-pinterest"><span class="ts-icon"><i class="icon-pinterest"></i></span><span class="ts-text">Pinterest</span></a></li>
							<li><a href="#" class="si-instagram"><span class="ts-icon"><i class="icon-instagram2"></i></span><span class="ts-text">Instagram</span></a></li> -->
                    </ul>
                </div><!-- #top-social end -->

            </div>

            <div class="col_half fright col_last clearfix nobottommargin">

                <!-- Top Links
                ============================================= -->
                <div class="top-links">
                    <ul>
                        <li><a href="{{asset('front')}}/{{asset('front')}}/index.html">TÜRKÇE</a>
                            <ul>
                                <li><a href="#">ENGLISH</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- .top-links end -->

            </div>

        </div>

    </div><!-- #top-bar end -->

    <!-- Header
    ============================================= -->
    <header id="header" class="sticky-style-2">

        <div class="container clearfix">

            <!-- Logo
            ============================================= -->
            <div id="logo">
                <a href="{{asset('front')}}/index.html" class="standard-logo"><img src="{{asset('front')}}/images/greenland_logo.png" alt="Greenland Logo"></a>
                <a href="{{asset('front')}}/index.html" class="retina-logo"><img src="{{asset('front')}}/images/greenland_logo@2x.png" alt="Greenland Logo"></a>
            </div><!-- #logo end -->

            <ul class="header-extras">
                <li>
                    <i class="i-plain icon-call nomargin"></i>
                    <div class="he-text">
                        BİZİ ARAYIN
                        <span>(90) 222 542 15 82</span>
                    </div>
                </li>
                <li>
                    <i class="i-plain icon-line2-envelope nomargin"></i>
                    <div class="he-text">
                        E-POSTA GÖNDERİN
                        <span>info@greenland.com.tr</span>
                    </div>
                </li>
            </ul>

        </div>

        <div id="header-wrap">

            <!-- Primary Navigation
            ============================================= -->
            <nav id="primary-menu" class="with-arrows style-2 center">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <ul>
                        <li class="current"><a href="#"><div>ANASAYFA</div></a></li>
                        <li><a href="#"><div>HAKKIMIZDA</div></a></li>
                        <li><a href="#"><div>HİZMETLERİMİZ</div></a>
                            <!-- <ul>
                                <li><a href="#"><div>Housing Management</div></a></li>
                                <li><a href="#"><div>Construction Planning</div></a></li>
                                <li><a href="#"><div>Green Homes</div></a></li>
                                <li><a href="#"><div>Architecture Design</div></a></li>
                                <li><a href="#"><div>Interior Planning</div></a></li>
                            </ul> -->
                        </li>
                        <li><a href="#"><div>MARKALARIMIZ</div></a></li>
                        <li><a href="#"><div>İLETİŞİM</div></a></li>
                    </ul>

                    <!-- Top Search
                    ============================================= -->
                    <!-- <div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div> --><!-- #top-search end -->

                </div>

            </nav><!-- #primary-menu end -->

        </div>

    </header><!-- #header end -->
