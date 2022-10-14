@extends('layouts.layout')
@section('content')

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-0 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('fasset/images/slide1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>To'garaklar</h2>

                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    <!--====== TEACHERS PART START ======-->

    <section id="teachers-singel" class="pt-70 pb-120 gray-bg">
        <div class="container">
            @foreach($circle as $new)
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="{{asset('/images/'.$new->img)}}" alt="Rasm">
                        </div>
                    </div> <!-- teachers left -->
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">

                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="singel-dashboard pt-40">
                                        <h5>{{$new->name}} to'garak</h5>
                                        <p>{{$new->description}}</p>
                                    </div> <!-- singel dashboard -->
                                    <div class="singel-dashboard pt-40">
                                        <h6>To'garak o'qituvchisi: {{$new->teacher}}</h6>
                                    </div> <!-- singel dashboard -->
{{--                                    <div class="singel-dashboard pt-40">--}}
{{--                                        --}}
{{--                                    </div> <!-- singel dashboard -->--}}
                                </div> <!-- dashboard cont -->
                            </div>

                        </div>
                    </div> <!-- tab content -->
                </div> <!-- teachers right -->
            </div>
            @endforeach
        </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== EVENTS PART ENDS ======-->
    <x-layouts.footer></x-layouts.footer>

@endsection
