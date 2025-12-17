@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Faxriyni tahrirlash</h1></div>
                </div>
                <hr>
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form action="{{route('admin.veteran.update',$posts)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Ismi sharifi (UZ)</label>
                            <input type="text" name="name_uz" class="form-control" value="{{ $posts->name_uz }}">
                        </div>
                        <div class="form-group">
                            <label>ФИО (RU)</label>
                            <input type="text" name="name_ru" class="form-control" value="{{ $posts->name_ru }}">
                        </div>
                        <div class="form-group">
                            <label>Full name (EN)</label>
                            <input type="text" name="name_en" class="form-control" value="{{ $posts->name_en }}">
                        </div>

                        <div class="form-group">
                            <label>Faxriy haqida (UZ)</label>
                            <textarea class="form-control" name="desc_uz" rows="10">{{ $posts->desc_uz }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Описания (RU)</label>
                            <textarea class="form-control" name="desc_ru" rows="10">{{ $posts->desc_ru }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Description (EN)</label>
                            <textarea class="form-control" name="desc_en" rows="10">{{ $posts->desc_en }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="img">Rasm qo'shish</label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')

@endsection
