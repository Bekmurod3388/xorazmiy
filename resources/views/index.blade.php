@extends('layouts.layout')

@section('custom_css')
    <style>
        body { font-family: 'Poppins', sans-serif; color: #555; }
        h1, h2, h3, h4, h5 { font-weight: 700; color: #333; }
        .section-title h5 { color: #007bff; text-transform: uppercase; letter-spacing: 2px; font-weight: 600; font-size: 14px; margin-bottom: 10px; }
        .section-title h2 { font-size: 36px; position: relative; padding-bottom: 20px; }
        .section-title h2::after { content: ''; position: absolute; left: 0; bottom: 0; width: 60px; height: 3px; background: #007bff; }

        .single-slider::before {
            content: ""; position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(90deg, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.3) 100%);
        }
        .slider-cont h1 { color: #fff; font-size: 48px; text-shadow: 2px 2px 10px rgba(0,0,0,0.5); }

        .creative-card {
            background: #fff; border: none; border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08); transition: all 0.3s ease;
            overflow: hidden; margin-bottom: 30px; height: 100%;
        }
        .creative-card:hover { transform: translateY(-10px); box-shadow: 0 15px 35px rgba(0,123,255,0.2); }
        .creative-card .icon-box {
            font-size: 40px; margin-bottom: 20px; color: #007bff;
            background: #f0f8ff; width: 80px; height: 80px; line-height: 80px;
            border-radius: 50%; display: inline-block; transition: all 0.3s;
        }
        .creative-card:hover .icon-box { background: #007bff; color: #fff; }
        .creative-card h5 { font-size: 18px; margin-bottom: 15px; }

        .symbol-card {
            background: #f9f9f9; padding: 25px; border-left: 5px solid #007bff;
            margin-bottom: 20px; border-radius: 5px;
        }
        .anthem-box {
            background: #fff; padding: 30px; border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1); font-style: italic; border: 1px solid #eee;
        }

        .video-overlay { background: rgba(0, 56, 128, 0.85); padding: 80px 0; color: #fff; }
        .feature-item { display: flex; align-items: flex-start; margin-bottom: 30px; }
        .feature-item .icon {
            min-width: 60px; height: 60px; background: rgba(255,255,255,0.2);
            color: #fff; border-radius: 50%; text-align: center; line-height: 60px;
            margin-right: 20px; font-size: 24px;
        }
        .feature-item h4 { color: #fff; font-size: 20px; margin-bottom: 10px; }
        .feature-item p { color: rgba(255,255,255,0.8); }

        .news-card {
            border: none; border-radius: 15px; overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1); margin-bottom: 30px; transition: 0.3s;
        }
        .news-card:hover { transform: scale(1.02); }
        .news-img-wrapper { position: relative; height: 200px; overflow: hidden; }
        .news-img-wrapper img { width: 100%; height: 100%; object-fit: cover; }
        .date-badge {
            position: absolute; top: 15px; right: 15px; background: #ffc107;
            color: #000; padding: 5px 12px; border-radius: 20px; font-weight: bold; font-size: 12px;
        }
        .news-body { padding: 25px; }
        .news-title { font-size: 20px; font-weight: 700; color: #333; display: block; margin-bottom: 10px; }
        .news-title:hover { color: #007bff; text-decoration: none; }

        .partner-item { filter: grayscale(100%); opacity: 0.6; transition: 0.3s; margin-bottom: 30px; }
        .partner-item:hover { filter: grayscale(0%); opacity: 1; transform: scale(1.1); }
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
                    <div class="col-lg-4 col-md-6">
                        <div class="news-card bg-white h-100">
                            <div class="news-img-wrapper">
                                <img src="{{ asset('/storage/posts/' . $new->img) }}" alt="News Image">
                                <span class="date-badge">
                    <i class="fa fa-calendar mr-1"></i> {{ $new->created_at->format('d.m.Y') }}
                </span>
                            </div>

                            <div class="news-body">
                                <a href="{{ route('news-item', ['locale' => app()->getLocale(), 'post' => $new->id]) }}" class="news-title">
                                    {{ \Illuminate\Support\Str::limit($new->header, 50) }}
                                </a>

                                <p class="text-muted small mb-3">
                                    {{ \Illuminate\Support\Str::limit($new->description, 100, '...') }}
                                </p>

                                <a href="{{ route('news-item', ['locale' => app()->getLocale(), 'post' => $new->id]) }}"
                                   class="text-primary font-weight-bold" style="font-size: 14px;">
                                    {{ __('home.news.read_more') }} <i class="fa fa-angle-right ml-1"></i>
                                </a>
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
