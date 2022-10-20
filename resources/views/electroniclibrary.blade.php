@extends('layouts.layout')
@section('content')

    <!--====== SEARCH BOX PART ENDS ======-->

    <!--====== PAGE BANNER PART START ======-->

    <section id="page-banner" class="pt-0 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('fasset/images/slide1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2><br>Elektron kutubxona</h2>

                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->

    @foreach($library as $new)
        <div class="container mb-5 d-flex" style="margin-top: 130px">

            <a href="{{route('download',$new->file)}}" class="btn btn-info">yuklab olish</a>
            <div class="container p-2">
                <h2 class="mb-3">
                    {{$new->title}}
                </h2>
                <p class="mb-5">{{$new->description}}</p>

            </div>

        </div>
    @endforeach
    <x-layouts.footer></x-layouts.footer>

@endsection
