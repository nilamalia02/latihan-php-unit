<?php

class Login{
    public function LoginSystem($email,$pass)
    {
        $emaill="nilaa3794@gmail.com";
        $passs ="12345";
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            if($email == $emaill && $pass == $passs){
                return true;
            }else{
                return false;
            }
        }
    }
}

?>