<?php

class LoginModel extends Model{

    public function login($username, $password){
        $result = self::query("SELECT * FROM `users` where `username`='$username' AND `password`='$password'
        ");

        if(self::existRows($result)){
            die("Logged in");
        }
        else{
            die("Not Logged in");
        }
    } 
}
?>
