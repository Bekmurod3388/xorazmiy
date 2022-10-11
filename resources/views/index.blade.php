@extends('layouts.layout')
@section('content')

    <!--====== PRELOADER PART START ======-->


    <!--====== HEADER PART ENDS ======-->

    <!--====== SEARCH BOX PART START ======-->

    {{-- <div class="search-box">
         <div class="serach-form">
             <div class="closebtn">
                 <span></span>
                 <span></span>
             </div>
             <form action="#">
                 <input type="text" placeholder="Search by keyword">
                 <button><i class="fa fa-search"></i></button>
             </form>
         </div> <!-- serach form -->
     </div>
 --}}
    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== SLIDER PART START ======-->

    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150" style="background-image: url({{asset('fasset/images/slide1.jpg')}})"
             data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Biz bilan yuksak cho'qqilarni zabt et</h1>
                            <ul>
                                <li><a data-animation="fadeInUp" data-delay="1.6s" class="main-btn"
                                       href="#">Batafsil</a></li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150" style="background-image: url({{asset('fasset/images/slide2.jpg')}})"
             data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Iqtidoringni namoyon et</h1></div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->

        <div class="single-slider bg_cover pt-150" style="background-image: url({{asset('fasset/images/slide3.jpg')}})"
             data-overlay="4">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">Vaqtingni to'g'ri sarfla</h1>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- single slider -->
    </section>

    <!--====== SLIDER PART ENDS ======-->

    <!--====== CATEGORY PART START ======-->

    <section id="category-part">
        <div class="container">
            <div class="category pt-40 pb-80">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-text pt-40">
                            <h2>Barcha fanlarni biz bilan oson o'rgan</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1 col-md-8 offset-md-2 col-sm-8 offset-sm-2 col-8 offset-2">
                        <div class="row category-slied mt-40">
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-1.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Ingliz tili</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-2.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Matematika</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-3.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Fizika</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-1">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-1.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Ingliz tili</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-2">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-2.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Matematika</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#">
                                    <span class="singel-category text-center color-3">
                                        <span class="icon">
                                            <img src="{{asset('fasset/images/all-icon/ctg-3.png')}}" alt="Icon">
                                        </span>
                                        <span class="cont">
                                            <span>Fizika</span>
                                        </span>
                                    </span> <!-- singel category -->
                                </a>
                            </div>
                        </div> <!-- category slied -->
                    </div>
                </div> <!-- row -->
            </div> <!-- category -->
        </div> <!-- container -->
    </section>
    <div class="container d-flex mt-5">
        <div class="card text-bg-dark mr-3" style="height: 300px;width: 33%">
            <img src="{{asset('assets/img/fonts/food.jpg')}}" style="height: 100%" class="card-img" alt="...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
<path d="M28,28c0,0.6-0.4,1-1,1h-1v-7h-2v7h-1c-0.6,0-1-0.4-1-1v-6h-2v6c0,1.7,1.3,3,3,3h1v8h-1c-0.6,0-1,0.4-1,1v13  c0,0.6,0.4,1,1,1h4c0.6,0,1-0.4,1-1V40c0-0.6-0.4-1-1-1h-1v-8h1c1.7,0,3-1.3,3-3v-6h-2V28z M26,52h-2V41h2V52z"/>
                <path d="M61.7,7.3l-5-5C56.5,2.1,56.3,2,56,2H8C7.7,2,7.5,2.1,7.3,2.3l-5,5C2.1,7.5,2,7.7,2,8h0v6c0,0.5,0.3,0.9,0.8,1L4,15.2V43H3  c-0.6,0-1,0.4-1,1v17c0,0.6,0.4,1,1,1h58c0.6,0,1-0.4,1-1V44c0-0.6-0.4-1-1-1h-1V15.2l1.2-0.2c0.5-0.1,0.8-0.5,0.8-1V8h0  C62,7.7,61.9,7.5,61.7,7.3z M8.4,4h47.2l3,3H5.4L8.4,4z M6,15.7c0.3,0.2,0.6,0.5,0.9,1C7.2,17,7.6,17.4,8,17.8V43H6V15.7z M14,40h3  v3h-7V32h3v7C13,39.6,13.4,40,14,40z M60,60H4V45h1h4h11v-2h-1v-4c0-0.6-0.4-1-1-1h-3v-7c0-0.6-0.4-1-1-1h-4V18.6c0.1,0,0.3,0,0.4,0  c1.8,0,2.7-1.1,3.5-2c0.7-0.8,1.1-1.3,1.9-1.3c0.8,0,1.2,0.4,1.9,1.3c0.7,0.9,1.6,2,3.5,2s2.7-1.1,3.5-2c0.7-0.8,1.1-1.3,1.9-1.3  s1.2,0.4,1.9,1.3c0.7,0.9,1.6,2,3.5,2c1.8,0,2.7-1.1,3.5-2c0.7-0.8,1.1-1.3,1.9-1.3c0.8,0,1.2,0.4,1.9,1.3c0.7,0.9,1.6,2,3.5,2  c1.8,0,2.7-1.1,3.5-2c0.7-0.8,1.1-1.3,1.9-1.3c0.8,0,1.2,0.4,1.9,1.3c0.7,0.9,1.7,2,3.5,2c0.1,0,0.3,0,0.4,0V27h-4c-0.6,0-1,0.4-1,1  v7h-2c-0.6,0-1,0.4-1,1v7h-4v2h13h4h1V60z M48,43v-6h6v6H48z M54,35h-3v-6h3V35z M56,43V17.8c0.4-0.3,0.8-0.7,1.1-1.1  c0.4-0.4,0.6-0.7,0.9-1V43H56z M58.9,13.4c-1.8,0-2.6,1.1-3.4,2c-0.7,0.8-1.1,1.3-1.9,1.3c-0.8,0-1.2-0.4-1.9-1.3  c-0.7-0.9-1.7-2-3.5-2s-2.7,1.1-3.5,2c-0.7,0.8-1.1,1.3-1.9,1.3c-0.8,0-1.2-0.4-1.9-1.3c-0.7-0.9-1.6-2-3.5-2c-1.8,0-2.7,1.1-3.5,2  c-0.7,0.8-1.1,1.3-1.9,1.3c-0.8,0-1.2-0.4-1.9-1.3c-0.7-0.9-1.6-2-3.5-2s-2.7,1.1-3.5,2c-0.7,0.8-1.1,1.3-1.9,1.3  c-0.8,0-1.2-0.4-1.9-1.3c-0.7-0.9-1.6-2-3.5-2c-1.8,0-2.7,1.1-3.5,2c-0.7,0.8-1.1,1.3-1.9,1.3c-0.8,0-1.2-0.4-1.9-1.3  c-0.7-0.9-1.6-1.9-3.4-2L4,13.2V9h56v4.2L58.9,13.4z"/>
                <path d="M42,35.1c0-5.6-3.9-10.4-6.3-12.8c-0.3-0.3-0.7-0.4-1.1-0.2C34.2,22.2,34,22.6,34,23v17v13c0,0.6,0.4,1,1,1h4  c0.6,0,1-0.4,1-1V41h1c0.6,0,1-0.4,1-1V35.1z M38,52h-2V41h2V52z M40,39h-4V25.6c1.9,2.3,4,5.7,4,9.5V39z"/>
</svg>

        </div>
        <div class="card text-bg-dark mr-3" style="height: 300px;width: 33%">
            <img src="{{asset('assets/img/fonts/room.jpg')}}" style="height: 100%" class="card-img" alt="...">

        </div>
        <div class="card text-bg-dark" style="height: 300px;width: 33%">
            <img src="{{asset('assets/img/fonts/forma.jpg')}}" style="height: 100%" class="card-img" alt="...">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 150 150" style="enable-background:new 0 0 150 150;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FFFFFF;}
    .st1{fill:none;stroke:#000000;stroke-width:3;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    .st2{fill:url(#SVGID_1_);}
    .st3{fill:url(#SVGID_2_);}
    .st4{fill:url(#SVGID_3_);}
    .st5{fill:url(#SVGID_4_);}
    .st6{fill:url(#SVGID_5_);}
    .st7{fill:url(#SVGID_6_);}
    .st8{fill:url(#SVGID_7_);}
    .st9{fill:url(#SVGID_8_);}
    .st10{fill:url(#SVGID_9_);}
    .st11{fill:url(#SVGID_10_);}
    .st12{fill:url(#SVGID_11_);}
    .st13{fill:url(#SVGID_12_);}
    .st14{fill:url(#SVGID_13_);}
    .st15{fill:url(#SVGID_14_);}
    .st16{fill:url(#SVGID_15_);}
    .st17{fill:url(#SVGID_16_);}
    .st18{fill:url(#SVGID_17_);}
    .st19{fill:url(#SVGID_18_);}
    .st20{fill:#63BE6E;}
    .st21{fill:#E53357;}
    .st22{fill:#5955A2;}
    .st23{fill:#92870B;}
    .st24{fill:#EDC21D;}
    .st25{fill:#007837;}
    .st26{fill:#EC694B;}
    .st27{fill:#3D64A9;}
    .st28{fill:#9A782E;}
    .st29{fill:#A8B436;}
    .st30{fill:#F7F7F7;}
    .st31{fill:url(#SVGID_19_);}
    .st32{fill:url(#SVGID_20_);}
    .st33{fill:url(#SVGID_21_);}
    .st34{fill:url(#SVGID_22_);}
    .st35{fill:url(#SVGID_23_);}
    .st36{fill:url(#SVGID_24_);}
    .st37{fill:url(#SVGID_25_);}
    .st38{fill:url(#SVGID_26_);}
    .st39{fill:url(#SVGID_27_);}
    .st40{fill:url(#SVGID_28_);}
    .st41{fill:url(#SVGID_29_);}
    .st42{fill:url(#SVGID_30_);}
    .st43{fill:url(#SVGID_31_);}
    .st44{fill:url(#SVGID_32_);}
    .st45{fill:url(#SVGID_33_);}
    .st46{fill:url(#SVGID_34_);}
    .st47{fill:url(#SVGID_35_);}
    .st48{fill:url(#SVGID_36_);}
    .st49{fill:url(#SVGID_37_);}
    .st50{fill:url(#SVGID_38_);}
    .st51{fill:url(#SVGID_39_);}
    .st52{fill:url(#SVGID_40_);}
    .st53{fill:url(#SVGID_41_);}
    .st54{fill:url(#SVGID_42_);}
    .st55{fill:url(#SVGID_43_);}
    .st56{fill:url(#SVGID_44_);}
    .st57{fill:url(#SVGID_45_);}
    .st58{fill:url(#SVGID_46_);}
    .st59{fill:url(#SVGID_47_);}
    .st60{fill:url(#SVGID_48_);}
    .st61{fill:url(#SVGID_49_);}
    .st62{fill:url(#SVGID_50_);}
    .st63{fill:#0C509F;}
    .st64{fill:url(#SVGID_51_);}
    .st65{fill:url(#SVGID_52_);}
    .st66{fill:url(#SVGID_53_);}
    .st67{fill:url(#SVGID_54_);}
    .st68{fill:url(#SVGID_55_);}
    .st69{fill:url(#SVGID_56_);}
    .st70{fill:url(#SVGID_57_);}
    .st71{fill:url(#SVGID_58_);}
    .st72{fill:url(#SVGID_59_);}
    .st73{fill:url(#SVGID_60_);}
    .st74{fill:url(#SVGID_61_);}
    .st75{fill:url(#SVGID_62_);}
    .st76{fill:url(#SVGID_63_);}
    .st77{fill:url(#SVGID_64_);}
    .st78{fill:url(#SVGID_65_);}
    .st79{fill:url(#SVGID_66_);}
    .st80{fill:url(#SVGID_67_);}
    .st81{fill:url(#SVGID_68_);}
    .st82{fill:url(#SVGID_69_);}
    .st83{fill:url(#SVGID_70_);}
    .st84{fill:url(#SVGID_71_);}
    .st85{fill:url(#SVGID_72_);}
    .st86{fill:url(#SVGID_73_);}
    .st87{fill:url(#SVGID_74_);}
    .st88{fill:url(#SVGID_75_);}
    .st89{fill:url(#SVGID_76_);}
    .st90{fill:url(#SVGID_77_);}
    .st91{fill:url(#SVGID_78_);}
    .st92{fill:url(#SVGID_79_);}
    .st93{fill:url(#SVGID_80_);}
    .st94{fill:url(#SVGID_81_);}
    .st95{fill:url(#SVGID_82_);}
    .st96{fill:url(#SVGID_83_);}
    .st97{fill:url(#SVGID_84_);}
    .st98{fill:url(#SVGID_85_);}
    .st99{fill:url(#SVGID_86_);}
    .st100{fill:url(#SVGID_87_);}
    .st101{fill:url(#SVGID_88_);}
    .st102{fill:url(#SVGID_89_);}
    .st103{fill:url(#SVGID_90_);}
    .st104{fill:url(#SVGID_91_);}
    .st105{fill:url(#SVGID_92_);}
    .st106{fill:url(#SVGID_93_);}
    .st107{fill:url(#SVGID_94_);}
    .st108{fill:url(#SVGID_95_);}
    .st109{fill:url(#SVGID_96_);}
    .st110{fill:url(#SVGID_97_);}
    .st111{fill:url(#SVGID_98_);}
    .st112{fill:url(#SVGID_99_);}
    .st113{fill:url(#SVGID_100_);}
</style>
                <rect x="-437.4" y="-2336.5" class="st0" width="677.6" height="5020.2"/>
                <g>
                    <g>
                        <path d="M83.8,41.9c-0.4,0-0.7-0.1-1-0.4L73,33.1c-0.3-0.3-0.5-0.7-0.5-1.2c0-0.5,0.3-0.9,0.6-1.2l17.4-12.5    c0.7-0.5,1.6-0.3,2.1,0.3l4.9,6.4c0.4,0.6,0.4,1.4,0,1.9L84.9,41.4c-0.3,0.3-0.6,0.5-1,0.5C83.9,41.9,83.8,41.9,83.8,41.9z     M76.4,32l7.2,6.2l10.8-12.5l-3.3-4.2L76.4,32z"/>
                        <path d="M64.2,41.9c0,0-0.1,0-0.1,0c-0.4,0-0.8-0.2-1-0.5L50.5,26.8c-0.5-0.5-0.5-1.3,0-1.9l4.9-6.4c0.5-0.6,1.4-0.8,2.1-0.3    l17.4,12.5c0.4,0.3,0.6,0.7,0.6,1.2c0,0.5-0.2,0.9-0.5,1.2l-9.8,8.5C64.9,41.8,64.6,41.9,64.2,41.9z M53.6,25.8l10.8,12.5l7.2-6.2    L56.9,21.5L53.6,25.8z"/>
                        <path d="M91.4,21H56.6c-0.8,0-1.5-0.7-1.5-1.5s0.7-1.5,1.5-1.5h34.8c0.8,0,1.5,0.7,1.5,1.5S92.2,21,91.4,21z"/>
                        <path d="M110.5,122.8c-0.6,0-1.2-0.4-1.4-1c-0.3-0.8,0.1-1.6,0.9-1.9l16.7-6.5l-0.7-66.8c-0.1-6.4-4.2-11.8-10.3-13.6l-19.7-5.7    c-0.8-0.2-1.3-1.1-1-1.9c0.2-0.8,1.1-1.3,1.9-1l19.7,5.7c7.4,2.1,12.4,8.8,12.5,16.5l0.8,67.8c0,0.6-0.4,1.2-1,1.4l-17.6,6.9    C110.9,122.8,110.7,122.8,110.5,122.8z"/>
                        <path d="M110.2,133.2c-0.6,0-1.2-0.4-1.4-1c-0.3-0.8,0.1-1.6,0.8-1.9l13.9-5.4v-9.2c0-0.8,0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5v10.2    c0,0.6-0.4,1.2-1,1.4l-14.8,5.8C110.6,133.2,110.4,133.2,110.2,133.2z"/>
                        <path d="M79,144.5c-0.3,0-0.5-0.1-0.8-0.2c-0.4-0.2-0.6-0.6-0.7-1L72.5,117c0-0.1,0-0.2,0-0.3V32.9c0-0.8,0.7-1.5,1.5-1.5    s1.5,0.7,1.5,1.5v83.7l4.6,24.5l28.6-8.2V54c0-0.8,0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5V134c0,0.7-0.4,1.3-1.1,1.4l-31.2,9    C79.2,144.5,79.1,144.5,79,144.5z"/>
                        <path d="M37.6,122.8c-0.2,0-0.4,0-0.5-0.1l-17.6-6.9c-0.6-0.2-1-0.8-1-1.4l0.8-67.8c0.1-7.7,5.1-14.3,12.5-16.5l19.7-5.7    c0.8-0.2,1.6,0.2,1.9,1c0.2,0.8-0.2,1.6-1,1.9L32.5,33c-6.1,1.8-10.3,7.3-10.3,13.6l-0.7,66.8l16.7,6.5c0.8,0.3,1.2,1.2,0.9,1.9    C38.8,122.4,38.2,122.8,37.6,122.8z"/>
                        <path d="M37.9,133.2c-0.2,0-0.4,0-0.5-0.1l-14.8-5.8c-0.6-0.2-1-0.8-1-1.4v-10.2c0-0.8,0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5v9.2    l13.9,5.4c0.8,0.3,1.2,1.2,0.8,1.9C39.1,132.8,38.5,133.2,37.9,133.2z"/>
                        <path d="M69.2,144.5c-0.1,0-0.3,0-0.4-0.1l-31.2-9c-0.6-0.2-1.1-0.8-1.1-1.4V54c0-0.8,0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5v78.8    l28.6,8.2l4.6-24.5V32.9c0-0.8,0.7-1.5,1.5-1.5s1.5,0.7,1.5,1.5v83.8c0,0.1,0,0.2,0,0.3l-4.9,26.3c-0.1,0.4-0.3,0.8-0.7,1    C69.7,144.4,69.5,144.5,69.2,144.5z"/>
                        <path d="M59.2,76.2h-9c-3.4,0-6.1-2.7-6.1-6.1V59.5c0-3.4,2.7-6.1,6.1-6.1h9c3.4,0,6.1,2.7,6.1,6.1v10.6    C65.3,73.5,62.5,76.2,59.2,76.2z M50.2,56.4c-1.7,0-3.1,1.4-3.1,3.1v10.6c0,1.7,1.4,3.1,3.1,3.1h9c1.7,0,3.1-1.4,3.1-3.1V59.5    c0-1.7-1.4-3.1-3.1-3.1H50.2z"/>
                        <path d="M53,66.4c-3,0-8.2-0.5-8.9-4.2c-0.2-0.8,0.4-1.6,1.2-1.8c0.8-0.2,1.6,0.4,1.8,1.2c0.3,1.5,4.6,1.9,7.5,1.7    c0.1,0,0.1,0,0.2,0c2.4,0.1,6.4-0.2,7.4-1.2c0.1-0.1,0.1-0.1,0.1-0.1c0-0.8,0.6-1.5,1.5-1.5c0,0,0,0,0,0c0.8,0,1.5,0.6,1.5,1.5    c0,0.9-0.3,1.7-1,2.4c-2.2,2.2-8.2,2.2-9.6,2.1C54.4,66.3,53.7,66.4,53,66.4z"/>
                        <path d="M82.8,54.7c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.3-0.2-0.5-0.3c-0.3-0.3-0.4-0.7-0.4-1.1c0-0.4,0.2-0.8,0.4-1.1    c0.1-0.1,0.2-0.1,0.2-0.2c0.1-0.1,0.2-0.1,0.3-0.1c0.1,0,0.2-0.1,0.3-0.1c0.2,0,0.4,0,0.6,0c0.1,0,0.2,0,0.3,0.1    c0.1,0,0.2,0.1,0.3,0.1c0.1,0.1,0.2,0.1,0.2,0.2c0.3,0.3,0.4,0.7,0.4,1.1c0,0.4-0.2,0.8-0.4,1.1c-0.1,0.1-0.3,0.3-0.5,0.3    C83.2,54.6,83,54.7,82.8,54.7z"/>
                        <path d="M82.8,69.7c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.3-0.2-0.5-0.3c-0.3-0.3-0.4-0.7-0.4-1.1c0-0.1,0-0.2,0-0.3    c0-0.1,0-0.2,0.1-0.3s0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.2-0.1,0.2-0.2c0.1-0.1,0.2-0.1,0.3-0.1    c0.1,0,0.2-0.1,0.3-0.1c0.2,0,0.4,0,0.6,0c0.1,0,0.2,0,0.3,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0.1,0.2,0.1,0.2,0.2    c0.3,0.3,0.4,0.7,0.4,1.1c0,0.4-0.2,0.8-0.4,1.1c-0.1,0.1-0.3,0.3-0.5,0.3C83.2,69.6,83,69.7,82.8,69.7z"/>
                        <path d="M82.8,84.8c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.3-0.2-0.5-0.3c-0.3-0.3-0.4-0.7-0.4-1.1c0-0.1,0-0.2,0-0.3    c0-0.1,0-0.2,0.1-0.3s0.1-0.2,0.1-0.3c0-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.2-0.1,0.2-0.2c0.1,0,0.2-0.1,0.3-0.1    c0.1,0,0.2-0.1,0.3-0.1c0.2,0,0.4,0,0.6,0c0.1,0,0.2,0,0.3,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0.1,0.2,0.1,0.2,0.2    c0.3,0.3,0.4,0.7,0.4,1.1c0,0.4-0.2,0.8-0.4,1.1c-0.1,0.1-0.3,0.3-0.5,0.3C83.2,84.8,83,84.8,82.8,84.8z"/>
                        <path d="M82.8,99.6c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.3-0.2-0.5-0.3c-0.1-0.1-0.3-0.3-0.3-0.5c-0.1-0.2-0.1-0.4-0.1-0.6    c0-0.4,0.2-0.8,0.4-1.1c0.4-0.4,0.9-0.5,1.4-0.4c0.1,0,0.2,0,0.3,0.1c0.1,0,0.2,0.1,0.3,0.1c0.1,0.1,0.2,0.1,0.2,0.2    c0.3,0.3,0.4,0.7,0.4,1.1c0,0.2,0,0.4-0.1,0.6c-0.1,0.2-0.2,0.3-0.3,0.5c-0.1,0.1-0.3,0.3-0.5,0.3C83.2,99.6,83,99.6,82.8,99.6z"/>
                        <path d="M82.8,114.8c-0.2,0-0.4,0-0.6-0.1c-0.2-0.1-0.3-0.2-0.5-0.3c-0.3-0.3-0.4-0.7-0.4-1.1c0-0.1,0-0.2,0-0.3    c0-0.1,0-0.2,0.1-0.3c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.2-0.1,0.2-0.2c0.1,0,0.2-0.1,0.3-0.1    s0.2-0.1,0.3-0.1c0.2,0,0.4,0,0.6,0c0.1,0,0.2,0,0.3,0.1s0.2,0.1,0.3,0.1c0.1,0.1,0.2,0.1,0.2,0.2c0.1,0.1,0.1,0.1,0.2,0.2    c0.1,0.1,0.1,0.2,0.1,0.3c0,0.1,0.1,0.2,0.1,0.3c0,0.1,0,0.2,0,0.3c0,0.4-0.2,0.8-0.4,1.1c-0.1,0.1-0.3,0.3-0.5,0.3    C83.2,114.7,83,114.8,82.8,114.8z"/>
                    </g>
                </g>
</svg>
        </div>
    </div>

    <div class="container">
        <div class="container d-flex mt-5" style="padding-left: 0;padding-right: 0">
            <a class="card text-bg-black mr-3" href="#" style="height: 300px;width: 33%; background-image: url({{asset('assets/img/fonts/as.jpg')}})">
{{--                <img src="{{asset('assets/img/fonts/circle.jpg')}}" style="height: 100%" class="card-img" alt="...">--}}
                <p class="bg-dark pt-5 m-4 text-white text-center" style="opacity: 65%; height: 100%;width: 87%">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" width="82.584" height="86.709" viewBox="0 0 82.584 86.709">
                        <g id="abc-block" transform="translate(-9.623 0)">
                            <g id="Сгруппировать_52" data-name="Сгруппировать 52" transform="translate(25.594 0)">
                                <g id="Сгруппировать_51" data-name="Сгруппировать 51" transform="translate(0 0)">
                                    <path id="Контур_44" data-name="Контур 44" d="M130.6,31.068,119.18,1.919A3.086,3.086,0,0,0,115.219.2L86.07,11.624a3.052,3.052,0,0,0-1.715,3.961L95.861,44.734a3.052,3.052,0,0,0,3.961,1.715l29.063-11.42A3.052,3.052,0,0,0,130.6,31.068ZM98.913,43.105,87.767,14.745l28.36-11.162L127.273,31.96Z" transform="translate(-84.14 0)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_54" data-name="Сгруппировать 54" transform="translate(9.623 49.364)">
                                <g id="Сгруппировать_53" data-name="Сгруппировать 53">
                                    <path id="Контур_45" data-name="Контур 45" d="M43.9,230.316H12.675a3.052,3.052,0,0,0-3.052,3.052v31.241a3.052,3.052,0,0,0,3.052,3.052H43.9a3.052,3.052,0,0,0,3.052-3.052V233.368A3.052,3.052,0,0,0,43.9,230.316Zm-.377,33.9H13.052V233.745H43.522Z" transform="translate(-9.623 -230.316)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_56" data-name="Сгруппировать 56" transform="translate(47.961 41.079)">
                                <g id="Сгруппировать_55" data-name="Сгруппировать 55" transform="translate(0)">
                                    <path id="Контур_46" data-name="Контур 46" d="M230.54,199.774l-30.178-8.025a3.1,3.1,0,0,0-3.738,2.229L188.6,224.156a3.052,3.052,0,0,0,2.159,3.738h0l30.178,8.025a3.052,3.052,0,0,0,3.738-2.159h0l7.956-30.246A3.052,3.052,0,0,0,230.54,199.774Zm-9.071,32.578-29.458-7.733,7.836-29.441,29.441,7.836Z" transform="translate(-188.495 -191.66)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_58" data-name="Сгруппировать 58" transform="translate(43.572 13.898)">
                                <g id="Сгруппировать_57" data-name="Сгруппировать 57">
                                    <path id="Контур_47" data-name="Контур 47" d="M183.623,77.659a5.78,5.78,0,0,0-1.217-1.577l-8.573-9.036-1.012-1.1a5.14,5.14,0,0,0-.84-.7,2.4,2.4,0,0,0-1.029-.394,2.9,2.9,0,0,0-2.332.926,2.382,2.382,0,0,0-.48.994,6.043,6.043,0,0,0-.12,1.3V81.842q.051.772.086,1.183a2.559,2.559,0,0,0,.154.754,1.526,1.526,0,0,0,.909.857,1.715,1.715,0,0,0,1.3,0,1.354,1.354,0,0,0,.909-.857,8.126,8.126,0,0,0,.137-2.006V79.322l6.773-2.658,1.612,1.715.737.737a3.787,3.787,0,0,0,.7.583,1.475,1.475,0,0,0,.634.206,1.614,1.614,0,0,0,.737-.12,1.715,1.715,0,0,0,.909-.874A1.6,1.6,0,0,0,183.623,77.659Zm-12.26-1.252-.24-7.785,5.213,5.83Z" transform="translate(-168.019 -64.843)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_60" data-name="Сгруппировать 60" transform="translate(21.27 58.266)">
                                <g id="Сгруппировать_59" data-name="Сгруппировать 59">
                                    <path id="Контур_48" data-name="Контур 48" d="M75.26,280.285a4.115,4.115,0,0,0,2.675-3.927,4.286,4.286,0,0,0-.257-1.475,4.236,4.236,0,0,0-.737-1.286,4.389,4.389,0,0,0-1.115-.96,4.735,4.735,0,0,0-1.715-.617,13.548,13.548,0,0,0-2.212-.154H66.207a2.3,2.3,0,0,0-1.715.514,2.349,2.349,0,0,0-.514,1.715v13.443a2.383,2.383,0,0,0,.5,1.715,2.263,2.263,0,0,0,1.732.532h5.47a19.235,19.235,0,0,0,2.383-.223,7.379,7.379,0,0,0,1.886-.48,4.613,4.613,0,0,0,2.075-1.715,4.9,4.9,0,0,0,.772-2.709A4.372,4.372,0,0,0,75.26,280.285Zm-7.63-5.658h2.863a7.373,7.373,0,0,1,2.932.446,1.714,1.714,0,0,1,.96,1.715,2.214,2.214,0,0,1-.309,1.149,1.989,1.989,0,0,1-1.132.977,6.656,6.656,0,0,1-2.092.257H67.544Zm7.476,9.791q0,2.64-3.669,2.641H67.544l.086-5.213h3.721a5.332,5.332,0,0,1,2.846.617A2.161,2.161,0,0,1,75.106,284.418Z" transform="translate(-63.966 -271.853)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_62" data-name="Сгруппировать 62" transform="translate(62.179 53.364)">
                                <g id="Сгруппировать_61" data-name="Сгруппировать 61">
                                    <path id="Контур_49" data-name="Контур 49" d="M271.359,253.792a6.978,6.978,0,0,0-2.04-2.778,8.35,8.35,0,0,0-3.429-1.715,8.88,8.88,0,0,0-3.429-.257,7.852,7.852,0,0,0-3.121,1.08,8.281,8.281,0,0,0-2.486,2.366,11.147,11.147,0,0,0-1.595,3.566,12.152,12.152,0,0,0-.412,2.486A9.686,9.686,0,0,0,255,260.89a8.883,8.883,0,0,0,.686,2.126,7.131,7.131,0,0,0,1.3,1.886,7.254,7.254,0,0,0,1.818,1.355,11.4,11.4,0,0,0,2.418.926,8.266,8.266,0,0,0,3.309.257,6.741,6.741,0,0,0,2.623-.994,6.651,6.651,0,0,0,1.715-1.543,4.732,4.732,0,0,0,.874-1.715,1.492,1.492,0,0,0-.154-1.2,1.526,1.526,0,0,0-.96-.72,1.3,1.3,0,0,0-1.183.154,3.873,3.873,0,0,0-.84.96,4.7,4.7,0,0,1-2.16,1.715,4.425,4.425,0,0,1-2.743,0,4.578,4.578,0,0,1-2.178-1.08,4.372,4.372,0,0,1-1.063-2.418,8.933,8.933,0,0,1,.326-3.429,7.7,7.7,0,0,1,2.5-4.441,4.287,4.287,0,0,1,3.875-.72,4.082,4.082,0,0,1,2.109,1.235,5.472,5.472,0,0,1,1.1,2.349,4.577,4.577,0,0,0,.463,1.3,1.457,1.457,0,0,0,.926.583,1.389,1.389,0,0,0,1.149-.189,1.562,1.562,0,0,0,.7-.943A4.235,4.235,0,0,0,271.359,253.792Z" transform="translate(-254.832 -248.978)" fill="#fff"></path>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <br><br><span style="font-size: 25px;">To'garaklar</span></p>
            </a><i class="fa-solid fa-bed-empty"></i>
            <a class="card text-bg-dark mr-3" href="{{route('parents')}}" style="height: 300px;width: 33%">
                <img src="{{asset('assets/img/fonts/father.jpg')}}" style="height: 100%" class="card-img" alt="...">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" width="60px" height="60px" viewBox="0 0 60 60" version="1.1">
                    <!-- Generator: Sketch 3.2.2 (9983) - http://www.bohemiancoding.com/sketch -->
                    <title>Bed</title>
                    <desc>Created with Sketch.</desc>
                    <defs/>
                    <g id="outlined" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <g id="Medical_sliced" sketch:type="MSLayerGroup"/>
                        <g id="Medical" sketch:type="MSLayerGroup" transform="translate(3.000000, -14.000000)" stroke="#535353" stroke-width="2">
                            <g id="Bed" transform="translate(0.000000, 26.000000)" sketch:type="MSShapeGroup">
                                <rect id="Rectangle-171" stroke-linecap="round" stroke-linejoin="round" x="0" y="5" width="5" height="32"/>
                                <rect id="Rectangle-172" stroke-linecap="round" stroke-linejoin="round" x="49" y="17" width="5" height="20"/>
                                <rect id="Rectangle-173" stroke-linecap="round" stroke-linejoin="round" x="5" y="25" width="44" height="5"/>
                                <rect id="Rectangle-174" stroke-linecap="round" stroke-linejoin="round" transform="translate(14.000000, 21.000000) rotate(-75.000000) translate(-14.000000, -21.000000) " x="11" y="15" width="6" height="12" rx="13"/>
                                <g id="Rectangle-126-+-Rectangle-127-+-Rectangle-128" transform="translate(27.000000, 0.000000)">
                                    <rect id="Rectangle-126" x="5" y="0" width="7" height="17" rx="2"/>
                                    <rect id="Rectangle-127" transform="translate(8.500000, 8.500000) rotate(-90.000000) translate(-8.500000, -8.500000) " x="5" y="0" width="7" height="17" rx="2"/>
                                    <rect id="Rectangle-128" x="5" y="5" width="7" height="7"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
            <a class="card text-bg-dark" href="#" style="height: 300px;width: 33%">
                <img src="{{asset('assets/img/fonts/libery.jpg')}}" style="height: 100%" class="card-img" alt="...">
            </a>
    </div>

    <!--====== CATEGORY PART ENDS ======-->
    <!--====== ABOUT PART START ======-->

    <section id="about-part" class="pt-65">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="section-title mt-50">
                        <h5>Biz haqimizda</h5>
                        <h2>Maktab ramzlari</h2>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <p>Maktab fizika va matematika sohasida kadrlar tayyorlash bo‘yicha milliy
                            va xalqaro maydonda imidjini oshirish maqsadida o‘zining ramzlari, shu jumladan madhiyasi,
                            bayrog‘i va emblemasiga ega.
                        </p><br>
                        <h2>Maktab madhiyasi</h2>
                        <p>Kuch olamiz maktab ilmidan<br>
                            Vatan, bizning shahdimizga boq...<br>
                            Fizik qonun, hisob bilmidan <br>
                            Olayapmiz mukammal saboq... <br><br>

                            Kel, tengdoshim, safimizda tur <br>
                            Zamon ko‘rsin ilm-fan kuchin. <br>
                            Egallaymiz dunyo sirlarin <br>
                            Ona yurtning ertasi uchun... <br><br>

                            Bobom qo‘li yetgandi ko‘kka - <br>
                            Bugun dunyo qilgaydir ta’zim. <br>
                            Fizika ham matematika, <br>
                            Al-Jabrning yurti - Xorazm! <br>
                        </p>
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="about-event mt-50">
                        <div class="event-title">
                            <h3>Maktab emblemasi</h3>
                        </div> <!-- event title -->
                        <img src="{{asset('fasset/images/emblem.png')}}" alt="Emblema"><br>
                        <div class="event-title">
                            <h3>Maktab bayrog'i</h3>
                        </div> <!-- event title -->
                        <img src="{{asset('fasset/images/flag.png')}}" alt="Bayroq">
                    </div> <!-- about event -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="about-bg">
            <img src="{{asset('fasset/images/about/bg-1.png')}}" alt="About">
        </div>
    </section>

    <!--====== ABOUT PART ENDS ======-->

    <!--====== APPLY PART START ======-->

    {{--<section id="apply-aprt" class="pb-120">
        <div class="container">
            <div class="apply">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-1">
                            <h3>Apply for fall 2019</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                    <div class="col-lg-6">
                        <div class="apply-cont apply-color-2">
                            <h3>Apply for scholarship</h3>
                            <p>Gravida nibh vel velit auctor aliquetn sollicitudirem sem quibibendum auci elit cons equat ipsutis sem nibh id elituis sed odio sit amet nibh vulputate cursus equat ipsutis.</p>
                            <a href="#" class="main-btn">Apply Now</a>
                        </div> <!-- apply cont -->
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>--}}

    <!--====== APPLY PART ENDS ======-->

    <!--====== COURSE PART START ======-->

    {{--  <section id="course-part" class="pt-115 pb-120 gray-bg">
          <div class="container">
              <div class="row">
                  <div class="col-lg-6">
                      <div class="section-title pb-45">
                          <h5>Our course</h5>
                          <h2>Featured courses </h2>
                      </div> <!-- section title -->
                  </div>
              </div> <!-- row -->
              <div class="row course-slied mt-30">
                  <div class="col-lg-4">
                      <div class="singel-course">
                          <div class="thum">
                              <div class="image">
                                  <img src="images/course/cu-1.jpg" alt="Course">
                              </div>
                              <div class="price">
                                  <span>Free</span>
                              </div>
                          </div>
                          <div class="cont">
                              <ul>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                              </ul>
                              <span>(20 Reviws)</span>
                              <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                              <div class="course-teacher">
                                  <div class="thum">
                                      <a href="#"><img src="images/course/teacher/t-1.jpg" alt="teacher"></a>
                                  </div>
                                  <div class="name">
                                      <a href="#"><h6>Mark anthem</h6></a>
                                  </div>
                                  <div class="admin">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                          <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div> <!-- singel course -->
                  </div>
                  <div class="col-lg-4">
                      <div class="singel-course">
                          <div class="thum">
                              <div class="image">
                                  <img src="images/course/cu-2.jpg" alt="Course">
                              </div>
                              <div class="price">
                                  <span>Free</span>
                              </div>
                          </div>
                          <div class="cont">
                              <ul>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                              </ul>
                              <span>(20 Reviws)</span>
                              <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                              <div class="course-teacher">
                                  <div class="thum">
                                      <a href="#"><img src="images/course/teacher/t-2.jpg" alt="teacher"></a>
                                  </div>
                                  <div class="name">
                                      <a href="#"><h6>Mark anthem</h6></a>
                                  </div>
                                  <div class="admin">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                          <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div> <!-- singel course -->
                  </div>
                  <div class="col-lg-4">
                      <div class="singel-course">
                          <div class="thum">
                              <div class="image">
                                  <img src="images/course/cu-3.jpg" alt="Course">
                              </div>
                              <div class="price">
                                  <span>Free</span>
                              </div>
                          </div>
                          <div class="cont">
                              <ul>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                              </ul>
                              <span>(20 Reviws)</span>
                              <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                              <div class="course-teacher">
                                  <div class="thum">
                                      <a href="#"><img src="images/course/teacher/t-3.jpg" alt="teacher"></a>
                                  </div>
                                  <div class="name">
                                      <a href="#"><h6>Mark anthem</h6></a>
                                  </div>
                                  <div class="admin">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                          <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div> <!-- singel course -->
                  </div>
                  <div class="col-lg-4">
                      <div class="singel-course">
                          <div class="thum">
                              <div class="image">
                                  <img src="images/course/cu-4.jpg" alt="Course">
                              </div>
                              <div class="price">
                                  <span>Free</span>
                              </div>
                          </div>
                          <div class="cont">
                              <ul>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                              </ul>
                              <span>(20 Reviws)</span>
                              <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                              <div class="course-teacher">
                                  <div class="thum">
                                      <a href="#"><img src="images/course/teacher/t-4.jpg" alt="teacher"></a>
                                  </div>
                                  <div class="name">
                                      <a href="#"><h6>Mark anthem</h6></a>
                                  </div>
                                  <div class="admin">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                          <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div> <!-- singel course -->
                  </div>
                  <div class="col-lg-4">
                      <div class="singel-course">
                          <div class="thum">
                              <div class="image">
                                  <img src="images/course/cu-5.jpg" alt="Course">
                              </div>
                              <div class="price">
                                  <span>Free</span>
                              </div>
                          </div>
                          <div class="cont">
                              <ul>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                                  <li><i class="fa fa-star"></i></li>
                              </ul>
                              <span>(20 Reviws)</span>
                              <a href="courses-singel.html"><h4>Learn basis javascirpt from start for beginner</h4></a>
                              <div class="course-teacher">
                                  <div class="thum">
                                      <a href="#"><img src="images/course/teacher/t-5.jpg" alt="teacher"></a>
                                  </div>
                                  <div class="name">
                                      <a href="#"><h6>Mark anthem</h6></a>
                                  </div>
                                  <div class="admin">
                                      <ul>
                                          <li><a href="#"><i class="fa fa-user"></i><span>31</span></a></li>
                                          <li><a href="#"><i class="fa fa-heart"></i><span>10</span></a></li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div> <!-- singel course -->
                  </div>
              </div> <!-- course slied -->
          </div> <!-- container -->
      </section>--}}

    <!--====== COURSE PART ENDS ======-->

    <!--====== VIDEO FEATURE PART START ======-->

    <section id="video-feature" class="bg_cover pt-60 pb-110"
             style="background-image: url({{asset('fasset/images/school1.jpg')}})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-last order-lg-first">
                    <div class="video text-lg-left text-center pt-50">
                        <a class="Video-popup" href="https://www.youtube.com/watch?v=otUguZ2g7YM"><i
                                class="fa fa-play"></i></a>
                    </div> <!-- row -->
                </div>
                <div class="col-lg-5 offset-lg-1 order-first order-lg-last">
                    <div class="feature pt-50">
                        <div class="feature-title">
                            <h3>Bizning ixtisosliklar</h3>
                        </div>
                        <ul>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('fasset/images/all-icon/f-1.png')}}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Olimpiada va tanlovlar</h4>
                                        <p>O'zbekiston va Jahon olimpiadasida ishtirok etish</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('fasset/images/all-icon/f-2.png')}}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Barcha o'quvchilarning faolligi</h4>
                                        <p>O'quvchilarning barchasi dars jarayonida faol ishtirok eta oladilar.</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                            <li>
                                <div class="singel-feature">
                                    <div class="icon">
                                        <img src="{{asset('fasset/images/all-icon/f-3.png')}}" alt="icon">
                                    </div>
                                    <div class="cont">
                                        <h4>Kutubxona va resurslar</h4>
                                        <p>Bo'sh vaqtni mazmunli o'tkazish uchun kutubxona va resurslarning
                                            mavjudligi</p>
                                    </div>
                                </div> <!-- singel feature -->
                            </li>
                        </ul>
                    </div> <!-- feature -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="feature-bg"></div> <!-- feature bg -->
    </section>

    <!--====== VIDEO FEATURE PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    {{-- <section id="teachers-part" class="pt-70 pb-120">
         <div class="container">
             <div class="row">
                 <div class="col-lg-5">
                     <div class="section-title mt-50">
                         <h5>Featured Teachers</h5>
                         <h2>Meet Our teachers</h2>
                     </div> <!-- section title -->
                     <div class="teachers-cont">
                         <p>Lorem ipsum gravida nibh vel velit auctor aliquetn sollicitudirem quibibendum auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris. <br> <br> auci elit cons equat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet . Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt  mauris</p>
                         <a href="#" class="main-btn mt-55">Career with us</a>
                     </div> <!-- teachers cont -->
                 </div>
                 <div class="col-lg-6 offset-lg-1">
                     <div class="teachers mt-20">
                         <div class="row">
                             <div class="col-sm-6">
                                 <div class="singel-teachers mt-30 text-center">
                                     <div class="image">
                                         <img src="images/teachers/t-1.jpg" alt="Teachers">
                                     </div>
                                     <div class="cont">
                                         <a href="teachers-singel.html"><h6>Mark alen</h6></a>
                                         <span>Vice chencelor</span>
                                     </div>
                                 </div> <!-- singel teachers -->
                             </div>
                             <div class="col-sm-6">
                                 <div class="singel-teachers mt-30 text-center">
                                     <div class="image">
                                         <img src="images/teachers/t-2.jpg" alt="Teachers">
                                     </div>
                                     <div class="cont">
                                         <a href="teachers-singel.html"><h6>David card</h6></a>
                                         <span>Pro chencelor</span>
                                     </div>
                                 </div> <!-- singel teachers -->
                             </div>
                             <div class="col-sm-6">
                                 <div class="singel-teachers mt-30 text-center">
                                     <div class="image">
                                         <img src="images/teachers/t-3.jpg" alt="Teachers">
                                     </div>
                                     <div class="cont">
                                         <a href="teachers-singel.html"><h6>Rebeka alig</h6></a>
                                         <span>Pro chencelor</span>
                                     </div>
                                 </div> <!-- singel teachers -->
                             </div>
                             <div class="col-sm-6">
                                 <div class="singel-teachers mt-30 text-center">
                                     <div class="image">
                                         <img src="images/teachers/t-4.jpg" alt="Teachers">
                                     </div>
                                     <div class="cont">
                                         <a href="teachers-singel.html"><h6>Hanna bein</h6></a>
                                         <span>Aerobics head</span>
                                     </div>
                                 </div> <!-- singel teachers -->
                             </div>
                         </div> <!-- row -->
                     </div> <!-- teachers -->
                 </div>
             </div> <!-- row -->
         </div> <!-- container -->
     </section>
 --}}
    <!--====== TEACHERS PART ENDS ======-->

    <!--====== PUBLICATION PART START ======-->

    {{--  <section id="publication-part" class="pt-115 pb-120 gray-bg">
          <div class="container">
              <div class="row align-items-end">
                  <div class="col-lg-6 col-md-8 col-sm-7">
                      <div class="section-title pb-60">
                          <h5>Publications</h5>
                          <h2>From Store </h2>
                      </div> <!-- section title -->
                  </div>
                  <div class="col-lg-6 col-md-4 col-sm-5">
                      <div class="products-btn text-right pb-60">
                          <a href="#" class="main-btn">All Products</a>
                      </div> <!-- products btn -->
                  </div>
              </div> <!-- row -->
              <div class="row justify-content-center">
                  <div class="col-lg-3 col-md-6 col-sm-8">
                      <div class="singel-publication mt-30">
                          <div class="image">
                              <img src="images/publication/p-1.jpg" alt="Publication">
                              <div class="add-cart">
                                  <ul>
                                      <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="cont">
                              <div class="name">
                                  <a href="shop-singel.html"><h6>Set for life </h6></a>
                                  <span>By Scott Trench</span>
                              </div>
                              <div class="button text-right">
                                  <a href="#" class="main-btn">Buy Now ($50)</a>
                              </div>
                          </div>
                      </div> <!-- singel publication -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-8">
                      <div class="singel-publication mt-30">
                          <div class="image">
                              <img src="images/publication/p-2.jpg" alt="Publication">
                              <div class="add-cart">
                                  <ul>
                                      <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="cont">
                              <div class="name">
                                  <a href="shop-singel.html"><h6>A Daughters </h6></a>
                                  <span>By Scott Trench</span>
                              </div>
                              <div class="button text-right">
                                  <a href="#" class="main-btn">Buy Now ($30)</a>
                              </div>
                          </div>
                      </div> <!-- singel publication -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-8">
                      <div class="singel-publication mt-30">
                          <div class="image">
                              <img src="images/publication/p-3.jpg" alt="Publication">
                              <div class="add-cart">
                                  <ul>
                                      <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="cont">
                              <div class="name">
                                  <a href="shop-singel.html"><h6>A Magnet </h6></a>
                                  <span>By Scott Trench</span>
                              </div>
                              <div class="button text-right">
                                  <a href="#" class="main-btn">Buy Now ($20)</a>
                              </div>
                          </div>
                      </div> <!-- singel publication -->
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-8">
                      <div class="singel-publication mt-30">
                          <div class="image">
                              <img src="images/publication/p-4.jpg" alt="Publication">
                              <div class="add-cart">
                                  <ul>
                                      <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                      <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="cont">
                              <div class="name">
                                  <a href="shop-singel.html"><h6>Pices of light</h6></a>
                                  <span>By Scott Trench</span>
                              </div>
                              <div class="button text-right">
                                  <a href="#" class="main-btn">Buy Now ($75)</a>
                              </div>
                          </div>
                      </div> <!-- singel publication -->
                  </div>
              </div> <!-- row -->
          </div> <!-- container -->
      </section>
  --}}
    <!--====== PUBLICATION PART ENDS ======-->

    <!--====== TEASTIMONIAL PART START ======-->
    <!--====== TEASTIMONIAL PART ENDS ======-->

    <!--====== NEWS PART START ======-->

    <section id="news-part" class="pt-115 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-50">
                        <h5>So'ngi yangiliklar</h5>
                        <h2>Yangiliklar</h2>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="row">

                @foreach($posts as $new)
                    <div class="col">
                        <div class="singel-news mt-30">
                            <div class="news-thum pb-25">
                                <img src="{{asset('/storage/posts/' . $new->img)}}" alt="News">
                            </div>
                            <div class="news-cont">
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> {{$new->created_at->format('d.m.Y')}}
                                        </a></li>
                                </ul>
                                <a href="{{route('news-item' , $new->id)}}"><h3>{{$new->header}}</h3></a>
                                <p>{{ \Illuminate\Support\Str::limit($new->description, 250, '...') }}</p>
                            </div>
                        </div> <!-- singel news -->
                    </div>
                @endforeach

            </div>
        </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NEWS PART ENDS ======-->

    <!--====== PATNAR LOGO PART START ======-->

    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="http://uzedu.uz"> <img src="{{asset('fasset/images/uzedu.png')}}" width="150px"
                                                        alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="http://xorazmvxtb.uz/"><img src="{{asset('fasset/images/xorazm.png')}}" width="150px"
                                                             alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="http://ziyonet.uz"><img src="{{asset('fasset/images/ziyonet.png')}}" width="150px"
                                                         alt="Logo"></a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="https://lex.uz/ru/"> <img src="{{asset('fasset/images/lex.png')}}" width="150px"
                                                           alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="https://eyuf.uz/"> <img src="{{asset('fasset/images/el.jpg')}}" width="150px"
                                                         alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="https://mininnovation.uz/"> <img src="{{asset('fasset/images/min.png')}}" width="150px"
                                                                  alt="Logo"></a>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div>

    <!--====== PATNAR LOGO PART ENDS ======-->

    <!--====== FOOTER PART START ======-->
    <x-layouts.footer></x-layouts.footer>
@endsection

