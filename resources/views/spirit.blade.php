@extends('layouts.layout')
@section('content')

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-0 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('fasset/images/slide1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Maktab ma'naviy va ma'rifiy ishlar bo'yicha direktor o'rinbosari</h2>

                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-singel" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="{{asset('fasset/train2.jpg')}}" alt="Direktor">
                        </div>
                        <div class="name">
                            <h6>Navruzov Faxriddin</h6>

                        </div>
                        <div class="social">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                            </ul>
                        </div>
                        <div class="description">
                            <p>

                            </p>
                        </div>
                    </div> <!-- teachers left -->
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="singel-dashboard pt-40">
                                        <h5>Ma'lumotnoma</h5>
                                        <p>1977 - yilda tug'ilgan. Ma'lumoti Oliy, Millati: o'zbek. 1999-yilda Toshkent davlat universitetini tugatgan.</p>
                                    </div> <!-- singel dashboard -->
                                    <div class="singel-dashboard pt-40">
                                        <h5>Kasbiy faoliyati</h5>
                                        <p>
                                            1994-1999 yy. -  Toshkent davlat  universiteti talabasi <br>
                                            1999-2001 yy. -  Xorazm viloyati Shovot tumani 27-maktabda o'qituvchi <br>
                                            2001-2003 yy. -  Xorazm viloyati Shovot tumani maishiy xizmat KHK da o'qituvchi
                                            <br>
                                            2003-2021 yy. - Xorazm viloyati Shovot tumani 1-IMI da Tarix fani o'qituvchisi <br>
                                            2021-2022 yy. - Xorazm viloyati Shovot tumani Al-Xorazmiy nomidagi xalqaro fizika va matematika maktab internatida Tarix fani o'qituvchisi
                                            <br>
                                            2022 y. h.v   -  Prezident ta'lim muassasalari agentligi tizimidagi Shovot tuman ixtisoslashtirilgan
                                            maktab-internatida ma'naviy va ma'rifiy ishlar bo'yicha direktor  o'rinbosari
                                        </p>
                                    </div> <!-- singel dashboard -->
                                    <div class="singel-dashboard pt-40">
                                        <h5>Bog'lanish uchun:</h5>
                                        <p><i class="fa fa-phone"></i>Tel: +998-90-957-98-48<b></b></p>
                                        <p><i class = "fa fa-envelope"></i> E-pochta: </p>
                                        <p>Qabul kunlari: Dushanba - Juma soat 10<sup>00</sup> dan 12<sup>00</sup> gacha</p>
                                    </div> <!-- singel dashboard -->
                                </div> <!-- dashboard cont -->
                            </div>

                        </div>
                    </div> <!-- tab content -->
                </div> <!-- teachers right -->
            </div>
        </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->
    <x-layouts.footer></x-layouts.footer>
@endsection
