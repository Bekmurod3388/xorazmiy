@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Yangilik qo'shish<h1></div>
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


                    <form action="{{route('admin.posts.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Sarlavha (UZ)</label>
                            <input type="text" name="header_uz" class="form-control" placeholder="Sarlavha (UZ)">
                        </div>
                        <div class="form-group">
                            <label>Заголовок (RU)</label>
                            <input type="text" name="header_ru" class="form-control" placeholder="Заголовок (RU)">
                        </div>
                        <div class="form-group">
                            <label>Title (EN)</label>
                            <input type="text" name="header_en" class="form-control" placeholder="Title (EN)">
                        </div>

                        <div class="form-group">
                            <label>Matn (UZ)</label>
                            <textarea class="form-control" name="description_uz" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Текст (RU)</label>
                            <textarea class="form-control" name="description_ru" rows="6"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Text (EN)</label>
                            <textarea class="form-control" name="description_en" rows="6"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="img">Rasm qo'shish</label>
                            <input type="file" name="img" class="form-control" id="img">
                        </div>



                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
@section('script')

@endsection
