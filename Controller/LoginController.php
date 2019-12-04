<?php

class LoginController extends Controller{

	public static function renderView(){
		parent::createView('login');
	}
	public static function processLogin($data){
		$username = $data['username'];
		$password = $data['password'];
		//echo $username." ".$password;

		LoginModel::login($username, $password);
	}
}

?>
