<?php

function isEmailUnique($email){
    require 'database.php';
    if($doc){
        foreach ($doc->user as $user) {
            if($user->email == $email){
                return false;
            }
         }
         return true;
    }
  
    return false;
}

function isLoginUnique($login){
    require 'database.php';
    if($doc){
        
        foreach ($doc->user as $user) {
            if($user->login == $login){
                return false;
            }
         }
         return true;
    }
    return false;
}

function findSaltByEmail($email){
    require 'database.php';
    if($doc){
        foreach ($doc->user as $user) {
            if($user->email == $email){
                return $user->salt;
            }
         }
    }
    return false;
}

function findPasswordByEmail($email){
    require 'database.php';
    if($doc){
        foreach ($doc->user as $user) {
            if($user->email == $email){
                return $user->password;
            }
         }
    }
    return false;
}

function findNameByEmail($email){
    require 'database.php';
   
    if($doc){
        foreach ($doc->user as $user) {
            if($user->email == $email){
                return $user->name;
            }
         }
    }
    return false;
}


?>