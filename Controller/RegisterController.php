<?php

class RegisterController extends Controller{

	public static function renderView(){
		parent::createView('register');
	}

	public static function processRegister($data){

		$username = $data['username'];
		$email = $data['email'];
		$phone = $data['phone'];
		$password = $data['password'];

		RegisterModel::register($username, $email, $phone, $password);
	}
}

?>
