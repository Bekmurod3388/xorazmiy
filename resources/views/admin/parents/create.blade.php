@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Ota-Ona qo'shish<h1></div>
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


                    <form action="{{route('admin.parent.store')}}" method="POST" accept-charset="UTF-8"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="header">Ismi</label>
                            <input type="text" name="name" class="form-control" id="header" placeholder="Ismi ">
                        </div>
                        <div class="form-group">
                            <label for="surname">Familyasi</label>
                            <input type="text" name="surname" class="form-control" id="surname" placeholder="Familiya ">
                        </div>
                        <div class="form-group">
                            <label for="description">Telefon number</label>
                            <input type="text" class="form-control" name="tel" id="description" placeholder="Telfon">
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
