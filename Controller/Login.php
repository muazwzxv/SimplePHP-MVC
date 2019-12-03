<?php

class Login extends Controller{

	public static function processLogin($data){
		$username = $data['username'];
		$password = $data['password'];
		echo $username." ".$password;
	}
}

?>
