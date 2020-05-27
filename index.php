<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RegistrationAndAutorization</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<?php 

if(!isset($_SESSION['userName'])){
    echo '<body>
    <form method="post" action="" id="ajax_form">
        <h1>ДОБРО <br> ПОЖАЛОВАТЬ !</h1>
        <p id="text">Введите имя, почту, пароль и <br>
        придумайте логин <br>
        для регистрации</p>

        <input id="name" class="inputs" type="text"  name="name" placeholder="Введите имя"/>
        <p class="hidden" id="nameErrors"></p>

        <input id="email" class="inputs" name="email" placeholder="Введите почту"/>
        <p class="hidden" id="emailErrors"></p>

        <input id="login" class="inputs" name="login" placeholder="Введите логин" />
        <p class="hidden" id="loginErrors"></p>

        <input class="inputs" type="password"  name="password" placeholder="Введите пароль" />
        <p class="hidden" id="passwordErros"></p>
        
        <input id="confirmPassword" class="inputs" type="password"  name="confirmPassword"
         placeholder="Повторите пароль"/>
         <p class="hidden" id="confirmPasswordErrors"></p>

        <div id="result_form"></div> 
        <input id="registrationOrAutorization"
         class="hidden" value="Регистрация" name="registrationOrAutorization"/>
        <p class="hidden" id="successfulRegistration">Регистрация прошла успешно</p>
        <p class="hidden" id="successfulAutorization">Авторизация прошла успешно</p>
        <div id="SwitchButtonsContainer">
            <button id="Registration">Регистрация</button>
            <button id="Autorization">Авторизация</button>
        </div>

        <div id="submit-Container">
            <button id="submit" name="submit" type="submit">Зарегистрироваться</button>
        </div>
    </form>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/ajax.js"></script>
    <script src="js/index.js"></script>
</body>
</html>';
} 
else{
    echo "<p id='greeting'>Hello ".$_SESSION['userName']."</p>";
}
?>


