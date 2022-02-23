<!doctype html>
<html lang="en">
<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Al-Xorazmiy nomidagi maktab internat</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('fasset/images/favicon.png')}}" type="image/png">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{asset('fasset/css/slick.css')}}">

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


</head>

<body>

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
                        <li><img src="{{asset('fasset/images/all-icon/map.png')}}" alt="icon"><span>O'zbekiston Respublikasi, Xorazm viloyati, Shovot tumani, K. Otaniyozov ko'chasi, 65-uy</span></li>
                        <li><img src="{{asset('fasset/images/all-icon/email.png')}}" alt="icon"><span>al.xorazmiy2021@gmail.com</span></li>
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
                        <a href="{{route('index')}}">
                            <img src="{{asset('logo.jpg')}}" align="left" hspace = "5px" width="100px" alt="Logo">
                            Xorazm viloyat Shovot tumani Al-Xorazmiy nomidagi xalqaro fizika va matematika maktab-nternati
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
                                <span>+998-(93)-453-28-27</span>
                            </div>
                        </div>
                        <div class="button float-left">
                            <a href="#" class="main-btn">Online Ariza</a>
                        </div>
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
                                    <a class="nav-item {{  request()->routeIs('index') ? 'active' : '' }}" href="{{route('index')}}">Asosiy</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('about') ? 'active' : '' }}" href="{{route('about')}}">Biz haqimizda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('director') ? 'active' : '' }}" href="#">Tuzilma</a>
                                    <ul class="sub-menu">
                                        <li><a class="nav-item {{  request()->routeIs('director') ? 'active' : '' }}" href="{{route('director')}}">Direktor</a></li>
                                        <li><a class="nav-item {{  request()->routeIs('train') ? 'active' : '' }}" href="{{route('train')}}">O'quv ishlari bo'yicha direktor o'rinbosari</a></li>
                                        <li><a class="nav-item {{  request()->routeIs('spirit') ? 'active' : '' }}" href="{{route('spirit')}}">Ma'naviy va ma'rifiy ishlar bo'yicha direktor o'rinbosari</a></li>
                                        <li><a {{  request()->routeIs('special') ? 'active' : '' }}" href="{{route('special')}}">Ixtisoslashgan fanlar bo'yicha direktor o'rinbosari</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="events.html">Galereya</a>
                                    <ul class="sub-menu">
                                        <li><a href="events.html">Foto Galereya</a></li>
                                        <li><a href="events-singel.html">Faxriy yorliqlar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="teachers.html">O'qituvchilar</a>
                                    <ul class="sub-menu">
                                        <li><a href="teachers.html">Faxriy o'qituvchilar</a></li>
                                        <li><a href="teachers-singel.html">Barcha o'qituvchilar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-item {{  request()->routeIs('news') ? 'active' : '' }}" href="{{route('news')}}">Yangiliklar</a>
                                </li>
                                <li class="nav-item">
                                    <a href="shop.html">Faol o'quvchilar</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop.html">Olimpiada g'oliblari</a></li>
                                        <li><a href="shop-singel.html">Faol talabalar</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html">Aloqa</a>
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


<footer id="footer-part">
    <div class="footer-top pt-40 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-about mt-40">
                        <div class="logo">
                            <a href="#"><img src="{{asset('logo.jpg')}}" width="160px" alt="Logo"></a>
                        </div>
                        <p> Xorazm viloyat Shovot tumani Al-Xorazmiy nomidagi xalqaro fizika va matematika maktab-internati</p>
                        <ul class="mt-20">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="footer-link mt-40">
                        <div class="footer-title pb-25">
                            <h6>Sayt xaritasi</h6>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Asosiy</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Biz haqimizda</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Tuzilma</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Galereya</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Faol O'qituvchilar</a></li>
                        </ul>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Barcha o'qituvchilar</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Yangiliklar</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Faol o'quvchilar</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Olimpiada g'oliblari</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Aloqa</a></li>
                        </ul>
                    </div> <!-- footer link -->
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-address mt-40">
                        <div class="footer-title pb-25">
                            <h6>Biz bilan bog'laning</h6>
                        </div>
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-home"></i>
                                </div>
                                <div class="cont">
                                    <p>Xorazm vil., Shovot tumani, K. Otaniyozov, 65</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="cont">
                                    <p>+998-(93)-453-28-27</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="cont">
                                    <p>al.xorazmiy2021@gmail.com</p>
                                </div>
                            </li>
                        </ul>
                    </div> <!-- footer address -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer top -->

    <div class="footer-copyright pt-10 pb-25">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright text-md-left text-center pt-15">
                        <p><a target="_blank" href="https://www.w3soft.uz">w3soft.uz</a> </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="copyright text-md-right text-center pt-15">

                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- footer copyright -->
</footer>

<!--====== FOOTER PART ENDS ======-->

<!--====== BACK TO TP PART START ======-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!--====== BACK TO TP PART ENDS ======-->








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
