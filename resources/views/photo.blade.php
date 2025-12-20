@extends('layouts.layout')
@section('css')
<style>
.gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    }

    .gallery-item {
    width: 100%;
    }

    .gallery-item img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    object-fit: cover;
    }
</style>
@endsection
@section('content')
    <div class="container">
        <div class="gallery" id="gallery">
            @foreach($photos as $photo)
                <div class="gallery-item">
                    <div class="content">
                        <img src="{{ asset('/storage/photo/' . $photo->image) }}" alt="">
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="{{ asset('fasset/js/gallery.js') }}"></script>
@endsection
