<?php

class user extends spController{
	
	public function signin(){
		$this->display('user/signin.html');
	}


	public function signin_post(){
		$user = spClass('Users')->find(['email'	=>	$this->spArgs('email'),
										'password'	=>	$this->spArgs('password')]);
		if ($user != NULL){
			$_SESSION['user'] = $user;
			$this->success('Signin success', spUrl());
		}else {
			$this->error('Signin Error');
		}
	}

	public function signup(){
		$this->display('user/signup.html');
	}

	public function signup_post(){
		if (spClass('Users')->find(array('email'	=>	$this->spArgs('email'))) != false)$this->error('existing e-mail');
		if (spClass('Users')->find(array('username'	=>	$this->spArgs('username'))) != false)$this->error('existing username!');
		$signUser = spClass('Users')->create(array('username'	=>	$this->spArgs('username'),
											'email'		=>	$this->spArgs('email'),
											'password'	=>	$this->spArgs('password')));
		($signUser != false) ? $this->success('SignUp Successful,Please signin', spUrl('user', 'signin')) : $this->error("SignUp Error!");
		// dump($this->spArgs());
	}

	public function logout(){
		$_SESSION['user'] = '';
	}
}
