<?php


use PHPUnit\Framework\TestCase;

require_once "Login.php";


class loginTest extends TestCase{
    public function testlogin(){

        $log = new Login();

        $email = "nilaa3794@gmail.com";
        $password ="12345";

        $login = $log->LoginSystem($email,$password);

        $this->assertTrue($login);
    }

}

?>
