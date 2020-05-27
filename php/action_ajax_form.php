<?php
session_start();
require_once 'user.php';
require 'account.php';

$email =  $_POST["email"];
$password =  $_POST["password"];

if($_POST["registrationOrAutorization"] === 'Регистрация'){

    $name = $_POST["name"];
    $login =  $_POST["login"];
    $confirmPassword =  $_POST["confirmPassword"];
    $currentUser = new User($name,$email,$login,$password);
    registration($currentUser,$confirmPassword);
}
else{
    autorization($email,$password);
}

?>