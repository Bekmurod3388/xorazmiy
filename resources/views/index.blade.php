@extends('layouts.layout')

@section('custom_css')
   <style>
       .news-card {
           border-radius: 8px;
           overflow: hidden;
           box-shadow: 0 0 15px rgba(0,0,0,0.05);
           display: flex;
           flex-direction: column;
           height: 100%; /* Kartochka ustun bo'yi to'liq cho'ziladi */
       }

       /* Rasm sozlamalari - ENG MUHIM QISMI */
       .news-img-wrapper {
           width: 100%;
           height: 200px; /* Barcha rasmlar aniq 200px bo'ladi */
       }

       .news-img-wrapper img {
           width: 100%;
           height: 100%;
           object-fit: cover; /* Rasm cho'zilmaydi, ortiqchasi qirqib tashlanadi */
           object-position: center;
       }

       /* Matn qismi */
       .news-body {
           padding: 20px;
           display: flex;
           flex-direction: column;
           flex-grow: 1; /* Bo'sh joyni egallaydi */
       }

       .news-title {
           font-size: 18px;
           font-weight: bold;
           color: #333;
           margin-bottom: 10px;
           display: block;
           line-height: 1.3;
       }

       .news-desc {
           font-size: 14px;
           color: #666;
           margin-bottom: 15px;
       }

       .read-more-link {
           color: #007bff;
           text-decoration: none;
           font-weight: 600;
       }

       /* Agar sarlavha juda uzun bo'lsa ham buzilmasligi uchun */
       .news-title {
           display: -webkit-box;
           -webkit-line-clamp: 2; /* 2 qatordan oshsa kesadi */
           -webkit-box-orient: vertical;
           overflow: hidden;
       }
    /* SANA */
    .date-badge {
    position: absolute;
    top: 15px;
    right: 15px;
    background: rgba(0, 0, 0, 0.65);
    backdrop-filter: blur(4px); /* Orqa fonni xira qilish */
    color: #fff;
    padding: 6px 14px;
    border-radius: 50px;
    font-size: 13px;
    font-weight: 500;
    z-index: 2;
    }

    /* TEXT QISMI (BODY) */


    /* BATAFSIL TUGMASI BLOKI */
    .read-more-wrapper {
    margin-top: auto; /* Eng muhim qism: tugmani pastga itaradi */
    padding-top: 15px;
    border-top: 1px solid #eee; /* Ajratib turish uchun chiziqcha */
    }

    .read-more-link {
    font-size: 14px;
    font-weight: 600;
    color: #007bff;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    transition: margin-left 0.3s;
    }

    .read-more-link:hover {
    margin-left: 5px; /* Hoverda o'ngga siljish */
    text-decoration: none;
    }
    </style>
@endsection

