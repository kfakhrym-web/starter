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
                    <th style="text-align: center" scope="col">#</th>
                    <th style="text-align: center" scope="col">الاسم</th>
                    <th style="text-align: center" scope="col">الوظيفة</th>
                    <th style="text-align: center" scope="col">التخصص</th>
                </tr>
                </thead>
                <tbody>

                @if(isset($doctors) && $doctors -> count() > 0)
                    @foreach($doctors as $doctor)
                        <tr>
                            <th style="text-align: center" scope="row">{{$doctor -> id}}</th>
                            <td style="text-align: center">{{$doctor -> name}}</td>
                            <td style="text-align: center">{{$doctor -> title}}</td>
                            <td style="text-align: center">
                            <button class="btn btn-success">
                                <a style="color: blue" href="{{route('doctors.services',$doctor -> id)}}">
                                    عرض التخصصات
                                </a>
                            </button>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop


