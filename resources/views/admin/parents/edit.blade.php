@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Tahrirlash</h1></div>
                </div>
                <h1>
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


                    <form action="{{route('admin.parent.update',$parent)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="header">Ismi</label>
                            <input type="text" name="name" class="form-control" placeholder="Ismi" value="{{$parent->name}}">
                        </div>
                        <div class="form-group">
                            <label for="header">Familya</label>
                            <input type="text" name="surname" class="form-control" placeholder="Familya" value="{{$parent->surname}}">
                        </div>
                        <div class="form-group">
                            <label for="img">O'qituvchi</label>
                            <input type="text" name="tel" class="form-control" value="{{$parent->phone}}">
                        </div>
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
                </h1></div>
        </div>
    </div>

@endsection
@section('script')

@endsection

