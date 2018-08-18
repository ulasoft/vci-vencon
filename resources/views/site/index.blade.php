<!DOCTYPE html>
@php
    $lang = Request::segment(1);
@endphp
<html>
<head>
    <meta charset="utf-8">
    <title>Uzbekistan Test</title>
    <meta name="description" content="">
    <link rel="shortcut icon" href="/img/favicon/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="/libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/libs/swiper-slider/dist/css/swiper.min.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="/libs/animate/animate.min.css">
    <script src="/libs/modernizr/modernizr.js"></script>
</head>
<body>
<div id="wrapper">
    <div id="toTop"> <i class="fa fa-chevron-up"></i> </div>
    <header>
        <div class="main-nav">

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
                                            <a class="dropdown-item " href="/en">
                                                <img src="/img/en.png" alt="en" class="img-width"> ENG
                                            </a>

                                            <a class="dropdown-item " href="/uz">
                                                <img src="/img/uz.png" alt="uzb" class="img-width"> UZB
                                            </a>
                                        @endif
                                        @if($lang == 'en')
                                            <a class="dropdown-item " href="/ru">
                                                    <img src="/img/ru.png" alt="ru" class="img-width"> РУС
                                                </a>

                                            <a class="dropdown-item " href="/uz">
                                                    <img src="/img/uz.png" alt="uzb" class="img-width"> UZB
                                                </a>
                                        @endif
                                        @if($lang == 'uz')
                                            <a class="dropdown-item" href="/ru">
                                                <img src="/img/ru.png" alt="ru" class="img-width"> РУС
                                            </a>

                                            <a class="dropdown-item" href="/en">
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
                            <img src="/img/logo.png">
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
                                            <a class="dropdown-item" href="/en">
                                                <img src="/img/en.png" alt="en" class="img-width"> ENG
                                            </a>

                                            <a class="dropdown-item" href="/uz">
                                                <img src="/img/uz.png" alt="uzb" class="img-width"> UZB
                                            </a>
                                        @endif
                                        @if($lang == 'en')
                                            <a class="dropdown-item" href="/ru">
                                                    <img src="/img/ru.png" alt="ru" class="img-width"> РУС
                                                </a>

                                            <a class="dropdown-item" href="/uz">
                                                    <img src="/img/uz.png" alt="uzb" class="img-width"> UZB
                                                </a>
                                        @endif
                                        @if($lang == 'uz')
                                            <a class="dropdown-item" href="/ru">
                                                <img src="/img/ru.png" alt="ru" class="img-width"> РУС
                                            </a>

                                            <a class="dropdown-item" href="/en">
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


        <!-- Swiper -->
        <div class="swiper-container main-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide main-slide"><img src="/img/slider-img/slider-1.jpg" alt="">
                    <div class="carousel-caption float-left">
                        <div class="container">
                            <p class="pl-3 carouselText">
                                <span id="myTyped"></span>
                                <br>
                                <span id="typed"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide main-slide"><img src="/img/slider-img/slider-2.jpg" alt="">
                    <div class="carousel-caption float-left">
                        <div class="container">
                            <p class="pl-3 carouselText">
                                <span id="myTyped1"></span>
                                <br>
                                <span id="typed1"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide main-slide"><img src="/img/slider-img/slider-3.jpg" alt="">
                    <div class="carousel-caption float-left">
                        <div class="container">
                            <p class="pl-3 carouselText">
                                <span id="myTyped2"></span>
                                <br>
                                <span id="typed2"></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination main-pagination"></div>
        </div><!-- swiper-container -->




    </header>



    <section class="section01">

        <div class="container">

            <h1 class=" wow fadeInUp" data-wow-offset="100">@lang('s.about_uzb')</h1>

            <div class="row">

                <div class="col-md-7 text-left wow fadeInLeft" data-wow-offset="100">
                    <p>@lang('s.about_text')</p>
                </div>
                <div class="col-md-5">
                    <!-- Swiper -->
                    <div class="second-container swiper-container wow fadeInRight" data-wow-offset="100">
                        <div class="swiper-wrapper">
                            <div class="second-slide swiper-slide" >
                                <img src="/img/about/first.jpg" alt="" class="img-width">
                            </div>
                            <div class="second-slide swiper-slide">
                                <img src="/img/about/second.jpg" alt="" class="img-width">
                            </div>
                            <div class="second-slide swiper-slide">
                                <img src="/img/about/third.jpg" alt="" class="img-width">
                            </div>
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>

                </div><!-- swiper container -->

            </div><!-- col-md-5 -->

        </div><!-- row -->

    {{--</div><!-- container -->--}}

    </section>


    <section class="section02">

        <!-- Swiper -->
        <div class="swiper-container third-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/bukhara.jpg">
                            <figcaption>
                                <h2>Bukhara</h2>
                                <p>Bukhara is an ancient Uzbek city, through which the Great Silk Road ran. To this day, here are located hundreds of well-preserved buildings (mosques, madrasahs, bazaars and caravanserais) erected from the 9th to the 17th century.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>

                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/fargona.jpg">
                            <figcaption>
                                <h2>Ferghana</h2>
                                <p>Ferghana is a city in the east of Uzbekistan, located in the southern part of the Ferghana Valley, the administrative center of the Fergana region.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>

                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/jizzax.jpg">
                            <figcaption>
                                <h2>Djizak</h2>
                                <p>Djizak is a city of regional subordination in the Djizak region of the Republic of Uzbekistan.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/namangan.jpg">
                            <figcaption>
                                <h2>Namangan</h2>
                                <p>Namangan is the administrative center of the Namangan region, the Republic of Uzbekistan. The second largest city in Uzbekistan after Tashkent.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/navoiy.jpg">
                            <figcaption>
                                <h2>Navoi</h2>
                                <p>Navoi is a city in Uzbekistan, the administrative center and the largest city of Navoi Viloyat. As of 2017, the city's population is more than 215 thousand people.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/qaraqolpaqston.jpg">
                            <figcaption>
                                <h3>Karakalpakstan</h3>
                                <p>The Republic of Karakalpakstan is a democratic sovereign republic of Uzbekistan. The Republic of Karakalpakstan is located in the north-west of Uzbekistan.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/qashqadaryo.jpg">
                            <figcaption>
                                <h2>Kashkadarya</h2>
                                <p>The Kashkadarya region is the administrative unit of the territorial division of Uzbekistan. The administrative center is the city of Karshi. The most important sights: Registan Square with three madrasahs of the XV and XVII centuries.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/samarqand.jpg">
                            <figcaption>
                                <h2>Samarkand</h2>
                                <p>Samarkand is a city in Uzbekistan, famous for its mosques and mausoleums. Through the Samarkand was the Great Silk Road - a trade road that connected China with the Mediterranean countries.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/sirdaryo.jpg">
                            <figcaption>
                                <h2>Syr Darya</h2>
                                <p>Syr Darya is a city in the Syrdarya region of Uzbekistan. Located on the left bank, but 10 km from the Syr Darya River. Railway station Sirdarya on the line Tashkent - Khavast.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/surkhandaryo.jpg">
                            <figcaption>
                                <h3>Surkhandarya</h3>
                                <p>Surkhandarya region is the most southern region of Uzbekistan. It was formed on March 6, 1941 by the Decree of the Presidium of the Supreme Soviet of the USSR. The administrative center is the city of Termez.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/tashkent.jpg">
                            <figcaption>
                                <h2>Tashkent</h2>
                                <p>Tashkent is the capital of Uzbekistan, which is famous for its numerous museums and a combination of modern and Soviet architecture. The Museum of Timurid History stores manuscripts, weapons and other relics of the famous dynasty.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="grid">
                        <figure class="effect-roxy">
                            <img src="/img/viloyatlar/xorazm.jpg">
                            <figcaption>
                                <h2>Khorezm</h2>
                                <p>Khorezm is an ancient region and state, a civilization of Central Asia, with a center in the lower reaches of the Amu Darya River - a region of developed irrigation agriculture, crafts and trade. It was first mentioned in the sources from the 7th century BC. e.</p>
                                <a href="city.html">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>

            </div><!-- swiper-wrapper -->
        </div><!-- swiper-conrainer -->

    </section>

    <section class="section03">
        <div class="container">
            <h1 class="wow fadeInUp" data-wow-offset="100">@lang('s.others')</h1>
            <div class="d-grid">
                <div class="col-md-4 w-100 wow fadeInLeft" data-wow-offset="100">
                    <div class="grid steve-p">
                        <figure class="effect-steve">
                            <img src="/img/restaurant.jpg">
                            <figcaption>
                                <h2>@lang('s.restaurants')</h2>
                                <p>@lang('s.res_text')</p>
                                <a href="{{Route('restaurants',[$lang])}}">@lang('s.more')</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 w-100 wow fadeInUp" data-wow-offset="100">
                    <div class="grid steve-p responsive-margin">
                        <figure class="effect-steve">
                            <img src="/img/hotel.jpg">
                            <figcaption>
                                <h2>@lang('s.hotels')</h2>
                                <p>@lang('s.hotels_text')</p>
                                <a href="{{Route('hotels',[$lang])}}">@lang('s.more')</a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- end -->

                <div class="col-md-4 w-100 wow fadeInRight" data-wow-offset="100">
                    <div class="grid steve-p">
                        <figure class="effect-steve">
                            <img src="/img/entertainment.jpg">
                            <figcaption>
                                <h2>@lang('s.entertainments')</h2>
                                <p>@lang('s.enter_text')</p>
                                <a href="{{Route('entertainments',[$lang])}}">@lang('s.more')</a>
                            </figcaption>
                        </figure>
                    </div>
                </div><!-- end -->

            </div><!-- row -->

        </div><!-- container -->


    </section><!-- section03 -->


    <section class="section04">

        <div class="container">

            <h1 class="wow fadeInUp" data-wow-offset="100">@lang('s.instagram')</h1>

            <!-- Swiper -->
            <div class="swiper-container fourth-container wow fadeInUp" data-wow-offset="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/1.jpg" alt="">
                    </div>
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/2.jpg" alt="">
                    </div>
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/3.jpg" alt="">
                    </div>
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/4.jpg" alt="">
                    </div>
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/5.jpg" alt="">
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div><!-- swiper-container -->

        </div><!-- container -->

    </section>



    <section class="section05">

        <div class="container">
            <h1 class="text-center wow fadeInUp" data-wow-offset="100">@lang('s.youtube')</h1>
            <div class="row">

                <div class="col-md-6 " data-wow-offset="100">
                    <iframe class="main-video" width="100%" height="337" src="https://www.youtube.com/embed/q5VCdvQHsqQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>

                <div class="col-md-3 " data-wow-offset="100">
                    <iframe width="100%" height="165" src="https://www.youtube.com/embed/7TByjfwhieg?rel=0"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <div class="col-md-12 p-0">
                        <iframe width="100%" height="165" src="https://www.youtube.com/embed/RzwXV59cb5E"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="col-md-3" data-wow-offset="100">
                    <iframe width="100%" height="165" src="https://www.youtube.com/embed/YQe60UX_Z2o?rel=0"  frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    <div class="col-md-12 p-0">
                        <iframe width="100%" height="165" src="https://www.youtube.com/embed/q5VCdvQHsqQ?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>

            </div><!-- row -->

        </div><!-- container -->

    </section>

    <section class="section06"></section>



    <section class="section07">

        <div class="container">

            <h1 class="text-center wow fadeInUp" data-wow-offset="100">@lang('s.fb')</h1>

            <!-- Swiper -->
            <div class="swiper-container fourth-container wow fadeInUp" data-wow-offset="100">
                <div class="swiper-wrapper">
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/1.jpg" alt="">
                    </div>
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/2.jpg" alt="">
                    </div>
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/3.jpg" alt="">
                    </div>
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/4.jpg" alt="">
                    </div>
                    <div class="swiper-slide fourth-slide">
                        <img src="/img/insta/5.jpg" alt="">
                    </div>

                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination"></div>
            </div><!-- swiper-container -->

        </div>

    </section>

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
                    <a href="/{{$lang}}"><img src="/img/logo.png" class="img-width footer-logo " data-wow-offset="0"></a>
                    <a href="https://usoft.uz/" target="about"><span class="float-right text1 pr-1"> <img src="/img/usoft.png" alt="usoft" class="img-width usoft " data-wow-offset="0"></span></a>
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
<script src="/js/popper.min.js" ></script>
<script src="/libs/bootstrap/js/bootstrap.min.js"></script>
<script src="/libs/plugins-scroll/plugins-scroll.js"></script>
<script src="/libs/swipe-menu/jquery.slideandswipe.min.js"></script>
<script src="/libs/wow/dist/wow.min.js"></script>
<script src="/libs/typed/typed.min.js"></script>
<script src="/js/common.js"></script>


