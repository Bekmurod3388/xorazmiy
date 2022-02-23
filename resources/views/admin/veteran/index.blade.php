@extends('admin.master')

@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Faxriy o'qituvchilar</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.veteran.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                                Faxriy qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ismi</th>
                            <th scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $new)
                            <tr>
                                <th scope="row" class="col-1">{{$new->id}}</th>
                                <td>{{$new->name}}</td>
                                <td class="col-2">
                                    <form action="{{ route('admin.veteran.destroy',$new->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.veteran.edit',$new->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
