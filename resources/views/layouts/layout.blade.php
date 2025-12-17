<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!--====== Title ======-->
    <title>Urganch tumani 3-son texnikumi</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('fasset/images/favicon.png')}}" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('fasset/css/gallery.css')}}">

    <!--====== Animate css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/animate.css')}}">

    <!--====== Nice Select css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/nice-select.css')}}">

    <!--====== Nice Number css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/jquery.nice-number.min.css')}}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/magnific-popup.css')}}">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/bootstrap.min.css')}}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/font-awesome.min.css')}}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/default.css')}}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/style.css')}}">

    <!--====== Responsive css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.9/sweetalert2.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
@php
    $current = app()->getLocale();

    $locales = [
        'uz' => ['title' => "O'zbek",  'flag' => asset('flags/uz.svg')],
        'ru' => ['title' => "Русский", 'flag' => asset('flags/ru.svg')],
        'en' => ['title' => "English", 'flag' => asset('flags/en.svg')],
    ];
@endphp
<div class="preloader">
    <div class="loader rubix-cube">
        <div class="layer layer-1"></div>
        <div class="layer layer-2"></div>
        <div class="layer layer-3 color-1"></div>
        <div class="layer layer-4"></div>
        <div class="layer layer-5"></div>
        <div class="layer layer-6"></div>
        <div class="layer layer-7"></div>
        <div class="layer layer-8"></div>
    </div>
</div>

<!--====== PRELOADER PART START ======-->

<!--====== HEADER PART START ======-->

<header id="header-part">

    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row">
                <div class="header-contact  text-center">
                    <ul>
                        <li><img src="{{asset('fasset/images/all-icon/map.png')}}" alt="icon"><span>O'zbekiston Respublikasi, Xorazm viloyati, Urganch tumani Chandirqiyot qishlog’i Qiyot mahallasi Zafarli ko’cha (№ 1 – Mashrut)</span></li>
                        <li><img src="{{asset('fasset/images/all-icon/email.png')}}" alt="icon"><span>utexnikum3@gmail.com</span></li>
                    </ul>
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header top -->

    <div class="header-logo-support pt-30 pb-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="logo">
                        <a href="{{route('index',  ['locale' => app()->getLocale()])}}">
                            <img src="{{asset('texnikum_img/logo_texnikum.png')}}" align="left" hspace = "5px" width="100px" alt="Logo">
                            Urganch tumani ko’p tarmoqli texnikumi
                        </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="support-button float-right d-none d-md-block">
                        <div class="support float-left">
                            <div class="icon">
                                <img src="{{asset('fasset/images/all-icon/support.png')}}" alt="icon">
                            </div>
                            <div class="cont">
                                <p>Hoziroq biz bilan bog'laning</p>
                                <span>+998-(93)-337-81-10    ||   (97)-362-76-47 </span>
                            </div>
                        </div>
                        {{--<div class="button float-left">
                            <a href="#" class="main-btn">Online Ariza</a>
                        </div>--}}
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header logo support -->

    <div class="navigation">
        <div class="container">
            <div class="row">
                <div class="">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('index') ? 'active' : '' }}" href="{{route('index', ['locale' => app()->getLocale()])}}">Asosiy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('about') ? 'active' : '' }}" href="{{route('about', ['locale' => app()->getLocale()])}}">Biz haqimizda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('director') ? 'active' : '' }}" href="{{route('director', ['locale' => app()->getLocale()])}}">Tuzulma</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('director') ? 'active' : '' }}" href="{{route('director', ['locale' => app()->getLocale()])}}">Tuzilma</a>
                                    <ul class="sub-menu">
                                        <li><a class="nav-item {{  request()->routeIs('director') ? 'active' : '' }}" href="{{route('director', ['locale' => app()->getLocale()])}}">Direktor</a></li>
                                        <li><a class="nav-item {{  request()->routeIs('train') ? 'active' : '' }}" href="{{route('train', ['locale' => app()->getLocale()])}}">O'quv ishlari bo'yicha direktor o'rinbosari</a></li>
                                        <li><a class="nav-item {{  request()->routeIs('spirit') ? 'active' : '' }}" href="{{route('spirit', ['locale' => app()->getLocale()])}}">Ma'naviy va ma'rifiy ishlar bo'yicha direktor o'rinbosari</a></li>
                                        <li><a class="nav-item{{  request()->routeIs('special') ? 'active' : '' }}" href="{{route('special', ['locale' => app()->getLocale()])}}">Ixtisoslashgan fanlar bo'yicha direktor o'rinbosari</a></li>
                                    </ul>
                                </li> -->
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('photos') ? 'active' : '' }}" href="{{route('photos', ['locale' => app()->getLocale()])}}">Galereya</a>
                                    <ul class="sub-menu">
                                        <li><a class="nav-item {{  request()->routeIs('photos') ? 'active' : '' }}" href="{{route('photos', ['locale' => app()->getLocale()])}}">Foto Galereya</a></li>
                                        <li><a class="nav-item {{  request()->routeIs('certificate') ? 'active' : '' }}" href="{{route('certificate', ['locale' => app()->getLocale()])}}">Faxriy yorliqlar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('veterans') ? 'active' : '' }}" href="{{route('veterans', ['locale' => app()->getLocale()])}}">O'qituvchilar</a>
                                    <ul class="sub-menu">
                                        <li><a class="nav-item {{  request()->routeIs('veterans') ? 'active' : '' }}" href="{{route('veterans', ['locale' => app()->getLocale()])}}">Faxriy o'qituvchilar</a></li>
                                        <li><a class="nav-item {{  request()->routeIs('teachers') ? 'active' : '' }}" href="{{route('teachers', ['locale' => app()->getLocale()])}}">Barcha o'qituvchilar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('news') ? 'active' : '' }}" href="{{route('news', ['locale' => app()->getLocale()])}}">Yangiliklar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('olimpics') ? 'active' : '' }}" href="{{route('olimpics', ['locale' => app()->getLocale()])}}">Faol o'quvchilar</a>
                                    <ul class="sub-menu">
                                        <li><a class="nav-item {{  request()->routeIs('olimpics') ? 'active' : '' }}" href="{{route('olimpics', ['locale' => app()->getLocale()])}}">Olimpiada g'oliblari</a></li>
                                        <li><a class="nav-item {{  request()->routeIs('actives') ? 'active' : '' }}" href="{{route('actives', ['locale' => app()->getLocale()])}}">Faol talabalar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('contact') ? 'active' : '' }}" href="{{route('contact', ['locale' => app()->getLocale()])}}">Aloqa</a>
                                </li>
                                <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle d-flex align-items-center gap-2"
       href="#"
       role="button"
       data-bs-toggle="dropdown"
       aria-expanded="false">
        <img src="{{ $locales[$current]['flag'] }}" alt="{{ $locales[$current]['title'] }}"
             width="22" height="16" style="object-fit: cover; border-radius: 3px;">
        <span class="text-uppercase">{{ $current }}</span>
    </a>

    <ul class="dropdown-menu dropdown-menu-right" style="right:0; left:auto;">
        @foreach($locales as $code => $meta)
        @continue($code === $current)
        <li>
            <a class="dropdown-item"
               href="{{ localized_url($code) }}"
               style="display:flex; align-items:center;">
                <img src="{{ $meta['flag'] }}" alt="{{ $meta['title'] }}"
                     width="22" height="16"
                     style="object-fit:cover; border-radius:3px; margin-right:8px;">
                <span>{{ $meta['title'] }}</span>
            </a>
        </li>
    @endforeach
