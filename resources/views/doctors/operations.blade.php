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
                    <th style="text-align: center" scope="col">اسم الخدمة</th>
                </tr>
                </thead>
                <tbody>

                @if(isset($operations) && $operations -> count() > 0)
                    @foreach($operations as $operation)
                        <tr>
                            <th style="text-align: center" scope="row">{{$operation->id}}</th>
                            <td style="text-align: center">{{$operation->name}}</td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
            <br><br><br>
            <form method="POST" action="{{route('doctors.services.save')}}" >
                @csrf
                {{--<input name="_token" value="{{csrf_token()}}">--}}
                <center>
                    <div class="mb-3" style="width:50%">
                        <label for="exampleInputEmail1" class="form-label">اختر طبيب</label>
                        <select  class="form-control" name="doctor_id" >
                            @if(isset($doctors) && $doctors -> count() > 0)
                                @foreach($doctors as $doctor)
                            <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="mb-3" style="width:50%">
                        <label for="exampleInputPassword1" class="form-label">اختر خدمة</label>
                        <select  class="form-control" name="service_id[]" multiple>
                            @if(isset($services) && $services -> count() > 0)
                                @foreach($services as $service)
                                    <option value="{{$service->id}}">{{$service->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                    <button id="save-offer" class="btn btn-primary">{{__('messages.Save')}}</button>
                </center>
            </form>
        </div>
    </div>
@stop


