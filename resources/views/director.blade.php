@extends('layouts.layout')

@section('content')
    <div class="container" >
        <h1 style="text-align:center; margin: 20px auto">{{ __('structure.title') }}</h1>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">{{ __('structure.table.fio') }}</th>
                    <th scope="col">{{ __('structure.table.birthdate') }}</th>
                    <th scope="col">{{ __('structure.table.position') }}</th>
                    <th scope="col">{{ __('structure.table.contacts') }}</th>
                    <th scope="col">{{ __('structure.table.photo') }}</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <th scope="row">Saidniyazova Zamira</th>
                    <td>31.08.1968</td>
                    <td><b>{{ __('structure.positions.director') }}</b></td>
                    <td>+998 (97) 363-55-75 <br> zamira@urgtex3.uz</td>
                    <td><img src="{{ asset('teacher_image/direktor.png') }}" width="80px" alt="photo"></td>
                </tr>

                <tr>
                    <th scope="row">Yo'ldasheva Muhayyo</th>
                    <td>01.10.1981</td>
                    <td>{{ __('structure.positions.deputy_education') }}</td>
                    <td>+998 (93) 337-81-10 <br> muhayyo@urgtex3.uz</td>
                    <td><img src="{{ asset('teacher_image/M.png') }}" width="80px" alt="photo"></td>
                </tr>

                <tr>
                    <th scope="row">Qurbonboyev Qahramon</th>
                    <td>03.08.1972</td>
                    <td>{{ __('structure.positions.deputy_finance') }}</td>
                    <td>+998 (93) 109-79-26 <br> qahramon@urgtex3.uz</td>
                    <td><img src="{{ asset('teacher_image/q.png') }}" width="80px" alt="photo"></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <x-layouts.footer></x-layouts.footer>
@endsection
