<?php

class RegisterModel extends Model{

	public function register($username, $email, $phone, $password){

		if(self::existRows(self::query("SELECT * FROM `users` WHERE `username`='$username'")))
			// User already exist.
			die("User already exists");

		self::query("INSERT INTO `users` (`username`, `email`, `phoneNo`, `password`) 
			     VALUES ('$username', '$email', '$phone', '$password')";
    } 
}
?>
