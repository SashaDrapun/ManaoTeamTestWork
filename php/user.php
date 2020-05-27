<?php
class User{

    function __construct($name,$email,$login,$password) {
        $this->name = $name;
        $this->email = $email;
        $this->login = $login;
        $this->password = $password;
    }

    public $name;
    public $email;
    public $login;
    public $password;
    public $salt;
}
?>