<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            <div class="content">
                <div class="title m-b-md">
                    Add your offer
                </div>

         @if(Session::has('success')){
                <div class="alert alert-success" style="width:50%;margin-left:25%;margin-right:25%" role="alert">
                {{Session::get('success')}}
                </div>
            }
         @endif

    <form method="POST" action="{{url('offers\store')}}">
        @csrf
        {{--<input name="_token" value="{{csrf_token()}}">--}}
        <center>
         <div class="mb-3" style="width:50%">
                <label for="exampleInputEmail1" class="form-label">offer name</label>
                <input type="text" class="form-control" name="name" placeholder="Offer name">
                @error('name')
                <div class="form-text text-danger">{{$message}}</div>
                @enderror
         </div>
            <div class="mb-3" style="width:50%">
                    <label for="exampleInputPassword1" class="form-label">offer price</label>
                    <input type="text" class="form-control" name="price" placeholder="offer price">
                @error('price')
                <div class="form-text text-danger">{{$message}}</div>
                @enderror
            </div>
          <div class="mb-3" style="width:50%">
                <label for="exampleInputPassword1" class="form-label">offer details</label>
                <input type="text" class="form-control" name="details" placeholder="offer details">
                @error('details')
                <div class="form-text text-danger">{{$message}}</div>
                @enderror
         </div>
                <button type="submit" class="btn btn-primary">save offer</button>
                </center>
    </form>
            </div>
    </body>
</html>