</ul>
</li>

                            </ul>
                        </div>
                    </nav> <!-- nav -->
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </div>

</header>
@yield('content')








<!--====== jquery js ======-->
<script src="{{asset('fasset/js/vendor/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('fasset/js/vendor/jquery-1.12.4.min.js')}}"></script>

<!--====== Bootstrap js ======-->
<script src="{{asset('fasset/js/bootstrap.min.js')}}"></script>

<!--====== Slick js ======-->
<script src="{{asset('fasset/js/slick.min.js')}}"></script>

<!--====== Magnific Popup js ======-->
<script src="{{asset('fasset/js/jquery.magnific-popup.min.js')}}"></script>

<!--====== Counter Up js ======-->
<script src="{{asset('fasset/js/waypoints.min.js')}}"></script>
<script src="{{asset('fasset/js/jquery.counterup.min.js')}}"></script>

<!--====== Nice Select js ======-->
<script src="{{asset('fasset/js/jquery.nice-select.min.js')}}"></script>

<!--====== Nice Number js ======-->
<script src="{{asset('fasset/js/jquery.nice-number.min.js')}}"></script>

<!--====== Count Down js ======-->
<script src="{{asset('fasset/js/jquery.countdown.min.js')}}"></script>

<!--====== Validator js ======-->
<script src="{{asset('fasset/js/validator.min.js')}}"></script>

<!--====== Ajax Contact js ======-->
<script src="{{asset('fasset/js/ajax-contact.js')}}"></script>

<!--====== Main js ======-->
<script src="{{asset('fasset/js/main.js')}}"></script>

<!--====== Map js ======-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
<script src="{{asset('fasset/js/map-script.js')}}"></script>

</body>
</html>
