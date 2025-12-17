@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Faxriy qo'shish<h1></div>
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


                    <form action="{{route('admin.veteran.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Ismi Sharifi (UZ)</label>
                            <input type="text" name="name_uz" class="form-control" placeholder="FIO (UZ)">
                        </div>
                        <div class="form-group">
                            <label>ФИО (RU)</label>
                            <input type="text" name="name_ru" class="form-control" placeholder="ФИО (RU)">
                        </div>
                        <div class="form-group">
                            <label>Full name (EN)</label>
                            <input type="text" name="name_en" class="form-control" placeholder="Full name (EN)">
                        </div>

                        <div class="form-group">
                            <label>Faxriy haqida batafsil (UZ)</label>
                            <textarea class="form-control" name="desc_uz" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Подробно (RU)</label>
                            <textarea class="form-control" name="desc_ru" rows="8"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Details (EN)</label>
                            <textarea class="form-control" name="desc_en" rows="8"></textarea>
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
