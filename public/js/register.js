let nameInput = document.getElementById("registerName");
let emailInput = document.getElementById("registerEmail");
let passInput = document.getElementById("registerPass");
let rePassInput = document.getElementById("rePassReg");
let phoneInput = document.getElementById("registerPhone");
let regButton = document.getElementById("regButton");

regButton.addEventListener("click", function(e){
    registeration();
    e.preventDefault();
})

async function registeration(){
    let userData = 
    {
        name: nameInput.value,
        email: emailInput.value,
        password: passInput.value,
        rePassword: rePassInput.value,
        phone: phoneInput.value
    }
    let response = await fetch("https://ecommerce.routemisr.com/api/v1/auth/signup",
    {
        method: "POST",
        headers: {"content-type": "application/json"},
        body: JSON.stringify(userData),
    })

    let finalResponse = await response.json();

    if(finalResponse.message == "success"){
        toastr["success"]("Registeration Successful")
        setTimeout(()=>{
            window.location.href = "login.html";
        }, 2000)
    }
    else{
        toastr["error"]("Something Went Wrong")
        console.log(finalResponse.errors)
    }
}


toastr.options = {
  "closeButton": true,
  "progressBar": true,
  "positionClass": "toast-top-right",
  "timeOut": "1000"
}   