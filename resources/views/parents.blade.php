@extends('layouts.layout')
@section('content')
    <div class="learn_more pt-5">


    </div>
    <section id="page-banner" class="pt-0 pb-130 bg_cover mb-5 mt-5" data-overlay="8" style="background-image: url({{asset('fasset/images/slide1.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>Ota -Onalarga </h2>

                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
<div class="container mb-5 d-flex">
    <div class="container">
        <img src="{{asset('assets/img/fonts/journal.png')}}">
    </div>
    <div class="container p-2">
        <h2 class="mb-3">
            O‘quvchining kundaligi
        </h2>
        <p class="mb-5">Elektron kundalik - bu haqiqiy vaqt rejimida har qanday ta'lim axborotiga kirishdir. Farzandingizning darslar jadvaliga kiritilgan o‘zgartirishlarni, joriy va yakuniy yutuqlarini kuzatib boring.</p>
    </div>

</div>
    <x-layouts.footer></x-layouts.footer>
@endsection

