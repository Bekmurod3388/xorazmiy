@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">To'garaklar</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.circle.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            To'garak qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nomi</th>
                            <th scope="col">Tekst</th>
                            <th scope="col">Ustozi</th>
                            <th scope="col">Rasm</th>
                            <th scope="col">Ko'rilgan</th>
                            <th scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($circles as $circle)
                            <tr>
                                <th scope="row" class="col-1">{{$circle->id}}</th>
                                <td>{{$circle->name}}</td>
                                <td>{{$circle->description}}</td>
                                <td>{{$circle->teacher}}</td>
                                <td><img src="{{asset('/images/' . $circle->img)}}" width="100px" alt="Rasm"></td>
                                <td>{{$circle->viewed}}</td>
                                <td class="col-2">
                                    <form action="{{ route('admin.circle.destroy',$circle->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.circle.edit',$circle ->id) }}">
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
