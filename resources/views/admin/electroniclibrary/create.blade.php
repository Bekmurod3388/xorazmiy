@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Elektron kitob qo'shish<h1></div>
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


                    <form action="{{route('admin.electroniclibrary.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header">Sarlavha</label>
                            <input type="text" name="title" class="form-control" id="header" placeholder="Sarlavha">
                        </div>
                        <div class="form-group">
                            <label for="header">Tekst</label>
                            <textarea rows="5" cols="10" name="desc" class="form-control" placeholder="Tekst"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="description">Fayl</label>
                            <input type="file" name="file" class="form-control" id="img">
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
