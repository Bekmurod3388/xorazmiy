@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">To'garak qo'shish<h1></div>
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


                    <form action="{{route('admin.circle.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header">Nomi</label>
                            <input type="text" name="name" class="form-control" id="header" placeholder="To'garak nomi">
                        </div>
                        <div class="form-group">
                            <label for="header">Tekst</label>
                            <textarea rows="5" cols="10" name="description" class="form-control" placeholder="Tekst"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">O'qituvchi</label>
                            <input type="text" class="form-control" name="teacher" id="description" placeholder="O'qituvchi nomi">
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
