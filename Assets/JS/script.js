document.addEventListener("DOMContentLoaded", function() {
    const btnSignIn = document.getElementById("sign-in");
    const btnSignUp = document.getElementById("sign-up");
    const containerFormRegister = document.querySelector(".register");
    const containerFormLogin = document.querySelector(".login");

    if (btnSignIn && btnSignUp) {  // Asegúrate de que los botones existen
        btnSignIn.addEventListener("click", function() {
            containerFormRegister.classList.add("hide");
            containerFormLogin.classList.remove("hide");
        });

        btnSignUp.addEventListener("click", function() {
            containerFormLogin.classList.add("hide");
            containerFormRegister.classList.remove("hide");
        });
    } else {
        console.error("Los elementos sign-in o sign-up no se encontraron.");
    }
});



//const btnlogin= document.getElementById("log"),
//      btnregister = document.getElementById("reg"),
//      containerFormRegister = document.querySelector(".register"),
//      containerFormLogin = document.querySelector(".login");

//btnlogin.addEventListener("click", e => {
//    containerFormRegister.classList.add("hide");
//    containerFormLogin.classList.remove("hide")
//})


//btnregister.addEventListener("click", e => {
//    containerFormLogin.classList.add("hide");
//    containerFormRegister.classList.remove("hide")
//})