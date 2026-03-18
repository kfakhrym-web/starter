let loginEmail = document.getElementById("loginEmail");
let loginPass = document.getElementById("loginPass");
let loginButton = document.getElementById("loginButton");

loginButton.addEventListener("click", function(e){
    login();
    e.preventDefault();
})

async function login(){
    let userData = 
    {
        email: loginEmail.value,
        password: loginPass.value
    };

    let response = await fetch("https://ecommerce.routemisr.com/api/v1/auth/signin", 
        {
            method: "POST",
            headers: {"content-type": "application/json"},
            body: JSON.stringify(userData)
        }
    )

    let finalResponse = await response.json();
    if(finalResponse.message == "success"){
        toastr["success"]("Registeration Successful")
        let token = finalResponse.token;
        localStorage.setItem("token", token)
        console.log(token)
    }
    else{
        toastr["error"]("Something Went Wrong")
    }
}


toastr.options = {
    "closeButton": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "timeOut": "5000"
}