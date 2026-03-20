<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/toastr.css">
    <link rel="stylesheet" href="CSS/register.css">
</head>
<body>
    <div class="regeserationContainer">
        <div class="signUpForm">
            <div class="signUpData">
                <div class="Logo">
                    <p>Digitic.</p>
                </div>
                <div class="nameContainer form-floating mb-3">
                    <input type="text" class="form-control" id="registerName" placeholder="name@example.com">
                    <label for="registerName">Name</label>
                </div>
                <div class="EmailContainer form-floating mb-3">
                    <input type="email" class="form-control" id="registerEmail" placeholder="name@example.com">
                    <label for="registerEmail">Email address</label>
                </div>
                <div class="PasswordContainer form-floating mb-3">
                    <input type="password" class="form-control" id="registerPass" placeholder="">
                    <label for="registerPass">Password</label>
                </div>
                <div class="EmailContainer form-floating mb-3">
                    <input type="password" class="form-control" id="rePassReg" placeholder="name@example.com">
                    <label for="rePassReg">RePassword</label>
                </div>
                <div class="PhoneContainer form-floating mb-3">
                    <input type="text" class="form-control" id="registerPhone" placeholder="">
                    <label for="registerPhone">Phone</label>
                </div>
                <div class="ButtonContainer">
                    <a id="regButton" href=""><button class="btn btn-outline-dark">Register</button></a>
                    <a href="login.html">I have an Account</a>
                </div>
            </div>
        </div>
    </div>
    <script
    src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
    crossorigin="anonymous"></script>
    <script src="js/toastr.js"></script>
    <script src="js/register.js"></script>
</body>
</html>