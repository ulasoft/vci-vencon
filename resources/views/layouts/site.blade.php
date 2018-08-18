@php
    $lang = Request::segment(1);
@endphp
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title_head')Uzbekistan</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="img/favicon/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/animate/animate.min.css">
    <link rel="stylesheet" href="/libs/swiper-slider/dist/css/swiper.min.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">
    <script src="/libs/modernizr/modernizr.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="toTop"> <i class="fa fa-chevron-up"></i> </div>
    <header>
        <div class="main-nav2 animated bounceInDown">
            <div class="container">
                <div class="first">
                    <div class="responsive-nav">
                        <div class="mobile-logo">
                            <a href="/{{$lang}}">
                                <img src="/img/logo.png">
                            </a>
                        </div><!-- logo -->
                        <ul class="main-ul">
                            <li><a href="/{{$lang}}">@lang('s.home')</a></li>
                            <li><a href="{{Route('regions',[$lang])}}">@lang('s.regions')</a></li>
                            <li><a href="{{Route('hotels',[$lang])}}">@lang('s.hotels')</a></li>
                            <li><a href="{{Route('restaurants',[$lang])}}">@lang('s.restaurants')</a></li>
                            <span class="dropdown">
									<a class="dropdown-toggle dropdown-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="/img/{{$lang}}.png" alt="eng" class="img-width">
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @if($lang == 'ru')
                                            <a class="dropdown-item animated fadeInRight" href="/en">
                                                <img src="/img/en.png" alt="en" class="img-width"> ENG
                                            </a>

                                            <a class="dropdown-item " href="/uz">
                                                <img src="/img/uz.png" alt="uzb" class="img-width"> UZB
                                            </a>
                                        @endif
                                        @if($lang == 'en')
                                            <a class="dropdown-item animated fadeInRight" href="/ru">
                                                    <img src="/img/ru.png" alt="ru" class="img-width"> РУС
                                                </a>

                                            <a class="dropdown-item " href="/uz">
                                                    <img src="/img/uz.png" alt="uzb" class="img-width"> UZB
                                                </a>
                                        @endif
                                        @if($lang == 'uz')
                                            <a class="dropdown-item animated fadeInRight" href="/ru">
                                                <img src="/img/ru.png" alt="ru" class="img-width"> РУС
                                            </a>

                                            <a class="dropdown-item animated fadeInRight" href="/en">
                                                <img src="/img/en.png" alt="en" class="img-width"> ENG
                                            </a>
                                        @endif
									</div>
                            </span><!-- dropdown -->
                        </ul><!-- main-ul -->

                    </div><!-- responsive-nav -->
                    <main class="main">
                        <a class="ssm-toggle-nav menu-toggle" href="#">
                            <div id="menu-icon">
                                <div class="bar"></div>
                                <div class="bar"></div>
                                <div class="bar"></div>
                            </div><!-- menu-icon -->
                        </a><!-- menu-toggle -->
                    </main><!-- main -->
                    <div id="brand">
                        <div class="logo">
                            <a href="/{{$lang}}">
                                <img src="/img/logo.png">
                            </a>
                        </div><!-- #logo -->
                    </div><!-- #brand -->
                    <div class="ssm-overlay ssm-toggle-nav"></div>
                </div><!-- first -->
                <div class="second">
                    <div class="not-responsive-nav">
                        <div class="container d-flex space-between">
                            <div class="d-flex logo">
                                <a href="/{{$lang}}">
                                    <img src="/img/logo.png">
                                </a>
                            </div><!-- #logo -->
                            <ul class="desktop-ul d-flex">
                                <li><a href="/{{$lang}}">@lang('s.home')</a></li>
                                <li><a href="{{Route('regions',[$lang])}}">@lang('s.regions')</a></li>
                                <li><a href="{{Route('hotels',[$lang])}}">@lang('s.hotels')</a></li>
                                <li><a href="{{Route('restaurants',[$lang])}}">@lang('s.restaurants')</a></li>

                                <span class="dropdown">
									<a class="dropdown-toggle dropdown-link" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										<img src="/img/{{$lang}}.png" alt="eng" class="img-width">
									</a>
									<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @if($lang == 'ru')
                                            <a class="dropdown-item animated fadeInRight" href="/en">
                                                <img src="/img/en.png" alt="en" class="img-width"> ENG
                                            </a>

                                            <a class="dropdown-item " href="/uz">
                                                <img src="/img/uz.png" alt="uzb" class="img-width"> UZB
                                            </a>
                                        @endif
                                        @if($lang == 'en')
                                                <a class="dropdown-item animated fadeInRight" href="/ru">
                                                    <img src="/img/ru.png" alt="ru" class="img-width"> РУС
                                                </a>

                                                <a class="dropdown-item " href="/uz">
                                                    <img src="/img/uz.png" alt="uzb" class="img-width"> UZB
                                                </a>
                                        @endif
                                        @if($lang == 'uz')
                                            <a class="dropdown-item animated fadeInRight" href="/ru">
                                                <img src="/img/ru.png" alt="ru" class="img-width"> РУС
                                            </a>

                                            <a class="dropdown-item animated fadeInRight" href="/en">
                                                <img src="/img/en.png" alt="en" class="img-width"> ENG
                                            </a>
                                        @endif
									</div>
								</span><!-- dropdown -->
                            </ul><!-- desktop-ul -->
                        </div><!-- container -->
                    </div><!-- not-responsive-nav -->
                </div><!-- second -->
            </div><!-- container -->
        </div><!-- main-nav -->
    </header>
    <div class="top-of-section"></div>
    @yield('content')

    <footer>
        <div class="container-fluid pt-4 pb-4 bg">
            <div class="container">
                <div class="col-md-12 mx-auto text-center">
                    <p class="pt-3 pb-2 m-0 font-ula">
                        <span class="i1 wow flipInX" data-wow-offset="0" data-wow-delay="0.5s" data-wow-duration="1s">
                            <a href="https://www.youtube.com/" target="about">
                                <i class="fa fa-youtube"></i>
                            </a>
                        </span>
                        <span class="i2 wow flipInX" data-wow-offset="0" data-wow-delay="0.2s" data-wow-duration="2s">
                            <a href="https://vk.com/feed" target="about">
                                <i class="fa fa-vk"></i>
                            </a>
                        </span>
                        <span class="i3 wow flipInX" data-wow-offset="0" data-wow-delay="0.2s" data-wow-duration="2s">
                            <a href="https://www.facebook.com/" target="about">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </span>
                        <span class="i4 wow flipInX" data-wow-offset="0" data-wow-delay="0.5s" data-wow-duration="1s">
                            <a href="https://www.instagram.com/" target="about">
                                <i class="fa fa-instagram pr-0"></i>
                            </a>
                        </span>
                    </p>
                    <p class="m-0 pb-3">
                        <a href="/{{$lang}}" class="footer-link"><span class="pp wow bounceInLeft" data-wow-offset="0">@lang('s.home')</span></a>
                        <a href="{{Route('regions',[$lang])}}" class="footer-link wow bounceInLeft" data-wow-offset="0"><span class="pp">@lang('s.regions')</span></a>
                        <a href="{{Route('entertainments',[$lang])}}" class="footer-link"><span class="ppp wow bounceIn" data-wow-offset="0">@lang('s.entertainments')</span></a>
                        <a href="{{Route('hotels',[$lang])}}" class="footer-link wow bounceInRight" data-wow-offset="0"><span class="pp">@lang('s.hotels')</span></a>
                        <a href="{{Route('restaurants',[$lang])}}" class="footer-link wow bounceInRight" data-wow-offset="0"><span class="pp">@lang('s.restaurants')</span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid p-0 bg11">
            <div class="container">
                <p class="m-0 footer-p">
                    <a href="/{{$lang}}"><img src="/img/logo.png" class="img-width footer-logo" data-wow-offset="0"></a>
                    <a href="https://usoft.uz/" target="about"><span class="float-right text1 pr-1"> <img src="/img/usoft.png" alt="usoft" class="img-width usoft" data-wow-offset="0"></span></a>
                </p>
            </div>
        </div>
    </footer>
</div><!-- #wrapper -->
    <script src='/js/jquery.min.js'></script>
    <script src="/libs/swiper-slider/dist/js/swiper.min.js"></script>
    <script src="/libs/swiper-slider/dist/js/swiper.js"></script>
    <!-- touchSwipe library -->
    <script src="/js/touchSwipe.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/libs/bootstrap/js/bootstrap.min.js"></script>
    <script src="/libs/plugins-scroll/plugins-scroll.js"></script>
    <script src="/libs/swipe-menu/jquery.slideandswipe.min.js"></script>
    <script src="/libs/wow/dist/wow.min.js"></script>
    <script src="/js/common.js"></script>
    <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
</body>
</html>