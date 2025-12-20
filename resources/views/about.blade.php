@extends('layouts.layout')

@section('content')
    <!--====== PAGE BANNER PART START ======-->
    <section id="page-banner" class="pt-105 pb-110 bg_cover" data-overlay="8"
             style="background-image: url({{ asset('texnikum_img/aa.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>{{ __('about.banner.title') }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== ABOUT PART START ======-->
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="section-title mt-50">
                        <h2>{{ __('about.sections.institution.title') }}</h2>
                    </div>
                    <div class="about-cont">
                        <p align="justify">
                            {!! nl2br(__('about.sections.institution.text')) !!}
                        </p>
                    </div>

                    <div class="section-title mt-50">
                        <h2>{{ __('about.sections.mission.title') }}</h2>
                    </div>
                    <div class="about-cont">
                        <p align="justify">
                            {!! nl2br(__('about.sections.mission.text')) !!}
                        </p>
                    </div>

                    <div class="section-title mt-50">
                        <h2>{{ __('about.sections.finance.title') }}</h2>
                    </div>
                    <div class="about-cont">
                        <p align="justify">
                            {!! nl2br(__('about.sections.finance.text')) !!}
                        </p>
                    </div>

                    <div class="about-cont">
                        <p align="justify">
                            {!! nl2br(__('about.sections.text1.text')) !!}
                        </p>
                    </div>

                    <div class="about-cont">
                        <p align="justify">
                            {!! nl2br(__('about.sections.text2.text')) !!}
                        </p>
                    </div>

                </div>
            </div>

            <div class="about-items pt-60">
                <div class="row justify-content-center">

                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>01</span>
                            <h4>{{ __('about.cards.c1_title') }}</h4>
                            <p>{{ __('about.cards.c1_desc') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>02</span>
                            <h4>{{ __('about.cards.c2_title') }}</h4>
                            <p>{{ __('about.cards.c2_desc') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>03</span>
                            <h4>{{ __('about.cards.c3_title') }}</h4>
                            <p>{{ __('about.cards.c3_desc') }}</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <!--====== ABOUT PART ENDS ======-->

    <!--====== COUNTER PART START ======-->
    <div id="counter-part" class="bg_cover pt-65 pb-110" data-overlay="8"
         style="background-image: url({{ asset('fasset/images/about1.jpg') }})">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">365</span>+</span>
                        <p>{{ __('about.counters.c1') }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">143</span>+</span>
                        <p>{{ __('about.counters.c2') }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">145</span>+</span>
                        <p>{{ __('about.counters.c3') }}</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="singel-counter text-center mt-40">
                        <span><span class="counter">77</span>+</span>
                        <p>{{ __('about.counters.c4') }}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--====== COUNTER PART ENDS ======-->

    <!--====== PARTNERS (logo slider) ======-->
    <div id="patnar-logo" class="pt-40 pb-80 gray-bg">
        <div class="container">
            <div class="row patnar-slied">
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="http://uzedu.uz"><img src="{{ asset('fasset/images/uzedu.png') }}" width="150px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="http://xorazmvxtb.uz/"><img src="{{ asset('fasset/images/xorazm.png') }}" width="150px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="http://ziyonet.uz"><img src="{{ asset('fasset/images/ziyonet.png') }}" width="150px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="https://lex.uz/ru/"><img src="{{ asset('fasset/images/lex.png') }}" width="150px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="https://eyuf.uz/"><img src="{{ asset('fasset/images/el.jpg') }}" width="150px" alt="Logo"></a>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="singel-patnar text-center mt-40">
                        <a href="https://mininnovation.uz/"><img src="{{ asset('fasset/images/min.png') }}" width="150px" alt="Logo"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-layouts.footer></x-layouts.footer>
@endsection
