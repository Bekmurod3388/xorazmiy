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

    @foreach($circle as $new)
    <div class="container mb-5 d-flex" style="margin-top: 130px">

        <div class="container" >
            <img src="{{asset('/images/'.$new->img)}}">
        </div>
        <div class="container p-2">
            <h2 class="mb-3">
                {{$new->name}} to'garak
            </h2>
            <p class="mb-5">{{$new->description}}</p>
            <h6>To'garak o'qituvchisi: {{$new->teacher}}</h6>
        </div>

    </div>
    @endforeach
    <x-layouts.footer></x-layouts.footer>

@endsection
