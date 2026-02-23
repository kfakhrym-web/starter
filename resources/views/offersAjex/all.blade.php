@extends('layouts.app')
@section('content')
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                 @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li class="nav-item">
                        <a rel="alternate" hreflang="{{ $localeCode }}" class="nav-link active" aria-current="page" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">{{ $properties['native'] }}</a>
                    </li>
                 @endforeach
                </ul>

                    @if(Session::has('success'))
                     <div style="text-align: center" class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('error'))
                        <div style="text-align: center" class="alert alert-danger">{{Session::get('error')}}</div>
                    @endif

                <form class="d-flex" role="search">

                    <div class="alert alert-success" id="success-msg" style="display: none">
                        تم الحذف بنجاح
                    </div>

                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                </div>
            </div>
            </nav>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th style="text-align: center" scope="col">{{__('messages.offer name')}}</th>
                    <th style="text-align: center" scope="col">{{__('messages.offer price')}}</th>
                    <th style="text-align: center" scope="col">{{__('messages.offer details')}}</th>
                    <th style="text-align: center" scope="col">{{__('messages.display image')}}</th>
                    <th style="text-align: center" scope="col">{{__('messages.operation')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach($offers as $offer)
                    <tr class="offerRow{{$offer->id}}">
                        <th style="text-align: center" class="align-middle" scope="row">{{$offer->id}}</th>
                        <td style="text-align: center" class="align-middle">{{$offer->name}}</td>
                        <td style="text-align: center" class="align-middle">{{$offer->price}}</td>
                        <td style="text-align: center" class="align-middle">{{$offer->details}}</td>
                            <td>
                                <center>
                                <img src="{{ asset('images/offers/'.$offer->photo) }}" width="70" />
                                </center>
                            </td>
                        <td style="text-align: center" class="align-middle">
                        <a href="{{url('offers/edit/'.$offer->id)}}" class="btn btn-success">{{__('messages.update')}}</a>
                            &nbsp;
                        <a href="{{url('offers/delete/'.$offer->id)}}" class="btn btn-danger">{{__('messages.delete')}}</a>

                        <a href="" offer_id="{{$offer->id}}" class=" delete-ajax btn btn-danger">Delete using ajax</a>
                        <a href="{{route('ajax.offers.edit',$offer->id)}}" class="btn btn-success">update using ajax</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
@stop

@section('scripts')
    <script>
        $(document).on('click','.delete-ajax',function (e) {
            e.preventDefault();
        var offer_id = $(this).attr('offer_id');
            $.ajax({
                type: 'post',
                url: "{{Route('ajax.offers.delete')}}",
                data: {
                    '_token':"{{csrf_token()}}",
                    'id':offer_id
                },
                success: function (data) {
                    if (data.status === true)
                        $('#success-msg').show();
                $('.offerRow'+data.id).remove();

                },
                error: function (reject) {
                }
            });
        });
    </script>
@stop

