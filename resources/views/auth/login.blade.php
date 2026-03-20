<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/toastr.css')}}">
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
</head>
<body>
    <div class="loginContainer">
        <div class="loginForm">
            <div class="loginData">
                <div class="logo">
                    <p>Digitic.</p>
                </div>
                <div class="EmailContainer form-floating mb-3">
                    <input type="email" class="form-control" id="loginEmail" placeholder="name@example.com">
                    <label for="loginEmail">Email address</label>
                </div>
                <div class="PasswordContainer form-floating mb-3">
                    <input type="password" class="form-control" id="loginPass" placeholder="">
                    <label for="loginPass">Password</label>
                </div>
                <div class="ButtonContainer">
                    <a id="loginButton" href=""><button class="btn btn-outline-dark">Login</button></a>
                    <a href="register.html">I have Not an Account</a>
                </div>
            </div>
        </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="{{asset('js/toaster.js')}}"></script>
    <script src="{{asset('js/login.js')}}"></script>
</body>
</html>
