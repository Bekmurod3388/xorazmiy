@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">To'garakni tahrirlash</h1></div>
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


                    <form action="{{route('admin.circle.update',$circle)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="header">Nomi</label>
                            <input type="text" name="name" class="form-control" placeholder="Nomi" value="{{$circle->name}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Tekst</label>
                            <textarea  class="form-control"  name="description" id="description" rows="10">{{ $circle->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="img">O'qituvchi</label>
                            <input type="text" name="teacher" class="form-control" value="{{$circle->teacher}}">
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
