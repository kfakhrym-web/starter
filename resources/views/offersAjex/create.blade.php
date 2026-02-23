@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
           <h1 style="text-align: center;font-weight: bold;margin-bottom: 5px;color: #0d6efd">
            {{__('messages.Add your offer')}}
           </h1>
        </div>

        @if(Session::has('success'))
            <div class="alert alert-success" style="width:50%;margin-left:25%;margin-right:25%" role="alert">
                {{Session::get('success')}}
            </div>
        @endif

        <form method="POST" id="offerId" action="" enctype="multipart/form-data" >
            @csrf
            {{--<input name="_token" value="{{csrf_token()}}">--}}
            <center>
                <div class="alert alert-success" id="success-msg" style="display: none">
                    تم الحفظ بنجاح
                </div>

                <div class="mb-3" style="width:50%">
                    <label for="exampleInputEmail1" class="form-label">{{__('messages.add photo')}}</label>
                    <input type="file" class="form-control" name="photo">
                    @error('photo')
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3" style="width:50%">
                    <label for="exampleInputEmail1" class="form-label">{{__('messages.offer name ar')}}</label>
                    <input type="text" class="form-control" name="name_ar" placeholder="{{__('messages.offer name ar')}}">
                    @error('name_ar')
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3" style="width:50%">
                    <label for="exampleInputEmail1" class="form-label">{{__('messages.offer name en')}}</label>
                    <input type="text" class="form-control" name="name_en" placeholder="{{__('messages.offer name en')}}">
                    @error('name_en')
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3" style="width:50%">
                    <label for="exampleInputPassword1" class="form-label">{{__('messages.offer price')}}</label>
                    <input type="text" class="form-control" name="price" placeholder="{{__('messages.offer price')}}">

                    @error('price')
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror

                </div>
                <div class="mb-3" style="width:50%">
                    <label for="exampleInputPassword1" class="form-label">{{__('messages.offer details ar')}}</label>
                    <input type="text" class="form-control" name="details_ar" placeholder="{{__('messages.offer details ar')}}">

                    @error('details_ar')
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3" style="width:50%">
                    <label for="exampleInputPassword1" class="form-label">{{__('messages.offer details en')}}</label>
                    <input type="text" class="form-control" name="details_en" placeholder="{{__('messages.offer details en')}}">

                    @error('details_en')
                    <div class="form-text text-danger">{{$message}}</div>
                    @enderror
                </div>
                <button id="save-offer" class="btn btn-primary">{{__('messages.Save')}}</button>
            </center>
        </form>
    </div>
@stop
@section('scripts')
 <script>
     $(document).on('click','#save-offer',function (e) {
         e.preventDefault();
         var formData = new FormData($('#offerId')[0]);
         $.ajax({
             type: 'post',
             enctype: 'multipart/form-data',
             url: "{{Route('ajex.offers.save')}}",
             data: formData,
             processData:false,
             contentType:false,
             cache:false,
             success: function (data) {
                 if(data.status === true)
                    $('#success-msg').show();
             },
             error: function (reject) {
             }
         });
     });
 </script>
@stop

