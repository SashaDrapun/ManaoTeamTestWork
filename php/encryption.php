<?php
    function randomSalt($length=32)
    {
        $chars = "abcdefghijkmnopqrstuvwxyz023456789";
        srand((double)microtime()*1000000);
        $i = 1;
        $salt = '' ;

        while ($i <= $length)
        {
            $num = rand() % 33;
            $tmp = substr($chars, $num, 1);
            $salt .= $tmp;
            $i++;
        }
        return $salt;
    } 

    function hashPassword($password,$salt)
    {
        return md5($salt.$password);
    }
?>