@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
            <h1 style="text-align: center;font-weight: bold;margin-bottom: 5px;color: #0d6efd">
                المستشفيات
            </h1>
            <center>
                <br>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">Address</th>
                        <th scope="col">الاجراءات</th>

                    </tr>
                    </thead>
                    <tbody>
                    @if(isset($hospital) && $hospital -> count() > 0)
                        @foreach($hospital as $hospitals)
                            <tr>
                                <th scope="row">{{$hospitals -> id}}</th>
                                <td>{{$hospitals -> name}}</td>
                                <td>{{$hospitals -> address}}</td>
                                <td>
                                    <button class="btn btn-success">
                                        <a style="color: red" href="{{route('hospitals.doctors',$hospitals -> id)}}">
                                            عرض الاطباء
                                            </a>
                                    </button>
                                    <button class="btn btn-danger">
                                        <a style="color: green" href="{{route('hospitals.deleteHospital',$hospitals -> id)}}">
                                            حذف المستشفى
                                        </a>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif

                    </tbody>
                </table>
            </center>
        </div>
    </div>
@stop


