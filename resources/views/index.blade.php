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
        {{--        <div class="card text-bg-dark mr-3" style="height: 300px;width: 33%">--}}
        {{--            <img src="{{asset('assets/img/fonts/food.jpg')}}" style="height: 100%" class="card-img" alt="...">--}}
        {{--            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">--}}
        {{--<path d="M28,28c0,0.6-0.4,1-1,1h-1v-7h-2v7h-1c-0.6,0-1-0.4-1-1v-6h-2v6c0,1.7,1.3,3,3,3h1v8h-1c-0.6,0-1,0.4-1,1v13  c0,0.6,0.4,1,1,1h4c0.6,0,1-0.4,1-1V40c0-0.6-0.4-1-1-1h-1v-8h1c1.7,0,3-1.3,3-3v-6h-2V28z M26,52h-2V41h2V52z"/>--}}
        {{--                <path d="M61.7,7.3l-5-5C56.5,2.1,56.3,2,56,2H8C7.7,2,7.5,2.1,7.3,2.3l-5,5C2.1,7.5,2,7.7,2,8h0v6c0,0.5,0.3,0.9,0.8,1L4,15.2V43H3  c-0.6,0-1,0.4-1,1v17c0,0.6,0.4,1,1,1h58c0.6,0,1-0.4,1-1V44c0-0.6-0.4-1-1-1h-1V15.2l1.2-0.2c0.5-0.1,0.8-0.5,0.8-1V8h0  C62,7.7,61.9,7.5,61.7,7.3z M8.4,4h47.2l3,3H5.4L8.4,4z M6,15.7c0.3,0.2,0.6,0.5,0.9,1C7.2,17,7.6,17.4,8,17.8V43H6V15.7z M14,40h3  v3h-7V32h3v7C13,39.6,13.4,40,14,40z M60,60H4V45h1h4h11v-2h-1v-4c0-0.6-0.4-1-1-1h-3v-7c0-0.6-0.4-1-1-1h-4V18.6c0.1,0,0.3,0,0.4,0  c1.8,0,2.7-1.1,3.5-2c0.7-0.8,1.1-1.3,1.9-1.3c0.8,0,1.2,0.4,1.9,1.3c0.7,0.9,1.6,2,3.5,2s2.7-1.1,3.5-2c0.7-0.8,1.1-1.3,1.9-1.3  s1.2,0.4,1.9,1.3c0.7,0.9,1.6,2,3.5,2c1.8,0,2.7-1.1,3.5-2c0.7-0.8,1.1-1.3,1.9-1.3c0.8,0,1.2,0.4,1.9,1.3c0.7,0.9,1.6,2,3.5,2  c1.8,0,2.7-1.1,3.5-2c0.7-0.8,1.1-1.3,1.9-1.3c0.8,0,1.2,0.4,1.9,1.3c0.7,0.9,1.7,2,3.5,2c0.1,0,0.3,0,0.4,0V27h-4c-0.6,0-1,0.4-1,1  v7h-2c-0.6,0-1,0.4-1,1v7h-4v2h13h4h1V60z M48,43v-6h6v6H48z M54,35h-3v-6h3V35z M56,43V17.8c0.4-0.3,0.8-0.7,1.1-1.1  c0.4-0.4,0.6-0.7,0.9-1V43H56z M58.9,13.4c-1.8,0-2.6,1.1-3.4,2c-0.7,0.8-1.1,1.3-1.9,1.3c-0.8,0-1.2-0.4-1.9-1.3  c-0.7-0.9-1.7-2-3.5-2s-2.7,1.1-3.5,2c-0.7,0.8-1.1,1.3-1.9,1.3c-0.8,0-1.2-0.4-1.9-1.3c-0.7-0.9-1.6-2-3.5-2c-1.8,0-2.7,1.1-3.5,2  c-0.7,0.8-1.1,1.3-1.9,1.3c-0.8,0-1.2-0.4-1.9-1.3c-0.7-0.9-1.6-2-3.5-2s-2.7,1.1-3.5,2c-0.7,0.8-1.1,1.3-1.9,1.3  c-0.8,0-1.2-0.4-1.9-1.3c-0.7-0.9-1.6-2-3.5-2c-1.8,0-2.7,1.1-3.5,2c-0.7,0.8-1.1,1.3-1.9,1.3c-0.8,0-1.2-0.4-1.9-1.3  c-0.7-0.9-1.6-1.9-3.4-2L4,13.2V9h56v4.2L58.9,13.4z"/>--}}
        {{--                <path d="M42,35.1c0-5.6-3.9-10.4-6.3-12.8c-0.3-0.3-0.7-0.4-1.1-0.2C34.2,22.2,34,22.6,34,23v17v13c0,0.6,0.4,1,1,1h4  c0.6,0,1-0.4,1-1V41h1c0.6,0,1-0.4,1-1V35.1z M38,52h-2V41h2V52z M40,39h-4V25.6c1.9,2.3,4,5.7,4,9.5V39z"/>--}}
        {{--</svg>--}}

        {{--        </div>--}}
        {{--        <div class="card text-bg-dark mr-3" style="height: 300px;width: 33%">--}}
        {{--            <img src="{{asset('assets/img/fonts/room.jpg')}}" style="height: 100%" class="card-img" alt="...">--}}

        {{--        </div>--}}
        <div class="container d-flex mt-5" style="padding-left: 0;padding-right: 0">
            <div class="card text-bg-black mr-3"
                 style="height: 300px;width: 33%; background-image: url({{asset('assets/img/fonts/as.jpg')}})">
                <p class="bg-dark pt-5 m-4 text-white text-center" style="opacity: 65%; height: 100%;width: 87%">
{{--                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" width="82.584" height="86.709"--}}
{{--                         viewBox="0 0 82.584 86.709">--}}
{{--                        <g id="abc-block" transform="translate(-9.623 0)">--}}
{{--                            <g id="Сгруппировать_52" data-name="Сгруппировать 52" transform="translate(25.594 0)">--}}
{{--                                <g id="Сгруппировать_51" data-name="Сгруппировать 51" transform="translate(0 0)">--}}
{{--                                    <path id="Контур_44" data-name="Контур 44"--}}
{{--                                          d="M130.6,31.068,119.18,1.919A3.086,3.086,0,0,0,115.219.2L86.07,11.624a3.052,3.052,0,0,0-1.715,3.961L95.861,44.734a3.052,3.052,0,0,0,3.961,1.715l29.063-11.42A3.052,3.052,0,0,0,130.6,31.068ZM98.913,43.105,87.767,14.745l28.36-11.162L127.273,31.96Z"--}}
{{--                                          transform="translate(-84.14 0)" fill="#fff"></path>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                            <g id="Сгруппировать_54" data-name="Сгруппировать 54" transform="translate(9.623 49.364)">--}}
{{--                                <g id="Сгруппировать_53" data-name="Сгруппировать 53">--}}
{{--                                    <path id="Контур_45" data-name="Контур 45"--}}
{{--                                          d="M43.9,230.316H12.675a3.052,3.052,0,0,0-3.052,3.052v31.241a3.052,3.052,0,0,0,3.052,3.052H43.9a3.052,3.052,0,0,0,3.052-3.052V233.368A3.052,3.052,0,0,0,43.9,230.316Zm-.377,33.9H13.052V233.745H43.522Z"--}}
{{--                                          transform="translate(-9.623 -230.316)" fill="#fff"></path>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                            <g id="Сгруппировать_56" data-name="Сгруппировать 56" transform="translate(47.961 41.079)">--}}
{{--                                <g id="Сгруппировать_55" data-name="Сгруппировать 55" transform="translate(0)">--}}
{{--                                    <path id="Контур_46" data-name="Контур 46"--}}
{{--                                          d="M230.54,199.774l-30.178-8.025a3.1,3.1,0,0,0-3.738,2.229L188.6,224.156a3.052,3.052,0,0,0,2.159,3.738h0l30.178,8.025a3.052,3.052,0,0,0,3.738-2.159h0l7.956-30.246A3.052,3.052,0,0,0,230.54,199.774Zm-9.071,32.578-29.458-7.733,7.836-29.441,29.441,7.836Z"--}}
{{--                                          transform="translate(-188.495 -191.66)" fill="#fff"></path>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                            <g id="Сгруппировать_58" data-name="Сгруппировать 58" transform="translate(43.572 13.898)">--}}
{{--                                <g id="Сгруппировать_57" data-name="Сгруппировать 57">--}}
{{--                                    <path id="Контур_47" data-name="Контур 47"--}}
{{--                                          d="M183.623,77.659a5.78,5.78,0,0,0-1.217-1.577l-8.573-9.036-1.012-1.1a5.14,5.14,0,0,0-.84-.7,2.4,2.4,0,0,0-1.029-.394,2.9,2.9,0,0,0-2.332.926,2.382,2.382,0,0,0-.48.994,6.043,6.043,0,0,0-.12,1.3V81.842q.051.772.086,1.183a2.559,2.559,0,0,0,.154.754,1.526,1.526,0,0,0,.909.857,1.715,1.715,0,0,0,1.3,0,1.354,1.354,0,0,0,.909-.857,8.126,8.126,0,0,0,.137-2.006V79.322l6.773-2.658,1.612,1.715.737.737a3.787,3.787,0,0,0,.7.583,1.475,1.475,0,0,0,.634.206,1.614,1.614,0,0,0,.737-.12,1.715,1.715,0,0,0,.909-.874A1.6,1.6,0,0,0,183.623,77.659Zm-12.26-1.252-.24-7.785,5.213,5.83Z"--}}
{{--                                          transform="translate(-168.019 -64.843)" fill="#fff"></path>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                            <g id="Сгруппировать_60" data-name="Сгруппировать 60" transform="translate(21.27 58.266)">--}}
{{--                                <g id="Сгруппировать_59" data-name="Сгруппировать 59">--}}
{{--                                    <path id="Контур_48" data-name="Контур 48"--}}
{{--                                          d="M75.26,280.285a4.115,4.115,0,0,0,2.675-3.927,4.286,4.286,0,0,0-.257-1.475,4.236,4.236,0,0,0-.737-1.286,4.389,4.389,0,0,0-1.115-.96,4.735,4.735,0,0,0-1.715-.617,13.548,13.548,0,0,0-2.212-.154H66.207a2.3,2.3,0,0,0-1.715.514,2.349,2.349,0,0,0-.514,1.715v13.443a2.383,2.383,0,0,0,.5,1.715,2.263,2.263,0,0,0,1.732.532h5.47a19.235,19.235,0,0,0,2.383-.223,7.379,7.379,0,0,0,1.886-.48,4.613,4.613,0,0,0,2.075-1.715,4.9,4.9,0,0,0,.772-2.709A4.372,4.372,0,0,0,75.26,280.285Zm-7.63-5.658h2.863a7.373,7.373,0,0,1,2.932.446,1.714,1.714,0,0,1,.96,1.715,2.214,2.214,0,0,1-.309,1.149,1.989,1.989,0,0,1-1.132.977,6.656,6.656,0,0,1-2.092.257H67.544Zm7.476,9.791q0,2.64-3.669,2.641H67.544l.086-5.213h3.721a5.332,5.332,0,0,1,2.846.617A2.161,2.161,0,0,1,75.106,284.418Z"--}}
{{--                                          transform="translate(-63.966 -271.853)" fill="#fff"></path>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                            <g id="Сгруппировать_62" data-name="Сгруппировать 62" transform="translate(62.179 53.364)">--}}
{{--                                <g id="Сгруппировать_61" data-name="Сгруппировать 61">--}}
{{--                                    <path id="Контур_49" data-name="Контур 49"--}}
{{--                                          d="M271.359,253.792a6.978,6.978,0,0,0-2.04-2.778,8.35,8.35,0,0,0-3.429-1.715,8.88,8.88,0,0,0-3.429-.257,7.852,7.852,0,0,0-3.121,1.08,8.281,8.281,0,0,0-2.486,2.366,11.147,11.147,0,0,0-1.595,3.566,12.152,12.152,0,0,0-.412,2.486A9.686,9.686,0,0,0,255,260.89a8.883,8.883,0,0,0,.686,2.126,7.131,7.131,0,0,0,1.3,1.886,7.254,7.254,0,0,0,1.818,1.355,11.4,11.4,0,0,0,2.418.926,8.266,8.266,0,0,0,3.309.257,6.741,6.741,0,0,0,2.623-.994,6.651,6.651,0,0,0,1.715-1.543,4.732,4.732,0,0,0,.874-1.715,1.492,1.492,0,0,0-.154-1.2,1.526,1.526,0,0,0-.96-.72,1.3,1.3,0,0,0-1.183.154,3.873,3.873,0,0,0-.84.96,4.7,4.7,0,0,1-2.16,1.715,4.425,4.425,0,0,1-2.743,0,4.578,4.578,0,0,1-2.178-1.08,4.372,4.372,0,0,1-1.063-2.418,8.933,8.933,0,0,1,.326-3.429,7.7,7.7,0,0,1,2.5-4.441,4.287,4.287,0,0,1,3.875-.72,4.082,4.082,0,0,1,2.109,1.235,5.472,5.472,0,0,1,1.1,2.349,4.577,4.577,0,0,0,.463,1.3,1.457,1.457,0,0,0,.926.583,1.389,1.389,0,0,0,1.149-.189,1.562,1.562,0,0,0,.7-.943A4.235,4.235,0,0,0,271.359,253.792Z"--}}
{{--                                          transform="translate(-254.832 -248.978)" fill="#fff"></path>--}}
{{--                                </g>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </svg>--}}

                    <br><br><span style="font-size: 25px;">Ovqatlanish vaqtlari <br>
                                5 mahal avqatlanish, bepul</span></p>
            </div>
            <div class="card text-bg-black mr-3"
                 style="height: 300px;width: 33%; background-image: url({{asset('assets/img/parents/l-1.jpg')}})">
                <p class="bg-dark pt-5 m-4 text-white text-center" style="opacity: 65%; height: 100%;width: 87%">

                    <br><br><span style="font-size: 25px;">Maktab formasi <br>
                    Bor, Bepul</span></p>
            </div>
            <div class="card text-bg-black mr-3" href=""
                 style="height: 300px;width: 33%; background-image: url({{asset('assets/img/parents/l-2.jpg')}})">
                <p class="bg-dark pt-5 m-4 text-white text-center" style="opacity: 65%; height: 100%;width: 87%">

                    <br><br><span style="font-size: 25px;">Maktab yotoqxonasi <br>
                    Bor, Bepul</span></p>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="container d-flex mt-5" style="padding-left: 0;padding-right: 0">
            <a class="card text-bg-black mr-3" href="{{route('circle')}}"
               style="height: 300px;width: 33%; background-image: url({{asset('assets/img/parents/l-1.jpg')}})">
                <p class="bg-dark pt-5 m-4 text-white text-center" style="opacity: 65%; height: 100%;width: 87%">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" width="82.584" height="86.709"
                         viewBox="0 0 82.584 86.709">
                        <g id="abc-block" transform="translate(-9.623 0)">
                            <g id="Сгруппировать_52" data-name="Сгруппировать 52" transform="translate(25.594 0)">
                                <g id="Сгруппировать_51" data-name="Сгруппировать 51" transform="translate(0 0)">
                                    <path id="Контур_44" data-name="Контур 44"
                                          d="M130.6,31.068,119.18,1.919A3.086,3.086,0,0,0,115.219.2L86.07,11.624a3.052,3.052,0,0,0-1.715,3.961L95.861,44.734a3.052,3.052,0,0,0,3.961,1.715l29.063-11.42A3.052,3.052,0,0,0,130.6,31.068ZM98.913,43.105,87.767,14.745l28.36-11.162L127.273,31.96Z"
                                          transform="translate(-84.14 0)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_54" data-name="Сгруппировать 54" transform="translate(9.623 49.364)">
                                <g id="Сгруппировать_53" data-name="Сгруппировать 53">
                                    <path id="Контур_45" data-name="Контур 45"
                                          d="M43.9,230.316H12.675a3.052,3.052,0,0,0-3.052,3.052v31.241a3.052,3.052,0,0,0,3.052,3.052H43.9a3.052,3.052,0,0,0,3.052-3.052V233.368A3.052,3.052,0,0,0,43.9,230.316Zm-.377,33.9H13.052V233.745H43.522Z"
                                          transform="translate(-9.623 -230.316)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_56" data-name="Сгруппировать 56" transform="translate(47.961 41.079)">
                                <g id="Сгруппировать_55" data-name="Сгруппировать 55" transform="translate(0)">
                                    <path id="Контур_46" data-name="Контур 46"
                                          d="M230.54,199.774l-30.178-8.025a3.1,3.1,0,0,0-3.738,2.229L188.6,224.156a3.052,3.052,0,0,0,2.159,3.738h0l30.178,8.025a3.052,3.052,0,0,0,3.738-2.159h0l7.956-30.246A3.052,3.052,0,0,0,230.54,199.774Zm-9.071,32.578-29.458-7.733,7.836-29.441,29.441,7.836Z"
                                          transform="translate(-188.495 -191.66)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_58" data-name="Сгруппировать 58" transform="translate(43.572 13.898)">
                                <g id="Сгруппировать_57" data-name="Сгруппировать 57">
                                    <path id="Контур_47" data-name="Контур 47"
                                          d="M183.623,77.659a5.78,5.78,0,0,0-1.217-1.577l-8.573-9.036-1.012-1.1a5.14,5.14,0,0,0-.84-.7,2.4,2.4,0,0,0-1.029-.394,2.9,2.9,0,0,0-2.332.926,2.382,2.382,0,0,0-.48.994,6.043,6.043,0,0,0-.12,1.3V81.842q.051.772.086,1.183a2.559,2.559,0,0,0,.154.754,1.526,1.526,0,0,0,.909.857,1.715,1.715,0,0,0,1.3,0,1.354,1.354,0,0,0,.909-.857,8.126,8.126,0,0,0,.137-2.006V79.322l6.773-2.658,1.612,1.715.737.737a3.787,3.787,0,0,0,.7.583,1.475,1.475,0,0,0,.634.206,1.614,1.614,0,0,0,.737-.12,1.715,1.715,0,0,0,.909-.874A1.6,1.6,0,0,0,183.623,77.659Zm-12.26-1.252-.24-7.785,5.213,5.83Z"
                                          transform="translate(-168.019 -64.843)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_60" data-name="Сгруппировать 60" transform="translate(21.27 58.266)">
                                <g id="Сгруппировать_59" data-name="Сгруппировать 59">
                                    <path id="Контур_48" data-name="Контур 48"
                                          d="M75.26,280.285a4.115,4.115,0,0,0,2.675-3.927,4.286,4.286,0,0,0-.257-1.475,4.236,4.236,0,0,0-.737-1.286,4.389,4.389,0,0,0-1.115-.96,4.735,4.735,0,0,0-1.715-.617,13.548,13.548,0,0,0-2.212-.154H66.207a2.3,2.3,0,0,0-1.715.514,2.349,2.349,0,0,0-.514,1.715v13.443a2.383,2.383,0,0,0,.5,1.715,2.263,2.263,0,0,0,1.732.532h5.47a19.235,19.235,0,0,0,2.383-.223,7.379,7.379,0,0,0,1.886-.48,4.613,4.613,0,0,0,2.075-1.715,4.9,4.9,0,0,0,.772-2.709A4.372,4.372,0,0,0,75.26,280.285Zm-7.63-5.658h2.863a7.373,7.373,0,0,1,2.932.446,1.714,1.714,0,0,1,.96,1.715,2.214,2.214,0,0,1-.309,1.149,1.989,1.989,0,0,1-1.132.977,6.656,6.656,0,0,1-2.092.257H67.544Zm7.476,9.791q0,2.64-3.669,2.641H67.544l.086-5.213h3.721a5.332,5.332,0,0,1,2.846.617A2.161,2.161,0,0,1,75.106,284.418Z"
                                          transform="translate(-63.966 -271.853)" fill="#fff"></path>
                                </g>
                            </g>
                            <g id="Сгруппировать_62" data-name="Сгруппировать 62" transform="translate(62.179 53.364)">
                                <g id="Сгруппировать_61" data-name="Сгруппировать 61">
                                    <path id="Контур_49" data-name="Контур 49"
                                          d="M271.359,253.792a6.978,6.978,0,0,0-2.04-2.778,8.35,8.35,0,0,0-3.429-1.715,8.88,8.88,0,0,0-3.429-.257,7.852,7.852,0,0,0-3.121,1.08,8.281,8.281,0,0,0-2.486,2.366,11.147,11.147,0,0,0-1.595,3.566,12.152,12.152,0,0,0-.412,2.486A9.686,9.686,0,0,0,255,260.89a8.883,8.883,0,0,0,.686,2.126,7.131,7.131,0,0,0,1.3,1.886,7.254,7.254,0,0,0,1.818,1.355,11.4,11.4,0,0,0,2.418.926,8.266,8.266,0,0,0,3.309.257,6.741,6.741,0,0,0,2.623-.994,6.651,6.651,0,0,0,1.715-1.543,4.732,4.732,0,0,0,.874-1.715,1.492,1.492,0,0,0-.154-1.2,1.526,1.526,0,0,0-.96-.72,1.3,1.3,0,0,0-1.183.154,3.873,3.873,0,0,0-.84.96,4.7,4.7,0,0,1-2.16,1.715,4.425,4.425,0,0,1-2.743,0,4.578,4.578,0,0,1-2.178-1.08,4.372,4.372,0,0,1-1.063-2.418,8.933,8.933,0,0,1,.326-3.429,7.7,7.7,0,0,1,2.5-4.441,4.287,4.287,0,0,1,3.875-.72,4.082,4.082,0,0,1,2.109,1.235,5.472,5.472,0,0,1,1.1,2.349,4.577,4.577,0,0,0,.463,1.3,1.457,1.457,0,0,0,.926.583,1.389,1.389,0,0,0,1.149-.189,1.562,1.562,0,0,0,.7-.943A4.235,4.235,0,0,0,271.359,253.792Z"
                                          transform="translate(-254.832 -248.978)" fill="#fff"></path>
                                </g>
                            </g>
                        </g>
                    </svg>

                    <br><br><span style="font-size: 25px;">To'garaklar</span></p>
            </a>
            <a class="card text-bg-black mr-3" href="{{route('ota')}}"
               style="height: 300px;width: 33%; background-image: url({{asset('assets/img/parents/l-2.jpg')}})">
                <p class="bg-dark pt-5 m-4 text-white text-center" style="opacity: 65%; height: 100%;width: 87%">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" width="88" height="88"
                         viewBox="0 0 88 88">
                        <g id="family" transform="translate(-1 -1)">
                            <path id="Контур_50" data-name="Контур 50"
                                  d="M22.075,30.81a7.314,7.314,0,0,0,6.951-5.01l.072-.219-2.693-.9-.072.22a4.488,4.488,0,0,1-8.516,0l-.072-.219-2.693.9.072.217a7.314,7.314,0,0,0,6.951,5.012Z"
                                  transform="translate(5.893 9.932)" fill="#fff"></path>
                            <path id="Контур_51" data-name="Контур 51"
                                  d="M34.075,53.81a7.314,7.314,0,0,0,6.951-5.01l.072-.219-2.693-.9-.072.22a4.488,4.488,0,0,1-8.516,0l-.072-.219-2.693.9.072.217a7.314,7.314,0,0,0,6.951,5.012Z"
                                  transform="translate(10.925 19.577)" fill="#fff"></path>
                            <path id="Контур_52" data-name="Контур 52"
                                  d="M52.405,23.684l-.072.219a4.488,4.488,0,0,1-8.516,0l-.072-.219-2.693.9.072.217a7.326,7.326,0,0,0,13.9,0l.072-.219Z"
                                  transform="translate(16.796 9.512)" fill="#fff"></path>
                            <path id="Контур_53" data-name="Контур 53"
                                  d="M86.5,55.015a14.837,14.837,0,0,0-3.178-3.433V23.952A17.3,17.3,0,0,0,66.048,6.677a11.03,11.03,0,0,0-7.433,2.851,12.776,12.776,0,0,0-10.27,6.044,14.433,14.433,0,0,0-3.338-5.219L43.552,8.9A8.446,8.446,0,0,0,35.135,1H27.728A16.122,16.122,0,0,0,14.234,8.371l-.287.115a11.567,11.567,0,0,0-6.677,14.4L9.55,29.718a5.668,5.668,0,0,0,5.643,5.347h.084a12.785,12.785,0,0,0,5.594,9.195v5.28l-7.618,1.693A15.646,15.646,0,0,0,1,66.506V89H89V63.269a14.833,14.833,0,0,0-2.5-8.254Zm-.339,8.254v7.28H80.484V64.871H77.645v21.29H67.133a16.7,16.7,0,0,0-13.7-8.483,14.256,14.256,0,0,0,4.3-5.161l.211.211a7.048,7.048,0,0,0,5.017,2.078h6.714l-1.844-5.531a8.505,8.505,0,0,0-5.4-5.389l.126-.38a17.136,17.136,0,0,0,.2-10.269,8.315,8.315,0,0,0,2.112.28,8.214,8.214,0,0,0,5.849-2.423l.341-.341,4.553.569A12.041,12.041,0,0,1,86.161,63.269ZM26.6,56.995c-.02.346-.053.69-.053,1.042,0,.064.007.128.007.193l-4.7,1.881-1.866-7.467,1.851-.412Zm3.643,9.3h.562a14.155,14.155,0,0,0,.4,3.274l-1.157,1.157a4.286,4.286,0,0,1-3.01,1.246H24.259l.6-1.8a5.669,5.669,0,0,1,5.386-3.882Zm.562-4.583v1.744h-.4l-.281-.843A14.455,14.455,0,0,1,43.843,43.581h2.314A14.458,14.458,0,0,1,59.872,62.607l-.282.845h-.4V63a7.139,7.139,0,0,0-6.508-7.073l-7.86-.654a2.906,2.906,0,0,1-.677-5.653l1.3-.434-.9-2.693-1.3.434a5.736,5.736,0,0,0-3.929,5.449c0,.158.007.315.02.47l-2.359.674a8.554,8.554,0,0,0-6.177,8.188Zm9.935-35.159a2.839,2.839,0,1,1,0,5.677Zm-.084,8.516h.084a5.667,5.667,0,0,0,5.635-5.257l.043-.085V40.755c-.088,0-.175-.013-.263-.013H43.843a17.184,17.184,0,0,0-6.13,1.143,12.709,12.709,0,0,0,2.945-6.82Zm24.213,7.1a9.946,9.946,0,0,1-9.935-9.935V27.6a8.466,8.466,0,0,1,4.224-7.354,9.91,9.91,0,0,0,8.55,4.885h4.258a2.842,2.842,0,0,1,2.839,2.839v4.258a9.946,9.946,0,0,1-9.935,9.935Zm0,2.839a12.7,12.7,0,0,0,3.289-.446l.847,4.237-.294.294a5.565,5.565,0,0,1-7.684,0l-.26-.26c-.011-.017-.021-.035-.031-.053l.845-4.22A12.639,12.639,0,0,0,64.871,45ZM59.194,66.29h.562a5.669,5.669,0,0,1,5.386,3.882l.6,1.8H62.965a4.286,4.286,0,0,1-3.01-1.246L58.8,69.565a14.155,14.155,0,0,0,.4-3.274ZM33.645,61.707a5.7,5.7,0,0,1,4.118-5.459l2.515-.718a5.766,5.766,0,0,0,4.311,2.57l7.86.654A4.283,4.283,0,0,1,56.355,63V66.29a11.355,11.355,0,0,1-22.71,0ZM52.511,80.484a13.882,13.882,0,0,1,11.226,5.677H26.263a13.882,13.882,0,0,1,11.226-5.677Zm6.682-68.129h.588l.416-.416a8.217,8.217,0,0,1,5.851-2.423A14.453,14.453,0,0,1,80.484,23.952V49.822A14.9,14.9,0,0,0,75.966,48.5l-4.227-.529-.894-4.468a12.775,12.775,0,0,0,6.8-11.281V27.968a5.683,5.683,0,0,0-5.677-5.677H67.71a7.1,7.1,0,0,1-7.1-7.1H57.774a9.841,9.841,0,0,0,.3,2.4,11.3,11.3,0,0,0-5.975,10v4.629a12.779,12.779,0,0,0,6.8,11.282l-.471,2.355a17.258,17.258,0,0,0-9.168-4.827V22.29a9.946,9.946,0,0,1,9.935-9.935ZM41.107,15.416a8.416,8.416,0,0,0,1.933-3.01A11.669,11.669,0,0,1,45.186,25.84l-.018.035a5.646,5.646,0,0,0-4.426-2.166H39.6l-4.083-1.634a2.956,2.956,0,0,1-1.868-2.758,2.705,2.705,0,0,1,5.271-.856L39.4,19.9l2.693-.9-.48-1.438a5.562,5.562,0,0,0-.942-1.707ZM15,11.121l1.162-.466.246-.41A13.267,13.267,0,0,1,27.728,3.839h7.408A5.606,5.606,0,0,1,39.1,13.409l-.752.752A5.493,5.493,0,0,0,30.9,18.353L27.36,19.365a39.1,39.1,0,0,1-10.747,1.506,1.419,1.419,0,1,1,0-2.839h1.419V15.194H16.613a4.248,4.248,0,0,0-1.419,8.255v.261a5.654,5.654,0,0,0-4.075,1.74L9.963,21.985A8.731,8.731,0,0,1,15,11.121ZM12.355,29.387a2.842,2.842,0,0,1,2.839-2.839v5.677A2.842,2.842,0,0,1,12.355,29.387Zm5.677,4.258V23.66a41.942,41.942,0,0,0,10.107-1.566l3-.857a5.771,5.771,0,0,0,3.317,3.475L37.9,26.09v7.555a9.935,9.935,0,1,1-19.871,0Zm9.935,12.774A12.7,12.7,0,0,0,31.54,45.9a17.277,17.277,0,0,0-4.377,7.64L23.71,50.09V45.674A12.684,12.684,0,0,0,27.968,46.419ZM7.59,57.449A12.785,12.785,0,0,1,13.868,54l3.345-.744,2.674,10.695,6.958-2.783a17.146,17.146,0,0,0,.59,2.335l.126.38a8.505,8.505,0,0,0-5.4,5.389l-1.842,5.531h6.714a7.051,7.051,0,0,0,5.017-2.078l.211-.211a14.27,14.27,0,0,0,4.3,5.161,16.7,16.7,0,0,0-13.7,8.483H12.355V66.29H9.516v5.677H3.839V66.506A12.723,12.723,0,0,1,7.59,57.449ZM3.839,74.806H9.516V86.161H3.839ZM80.484,86.161V73.387h5.677V86.161Z"
                                  fill="#fff"></path>
                        </g>
                    </svg>

                    <br><br><span style="font-size: 25px;">Ota-onalarga</span></p>
            </a>
            <a class="card text-bg-black mr-3" href=""
               style="height: 300px;width: 33%; background-image: url({{asset('assets/img/parents/l-3.jpg')}})">
                <p class="bg-dark pt-5 m-4 text-white text-center" style="opacity: 65%; height: 100%;width: 87%">
                    <svg class="card-icon" xmlns="http://www.w3.org/2000/svg" width="77.677" height="86"
                         viewBox="0 0 77.677 86">
                        <g id="ebook" transform="translate(-32 -8)">
                            <path id="Контур_57" data-name="Контур 57"
                                  d="M225.387,466.774h8.323a1.387,1.387,0,1,0,0-2.774h-8.323a1.387,1.387,0,1,0,0,2.774Z"
                                  transform="translate(-158.71 -376.935)" fill="#fff"></path>
                            <path id="Контур_58" data-name="Контур 58"
                                  d="M108.29,28.806h-2.774V26.032a1.387,1.387,0,0,0-.949-1.316,55.642,55.642,0,0,0-8.761-2.16v-9.7A4.86,4.86,0,0,0,90.952,8H50.726a4.86,4.86,0,0,0-4.855,4.855v9.7a55.644,55.644,0,0,0-8.761,2.16,1.387,1.387,0,0,0-.948,1.316v2.774H33.387A1.387,1.387,0,0,0,32,30.194V80.129a1.387,1.387,0,0,0,1.387,1.387H45.871v7.629A4.86,4.86,0,0,0,50.726,94H90.952a4.86,4.86,0,0,0,4.855-4.855V81.516H108.29a1.387,1.387,0,0,0,1.387-1.387V30.194A1.387,1.387,0,0,0,108.29,28.806Zm-5.548-1.765V74.076a52.692,52.692,0,0,0-30.516,0V27.419a1.4,1.4,0,0,0-.049-.362A50.078,50.078,0,0,1,102.742,27.041ZM77.384,10.774l-.694,2.774h-11.7l-.694-2.774ZM48.645,12.855a2.082,2.082,0,0,1,2.081-2.081H61.432l1.125,4.5A1.387,1.387,0,0,0,63.9,16.323H77.774a1.387,1.387,0,0,0,1.345-1.051l1.125-4.5H90.952a2.082,2.082,0,0,1,2.081,2.081v9.326a52.96,52.96,0,0,0-22.194,2.391,52.96,52.96,0,0,0-22.194-2.391Zm-9.71,14.187a50.078,50.078,0,0,1,30.565.016,1.4,1.4,0,0,0-.049.362V74.08a52.653,52.653,0,0,0-30.516,0Zm54.1,62.1a2.082,2.082,0,0,1-2.081,2.081H50.726a2.082,2.082,0,0,1-2.081-2.081V81.516H93.032Zm13.871-10.4H34.774V31.581h1.387V75.968a1.387,1.387,0,0,0,1.826,1.316,50.2,50.2,0,0,1,32.413,0,1.381,1.381,0,0,0,.877,0,50.2,50.2,0,0,1,32.413,0,1.367,1.367,0,0,0,.439.071,1.387,1.387,0,0,0,1.387-1.387V31.581H106.9Z"
                                  fill="#fff"></path>
                        </g>
                    </svg>
                    <br><br><span style="font-size: 25px;">Elektron kutubxona</span></p>
            </a>
        </div>
    </div>

    <!--====== CATEGORY PART ENDS ======-->
    <!--====== ABOUT PART START ======-->

{{--    <section id="about-part" class="pt-65">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="section-title mt-50">--}}
{{--                        <h5>Biz haqimizda</h5>--}}
{{--                        <h2>Maktab ramzlari</h2>--}}
{{--                    </div> <!-- section title -->--}}
{{--                    <div class="about-cont">--}}
{{--                        <p>Maktab fizika va matematika sohasida kadrlar tayyorlash bo‘yicha milliy--}}
{{--                            va xalqaro maydonda imidjini oshirish maqsadida o‘zining ramzlari, shu jumladan madhiyasi,--}}
{{--                            bayrog‘i va emblemasiga ega.--}}
{{--                        </p><br>--}}
{{--                        <h2>Maktab madhiyasi</h2>--}}
{{--                        <p>Kuch olamiz maktab ilmidan<br>--}}
{{--                            Vatan, bizning shahdimizga boq...<br>--}}
{{--                            Fizik qonun, hisob bilmidan <br>--}}
{{--                            Olayapmiz mukammal saboq... <br><br>--}}

{{--                            Kel, tengdoshim, safimizda tur <br>--}}
{{--                            Zamon ko‘rsin ilm-fan kuchin. <br>--}}
{{--                            Egallaymiz dunyo sirlarin <br>--}}
{{--                            Ona yurtning ertasi uchun... <br><br>--}}

{{--                            Bobom qo‘li yetgandi ko‘kka - <br>--}}
{{--                            Bugun dunyo qilgaydir ta’zim. <br>--}}
{{--                            Fizika ham matematika, <br>--}}
{{--                            Al-Jabrning yurti - Xorazm! <br>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div> <!-- about cont -->--}}
{{--                <div class="col-lg-6 offset-lg-1">--}}
{{--                    <div class="about-event mt-50">--}}
{{--                        <div class="event-title">--}}
{{--                            <h3>Maktab emblemasi</h3>--}}
{{--                        </div> <!-- event title -->--}}
{{--                        <img src="{{asset('fasset/images/emblem.png')}}" alt="Emblema"><br>--}}
{{--                        <div class="event-title">--}}
{{--                            <h3>Maktab bayrog'i</h3>--}}
{{--                        </div> <!-- event title -->--}}
{{--                        <img src="{{asset('fasset/images/flag.png')}}" alt="Bayroq">--}}
{{--                    </div> <!-- about event -->--}}
{{--                </div>--}}
{{--            </div> <!-- row -->--}}
{{--        </div> <!-- container -->--}}
{{--        <div class="about-bg">--}}
{{--            <img src="{{asset('fasset/images/about/bg-1.png')}}" alt="About">--}}
{{--        </div>--}}
{{--    </section>--}}

    <!--====== ABOUT PART ENDS ======-->


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
                                <img style="width: 100%; height: 208px; object-fit: cover;" src="{{asset('/storage/posts/' . $new->img)}}" alt="News">


                            </div>
                            <div class="news-cont">
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> {{$new->created_at->format('d.m.Y')}}
                                        </a></li>
                                </ul>
                                <a href="{{route('news-item' , $new->id)}}"><h3>{{$new->header}}</h3></a>
                                <p style="text-align: justify; text-justify: inter-word;">{{ \Illuminate\Support\Str::limit($new->description, 150, '...') }}</p>
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