@section('content')

    {{-- SLIDER --}}
    <section id="slider-part" class="slider-active">
        <div class="single-slider bg_cover pt-150 pb-150 d-flex align-items-center"
             style="background-image: url({{ asset('images/img1.jpg') }}); min-height: 600px;" data-overlay="4">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">{{ __('home.slider.title_1') }}</h1>
                            <p class="text-white mt-3 mb-4 lead" data-animation="fadeInUp" data-delay="1.3s">{{ __('home.slider.subtitle_1') }}</p>
                            <a data-animation="fadeInUp" data-delay="1.6s"
                               class="btn btn-primary btn-lg rounded-pill px-5 shadow"
                               href="#about-part">{{ __('home.slider.btn_more') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slider bg_cover pt-150 pb-150 d-flex align-items-center"
             style="background-image: url({{ asset('images/img2.jpg') }}); min-height: 600px;" data-overlay="4">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">{{ __('home.slider.title_2') }}</h1>
                            <a data-animation="fadeInUp" data-delay="1.6s"
                               class="btn btn-warning btn-lg rounded-pill px-5 shadow mt-4"
                               href="{{ route('contact', ['locale' => app()->getLocale()]) }}">{{ __('home.slider.btn_join') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-slider bg_cover pt-150 pb-150 d-flex align-items-center"
             style="background-image: url({{ asset('images/img3.jpg') }}); min-height: 600px;" data-overlay="4">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-xl-7 col-lg-9">
                        <div class="slider-cont">
                            <h1 data-animation="bounceInLeft" data-delay="1s">{{ __('home.slider.title_3') }}</h1>
                            <a data-animation="fadeInUp" data-delay="1.6s"
                               class="btn btn-primary btn-lg rounded-pill px-5 shadow mt-4"
                               href="#category-part">{{ __('home.slider.btn_courses') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- CATEGORY --}}
    <section id="category-part" class="pt-80 pb-80 bg-light">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h5>{{ __('home.category.kicker') }}</h5>
                        <h2>{{ __('home.category.title') }}</h2>
                    </div>
                </div>
                <div class="col-lg-7 text-lg-right d-none d-lg-block">
                    <p class="text-muted">{{ __('home.category.desc') }}</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="creative-card text-center p-4">
                        <div class="icon-box"><i class="fa fa-laptop"></i></div>
                        <h5 class="font-weight-bold">{{ __('home.category.c1_title') }}</h5>
                        <p class="text-muted small">{{ __('home.category.c1_desc') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="creative-card text-center p-4">
                        <div class="icon-box"><i class="fa fa-bolt"></i></div>
                        <h5 class="font-weight-bold">{{ __('home.category.c2_title') }}</h5>
                        <p class="text-muted small">{{ __('home.category.c2_desc') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="creative-card text-center p-4">
                        <div class="icon-box"><i class="fa fa-bolt"></i></div>
                        <h5 class="font-weight-bold">{{ __('home.category.c3_title') }}</h5>
                        <p class="text-muted small">{{ __('home.category.c3_desc') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="creative-card text-center p-4">
                        <div class="icon-box"><i class="fa fa-cogs"></i></div>
                        <h5 class="font-weight-bold">{{ __('home.category.c4_title') }}</h5>
                        <p class="text-muted small">{{ __('home.category.c4_desc') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="creative-card text-center p-4">
                        <div class="icon-box"><i class="fa fa-calculator"></i></div>
                        <h5 class="font-weight-bold">{{ __('home.category.c5_title') }}</h5>
                        <p class="text-muted small">{{ __('home.category.c5_desc') }}</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="creative-card text-center p-4">
                        <div class="icon-box"><i class="fa fa-user-circle"></i></div>
                        <h5 class="font-weight-bold">{{ __('home.category.c6_title') }}</h5>
                        <p class="text-muted small">{{ __('home.category.c6_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ABOUT --}}
    <section id="about-part" class="pt-80 pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <div class="section-title mb-4">
                        <h5>{{ __('home.about.kicker') }}</h5>
                        <h2>{{ __('home.about.title') }}</h2>
                    </div>

                    <div class="about-cont">
                        <p class="lead text-muted mb-4">{{ __('home.about.lead') }}</p>

                        <div class="symbol-card">
                            <h5 class="font-weight-bold">
                                <i class="fa fa-quote-left mr-2 text-primary"></i> {{ __('home.about.motto_title') }}
                            </h5>
                            <p class="mb-0">"{{ __('home.about.motto_text') }}"</p>
                        </div>

                        <div class="mt-4">
                            <h4 class="mb-3">{{ __('home.about.anthem_title') }}</h4>
                            <div class="anthem-box position-relative">
                                <i class="fa fa-music position-absolute" style="right: 20px; top: 20px; font-size: 40px; color: #eee;"></i>
                                <p class="mb-2">{{ __('home.about.anthem_1') }}</p>
                                <p class="mb-2">{{ __('home.about.anthem_2') }}</p>
                                <p class="mb-2">{{ __('home.about.anthem_3') }}</p>
                                <p class="mb-0">{{ __('home.about.anthem_4') }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <div class="row">

                        <div class="col-12 text-center">
                            <div class="bg-white p-4 shadow rounded">
                                <h5 class="mb-3">{{ __('home.about.building_title') }}</h5>
                                <img src="{{ asset('images/img3.jpg') }}" alt="Bino" class="img-fluid rounded" style="width: 100%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- VIDEO FEATURE --}}
    <section id="video-feature" class="bg_cover"
             style="background-image: url({{ asset('fasset/images/school1.jpg') }}); background-attachment: fixed;">
        <div class="video-overlay">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center">
                        <div class="video-box mb-5 mb-lg-0">
                            <a class="Video-popup d-inline-block"
                               href="https://www.youtube.com/watch?v=your_video_id"
                               style="width: 80px; height: 80px; background: #fff; color: #007bff; border-radius: 50%;
                               line-height: 80px; font-size: 30px; box-shadow: 0 0 0 10px rgba(255,255,255,0.2); animation: pulse 2s infinite;">
                                <i class="fa fa-play"></i>
                            </a>
                            <h4 class="mt-4 text-white">{{ __('home.video.title') }}</h4>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="feature pl-lg-5">
                            <div class="feature-title mb-4">
                                <h3 class="font-weight-bold">{{ __('home.video.advantages_title') }}</h3>
                            </div>

                            <div class="feature-item">
                                <div class="icon"><i class="fa fa-graduation-cap"></i></div>
                                <div class="cont">
                                    <h4>{{ __('home.video.f1_title') }}</h4>
                                    <p>{{ __('home.video.f1_desc') }}</p>
                                    <a href="#" class="btn btn-warning btn-sm rounded-pill mt-2">{{ __('home.video.btn_read_more') }}</a>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="icon"><i class="fa fa-users"></i></div>
                                <div class="cont">
                                    <h4>{{ __('home.video.f2_title') }}</h4>
                                    <p>{{ __('home.video.f2_desc') }}</p>
                                </div>
                            </div>

                            <div class="feature-item">
                                <div class="icon"><i class="fa fa-book"></i></div>
                                <div class="cont">
                                    <h4>{{ __('home.video.f3_title') }}</h4>
                                    <p>{{ __('home.video.f3_desc') }}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- NEWS --}}
    <section id="news-part" class="pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title pb-30">
                        <h5>{{ __('home.news.kicker') }}</h5>
                        <h2>{{ __('home.news.title') }}</h2>
                    </div>
                </div>
                <div class="col-lg-6 text-right d-none d-lg-block">
                    <a href="{{ route('news', ['locale' => app()->getLocale()]) }}"
                       class="btn btn-outline-secondary rounded-pill">{{ __('home.news.all') }}</a>
                </div>
            </div>
            <div class="row">
                @foreach($posts as $new)
                    <!-- d-flex align-items-stretch: Kartochkalarni bir xil balandlikda bo'lishini ta'minlaydi -->
                    <div class="col-lg-4 col-md-6 mb-4 d-flex align-items-stretch">
                        <div class="news-card bg-white w-100"> <!-- w-100 eniga to'liq bo'lishi uchun -->

                            <!-- Rasm qismi -->
                            <div class="news-img-wrapper">
                                <img src="{{ asset('/storage/posts/' . $new->img) }}" alt="News Image">
                            </div>

                            <!-- Tana qismi -->
                            <div class="news-body">
                                <!-- Sana -->
                                <div class="text-muted small mb-2">
                                    <i class="fa fa-calendar-alt mr-1"></i> {{ $new->created_at->format('d.m.Y') }}
                                </div>

                                <!-- Sarlavha -->
                                <a href="{{ route('news-item', ['locale' => app()->getLocale(), 'post' => $new->id]) }}" class="news-title">
                                    {{ $new->header }}
                                </a>

                                <!-- Tavsif -->
                                <p class="news-desc">
                                    {{ \Illuminate\Support\Str::limit($new->description, 100, '...') }}
                                </p>

                                <!-- Tugma (Eng pastda turadi) -->
                                <div class="mt-auto pt-3">
                                    <a href="{{ route('news-item', ['locale' => app()->getLocale(), 'post' => $new->id]) }}"
                                       class="read-more-link">
                                        {{ __('home.news.read_more') }} <i class="fa fa-angle-right ml-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>

    {{-- PARTNERS --}}
    <div id="patnar-logo" class="pt-60 pb-60 bg-white border-top">
        <div class="container">
            <h4 class="text-center mb-5 text-muted">{{ __('home.partners.title') }}</h4>

            <div class="row justify-content-center align-items-center">
                <div class="col-6 col-md-4 col-lg-2 text-center partner-item">
                    <a href="http://uzedu.uz" target="_blank">
                        <img src="{{ asset('fasset/images/uzedu.png') }}" class="img-fluid" style="max-height: 80px;" alt="UzEdu">
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center partner-item">
                    <a href="http://xorazmvxtb.uz/" target="_blank">
                        <img src="{{ asset('fasset/images/xorazm.png') }}" class="img-fluid" style="max-height: 80px;" alt="Xorazm Vxtb">
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center partner-item">
                    <a href="http://ziyonet.uz" target="_blank">
                        <img src="{{ asset('fasset/images/ziyonet.png') }}" class="img-fluid" style="max-height: 80px;" alt="ZiyoNet">
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center partner-item">
                    <a href="https://lex.uz/ru/" target="_blank">
                        <img src="{{ asset('fasset/images/lex.png') }}" class="img-fluid" style="max-height: 80px;" alt="LexUz">
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center partner-item">
                    <a href="https://eyuf.uz/" target="_blank">
                        <img src="{{ asset('fasset/images/el.jpg') }}" class="img-fluid" style="max-height: 80px;" alt="Eyuf">
                    </a>
                </div>

                <div class="col-6 col-md-4 col-lg-2 text-center partner-item">
                    <a href="https://mininnovation.uz/" target="_blank">
                        <img src="{{ asset('fasset/images/min.png') }}" class="img-fluid" style="max-height: 80px;" alt="MinInnovation">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <x-layouts.footer></x-layouts.footer>
@endsection
