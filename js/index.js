document.querySelector("#Registration").addEventListener("click",OnRegistrationClick);
document.querySelector("#Autorization").addEventListener("click",OnAutorizationClick);

function OnRegistrationClick(event){
    event.preventDefault();
     document.querySelector("#text").innerHTML = "Введите имя почту, пароль и <br>"+
     "придумайте логин <br>"+
     "для регистрации</p>";
     document.querySelector("#Registration").style.color = "white";
     document.querySelector("#Autorization").style.color = "rgb(247,147,30)";
     $('#name').show(1000);
     $('#login').show(1000);
     $('#confirmPassword').show(1000);
     document.querySelector("#submit").textContent = "Зарегистрироваться";
     document.querySelector("#registrationOrAutorization").value = "Регистрация";
}

function OnAutorizationClick(event){
    event.preventDefault();
    document.querySelector("#Registration").style.color = "rgb(247,147,30)";
    document.querySelector("#Autorization").style.color = "white";
    document.querySelector("#text").innerHTML = "Введите email и пароль <br>"+
    "для авторизации";
    $('#name').hide(1000);
    $('#login').hide(1000);
    $('#confirmPassword').hide(1000);
    document.querySelector("#submit").textContent = "Авторизоваться";
    document.querySelector("#registrationOrAutorization").value = "Авторизация";
}
