@extends('layouts.layout')
@section('content')
<!--====== SEARCH BOX PART ENDS ======-->

<!--====== PAGE BANNER PART START ======-->
<div class="conatiner" style="margin: 50px 100px">
<h1 style="text-align:center; margin: 20px auto">Texnikum tuzilmasi</h1>
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">FIO</th>
      <th scope="col">Tug'ilgan kuni</th>
      <th scope="col">Tug'ilgan joyi</th>
      <th scope="col">Vazifasi</th>
      <th scope="col">Nomer</th>
      <th scope="col">Rasmi</th>
    </tr>
  </thead>
  <tbody>
  <tr>
      <th scope="row">Saidniyazova Zamira  </th>
      <td>31.08.1968</td>
      <td>Xorazm viloyati, Urganch tumani</td>
      <td><b>Urganch tumani ko'p tarmoqli texnikumi direktori</b> </td>
      <td>+ 998 (97)363-55-75 </td>
      <td><img src="{{asset('teacher_image/direktor.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Yo'ldasheva Muhayyo </th>
      <td>01.09.1981</td>
      <td>Xorazm viloyati, Urganch tumani</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi o'quv va tarbiyaviy ishlari bo'yicha direktor o'rinbosari </td>
      <td>+ 998(93)337-81-10 </td>
      <td><img src="{{asset('teacher_image/M.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Ro'zimova Xolida  </th>
      <td>21.10.1989</td>
      <td>Xorazm viloyati, Urganch tumani</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi kasbiy ta'lim bo'yicha direktor o'rinbosari</td>
      <td>+ 998(93)756-87-77  </td>
      <td><img src="{{asset('teacher_image/x.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Qurbonboyev Qahramon</th>
      <td>03.08.1972</td>
      <td>Xorazm viloyati, Urganch tumani</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi moliya-iqtisod ishlari bo'yicha direktor o'rinbosari </td>
      <td>+ 998 (93)109-79-26 </td>
      <td><img src="{{asset('teacher_image/q.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Matyakubova Ilmira </th>
      <td>24.06.1996</td>
      <td>Xorazm viloyati, Urganch tumani</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi maxsus fan o'qtuvchisi </td>
      <td>+ 998(77)085-72-72 </td>
      <td><img src="{{asset('teacher_image/ilmira.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Otajanova Sevinchoy </th>
      <td>04.08.1998</td>
      <td>Xorazm viloyati,Xonqa tumani</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi maxsus fan o'qtuvchisi</td>
      <td>+ 998(99)528-04-98 </td>
      <td><img src="{{asset('teacher_image/sevinch.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Atamuratova Mashxura </th>
      <td >18.08.1991</td>
      <td>Xorazm viloyati, Urganch tumani</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi maxsus fan o'qtuvchisi</td>
      <td>+ 998(97)221-33-42 </td>
      <td><img src="{{asset('teacher_image/mashxura.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Aniyazova Dinora </th>
      <td >19.08.1989</td>
      <td>Xorazm viloyati, Urganch tumani</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi maxsus fan o'qtuvchisi</td>
      <td>+ 998(93)468-12-15 </td>
      <td><img src="{{asset('teacher_image/dinara.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Samandarov Murod </th>
      <td >12.08.1973</td>
      <td>Xorazm viloyati, Urganch tumani</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi maxsus fan o'qtuvchisi</td>
      <td>+ 998(93)305-17-35 </td>
      <td><img src="{{asset('teacher_image/murod.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Saidjanova Sanobar </th>
      <td >13.07.1983</td>
      <td>Xorazm viloyati, Urganch shaxri</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi ingliz tili o'qtuvchisi</td>
      <td>+ 998(97)515-70-79 </td>
      <td><img src="{{asset('teacher_image/Sanobar.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
    <tr>
      <th scope="row">Eshanova Gulbaxor </th>
      <td >15.04.1978</td>
      <td>Xorazm viloyati, Urganch shaxri</td>
      <td>Urganch tumani ko'p tarmoqli texnikumi bo'lim boshlig'i</td>
      <td>+ 998(94)585-79-97 </td>
      <td><img src="{{asset('teacher_image/gulbaxor.png')}}" width=" 80px" alt="rasmlar">    </td>
    </tr>
  </tbody>
</table>
</div>
<!--====== EVENTS PART ENDS ======-->
<x-layouts.footer></x-layouts.footer>
@endsection
