<?php

class Users extends spModel{
	var $pk = "id";
	var $table = "user";

	public function getNickname($email){
		return $this->find(['email'	=>	$email])['username'];
	}

	public function getUserData($email, $password){

		return $this->find(['email'	=>	$email, 'password'	=>	$password]);
	}
}