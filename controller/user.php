<?php

class user extends spController{
	
	public function signin(){
		$this->display('user/signin.html');
	}

	public function checkUsername(){
		error_reporting(0);
		$username = $this->spArgs('username');

		$User = spClass("Users");
		if ($User->find(['username' => $username]) != NULL){
			$result = array(
				'status'	=>	1,
				'message'	=>	"<font color='red'>The Username is not empty!</font>",
				);
		}else {
			$result = array(
				'status'	=>	0,
				'message'	=>	"<font color='green'>The Username is Check out!</font>",
				);
		}

		echo json_encode($result);
	}

	public function checkPwd(){
		error_reporting(0);

		if ($this->spArgs('password') != $this->spArgs('apwd')){
			$result = array(
				'status'	=>	1,
				'message'	=>	"<font color='red'>Two password is not preg_match</font>",
				);
		} else {
			$result = array(
				'status'	=>	0,
				'message'	=>	"<font color='green'>Match ok!</font>",
				);
		}
		echo json_encode($result);
	}

	public function checkEmail(){
		error_reporting(0);

		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $this->spArgs('email'))){
			$status 	=	1;
			$message	=	"<font color='red'>NO</font>";
		} else {
			$user = spClass('Users');
			if (!($user->find(['email'	=>	$this->spArgs('email')]))){
				$status = 0;
				$message = "<font color='green'>email is empty</font>";

			} else {
				$status = 1;
				$message = "<font color='red'>the email is be have</font>";				
			} 
		}
		$result = array(
			'status'	=>	$status,	
			'message'	=>	$message,
			);
		echo json_encode($result);
	}

	public function emailGetNickname(){
		error_reporting(0);
		// echo $this->spArgs("email");
		$user = spClass('Users');
		$loginUser = $user->getNickname($this->spArgs('email'));
		if ($loginUser){
			$result = array(
				'status'	=>	0,
				// 'message'	=>	"Does your is ".$loginUser."?",
				'message'	=>	$loginUser,
				);
		} else{
			$result = array(
				'status'	=>	1,
				'message'	=>	"<font color='red'>the email is not register,Do you want to <a href='".spUrl('user', 'signup')."'>Register</a></font>",
				);
		}

		echo json_encode($result);
	}


	public function signin_post(){
		dump($this->spArgs());
		// $user = spClass('Users')->find(['email'	=>	$this->spArgs('email'),
		// 								'password'	=>	$this->spArgs('password')]);
		$user = spClass('Users')->getUserData($this->spArgs('email'), $this->spArgs('password'));
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
		$_SESSION['logout'] = 1;
		$this->jump(spUrl('main', 'index'));
		
	}
}
