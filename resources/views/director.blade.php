@extends('layouts.layout')
@section('content')

<!--====== SEARCH BOX PART ENDS ======-->

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-0 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('fasset/images/director.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>Maktab direktori</h2>

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
                        <img src="{{asset('fasset/director1.png')}}" alt="Direktor">
                    </div>
                    <div class="name">
                        <h6>Do‘schanov  Muzaffar</h6>

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
                           2017- yildan hozirgi kunga qadar muassasa direktori lavozimida ishlab kelmoqda
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
                                    <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                                </div> <!-- singel dashboard -->
                                <div class="singel-dashboard pt-40">
                                    <h5>Kasbiy faoliyati</h5>
                                    <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
                                </div> <!-- singel dashboard -->
                                <div class="singel-dashboard pt-40">
                                    <h5>Bog'lanish uchun:</h5>
                                    <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus .</p>
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

@endsection
