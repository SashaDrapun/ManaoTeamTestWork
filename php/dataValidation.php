<?php
function isRegistrationDataCorrect($user,$confirmPassword){
    require_once 'databaseHandler.php';
    $result = array();
    if($user->name == ''){
        $result['name'] = "Заполните поле";
    }

    if($user->email == ''){
        $result['email'] = "Заполните поле";
    }
    else if(!isEmailUnique($user->email)){
        $result['email'] = "Пользователь с такой почтой уже существует";
    }


    if($user->login == ''){
        $result['login'] = "Заполните поле";
    }
    else if(!isLoginUnique($user->login)){
        $result['login'] = "Пользователь с таким логином уже существует";
    }

    if($user->password == ''){
        $result['password'] = "Заполните поле";
    }

    if($confirmPassword == ''){
        $result['confirmPassword'] = "Заполните поле";
    }
    else if($user->password != $confirmPassword){
        $result['confirmPassword'] = "Пароли не совпадают";
    }

    if(count($result) == 0){
        return true;
    }
    else{
        return $result;
    }
}

function isAutorizationDataCorrect($email,$password){
    require_once 'databaseHandler.php';

    $result = array();
    if($email == ''){
        $result['email'] = "Заполните поле";
    }
    else if(isEmailUnique($email)){
        $result['email'] = "Пользователя с такой почтой не существует";
    }

    if($password == ''){
        $result['password'] = "Заполните поле";
    }
    else if(!isPasswordCorrect($email,$password)){
        $result['password'] = "Пароль введен неверно";
    }

    if(count($result) == 0){
        return true;
    }
    else{
        return $result;
    }
}

function isPasswordCorrect($email, $password){
    require_once 'databaseHandler.php';
    require_once 'encryption.php';
    $salt = findSaltByEmail($email);
    $hashedPassword = findPasswordByEmail($email);
    if($salt == false || $hashedPassword == false){
        return false;
    }
    else if(!(hashPassword($password,$salt) == $hashedPassword)){
        return false;
    }
    return true;
}
?>