@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1 style="text-align: center;font-weight: bold;margin-bottom: 5px;color: #0d6efd">
                الاطباء
            </h1>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                    <th scope="col">title</th>
                </tr>
                </thead>
                <tbody>

                @if(isset($doctors) && $doctors -> count() > 0)
                    @foreach($doctors as $doctor)
                        <tr>
                            <th scope="row">{{$doctor -> id}}</th>
                            <td>{{$doctor -> name}}</td>
                            <td>{{$doctor -> title}}</td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>
    </div>
@stop


