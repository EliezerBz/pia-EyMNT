document.addEventListener("DOMContentLoaded", () => {
    const btnlogin = document.getElementById("log"),
          btnregister = document.getElementById("reg"),
          containerFormRegister = document.querySelector(".register"),
          containerFormLogin = document.querySelector(".login");

    btnlogin.addEventListener("click", e => {
        containerFormRegister.classList.add("hide");
        containerFormLogin.classList.remove("hide");
    });

    btnregister.addEventListener("click", e => {
        containerFormLogin.classList.add("hide");
        containerFormRegister.classList.remove("hide");
    });
});
