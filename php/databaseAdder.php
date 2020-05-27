<?php

function addUser($currentUser){
    require_once 'user.php';
    require 'database.php';
    require 'encryption.php';

    $newUser = $doc->addChild('user');
    $newUser->addChild('name',$currentUser->name);
    $newUser->addChild('email',$currentUser->email);
    $newUser->addChild('login',$currentUser->login);
    
    $salt = randomSalt();// получаем рандомную соль
    $hashedPassword = hashPassword($currentUser->password,$salt);//получаем хэшированный пароль

    $newUser->addChild('password',$hashedPassword);// сохраняем хэшированный пароль и соль
    $newUser->addChild('salt',$salt);
    saveXML($doc);
}

function saveXML($doc){
    $dom = new DOMDocument('1.0');
    $dom->preserveWhiteSpace = false;
    $dom->formatOutput = true;
    $dom->loadXML($doc->asXML());
    $dom->save('database.xml');
}
?>