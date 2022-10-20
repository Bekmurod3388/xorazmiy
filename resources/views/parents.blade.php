@extends('layouts.layout')
@section('content')
    <style>
        .grid-item { width: 500px; }
        .grid-item--width2 { width: 400px; }
    </style>

    <div class="container mr-7 mb-5 ">
        <div class="row justify-content-center grid">
            @foreach($parents as $key =>$j)
            <div class=" border grid-item">

                <div class="card">
                    <h5 class="card-header">{{$j->title}}</h5>
                    <div class="card-body">

                        <p class="card-text">{{\Illuminate\Support\Str::limit($j->text,100)}}</p>


                    </div>
                </div>
            </div>
            @endforeach



        </div>

{{--        <div class="grid row">--}}
{{--            <div class="grid-item p-3 border">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam assumenda atque autem corporis cum dolores esse ex excepturi explicabo illo impedit ipsa laboriosam natus nihil nisi, numquam officia omnis praesentium, quam quidem quis repellat repudiandae ut vel vero vitae voluptates. Ab, beatae dolor dolorem error eveniet ex, excepturi ipsum laudantium optio recusandae, sequi soluta. Alias assumenda autem consequatur, culpa, debitis doloremque doloribus et harum hic incidunt maiores minus odio optio qui quos repellat voluptatibus! Alias aspernatur at distinctio expedita fugiat minima quos repellendus ullam! Autem, cupiditate debitis doloremque excepturi explicabo ipsa magni nam natus nihil, quae quaerat, quisquam quo.</div>--}}
{{--            <div class="grid-item grid-item--width2 p-3 border">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur, deserunt.</div>--}}
{{--            <div class="grid-item p-3 border">Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab ad aspernatur, atque autem delectus ducimus, exercitationem facere fugiat hic impedit nostrum placeat praesentium repudiandae veritatis voluptatem voluptatum. Ab doloribus ex ipsam labore libero, mollitia natus neque nesciunt nihil obcaecati optio quos ratione soluta totam, ullam. Fuga ipsum modi quidem.</div>--}}
{{--        </div>--}}

    </div>



    <script src="https://npmcdn.com/masonry-layout@4.0/dist/masonry.pkgd.js"></script>
    <x-layouts.footer></x-layouts.footer>
    <script>
        // $('.grid').masonry({
        //     // options
        //     itemSelector: '.grid-item',
        //     columnWidth: 200
        // });
        var elem = document.querySelector('.grid');
        var msnry = new Masonry( elem, {
            // options
            itemSelector: '.grid-item',
            columnWidth: 500
        });
        // element argument can be a selector string
        //   for an individual element
        var msnry = new Masonry( '.grid', {
            // options
        });
    </script>
@endsection