<script>
    //typed.js
    $('document').ready(function(){
        var typed = new Typed ('#typed',{
            strings: ["@lang('s.slide.khiva')","@lang('s.slide.h_2')"],
            startDelay: 4000 ,
            typeSpeed: 80,
            backSpeed: 40,
            loop: true,
        });
    });
    $('document').ready(function(){
        var typed = new Typed ('#myTyped',{
            strings: ["@lang('s.slide.welcome')"],
            startDelay: 0 ,
            typeSpeed: 100,
            backSpeed: 60,
        });
    });
    $('document').ready(function(){
        var typed = new Typed ('#typed1',{
            strings: ["@lang('s.slide.bukhara')","@lang('s.slide.b_2')"],
            startDelay: 4000 ,
            typeSpeed: 80,
            backSpeed: 40,
            loop: true,
        });
    });
    $('document').ready(function(){
        var typed = new Typed ('#myTyped1',{
            strings: ["@lang('s.slide.welcome')"],
            startDelay: 0 ,
            typeSpeed: 100,
            backSpeed: 60,
        });
    });

    $('document').ready(function(){
        var typed = new Typed ('#typed2',{
            strings: ["@lang('s.slide.samarqand')","@lang('s.slide.s_2')"],
            startDelay: 4000 ,
            typeSpeed: 80,
            backSpeed: 40,
            loop: true,
        });
    });
    $('document').ready(function(){
        var typed = new Typed ('#myTyped2',{
            strings: ["@lang('s.slide.welcome')"],
            startDelay: 0 ,
            typeSpeed: 100,
            backSpeed: 60,
        });
    });
</script>

<link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">

</body>
</html>