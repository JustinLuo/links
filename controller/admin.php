<?php

class admin extends spcontroller{
	function index(){
		echo "Hello";
	}

	function addNum(){
		$num = $this->spArgs('num');
		echo $num + $num;
	}

	function checkTitle(){
		error_reporting(0);
		$title = $this->spArgs('title');
		// echo json_encode($title);
		$Link = spClass('Link');
		if ($Link->find(['title'	=>	$title]) != FALSE){
			$result = array(
				'status' => 0,
				'message' => "<font color='red'>title is not empty</font>",
				);
		} else {
			$result = array(
				'status' => 0,
				'message' => "<font color='green'>Check ok!</font>",
				);
		}
		echo json_encode($result);
	}

	function checkURL(){
		$url = $this->spArgs("address");
		if (preg_match("/^((http|ftp|https):\/\/)?([a-zA-Z0-9]([a-zA-Z0-9\-]{0,61}[a-zA-Z0-9])?\.)+[a-zA-Z]{2,6}+[\/\w]{0,100}?$/", $url)){
			// echo curlGetTitle($url);
			$status = 0;
			$message = curlGetTitle($url);
			// echo "Yes";
		} else {
			$status = 1;
			$message = "<font color='red'>URL 不正确</font>";
		}
		$result = array(
			'status'	=>	$status,
			'message'	=>	$message,
			);
		echo json_encode($result);
	}

	public function add(){
		$this->display('admin/add.html');
	}

	public function add_ajax(){
		$Link = spClass("Link");
		// echo $this->spArgs("url");
		if ($Link->addLink(['url'	=>	$this->spArgs("url"),
							 'title'	=>	$this->spArgs('title'),
							 'addTime'	=>	time(),
							 ])){
			echo json_encode(['msg'	=> 'true']);
		}else {
			echo json_encode(['msg'	=>	'false']);
		}
	}


	public function add_post(){
		dump($this->spArgs());
		if ($this->spArgs('title')  == NULL)$this->jump(spUrl('main', 'index'));
		if ($this->spArgs('address')  == NULL)$this->error("address cannot empty");
		$title = $this->spArgs('title');
		echo $title;
		$address = $this->spArgs('address');
		// echo $address;
		if (strpos($address, 'http://') == FALSE){
			$address = 'http://' . $address;
		}
		$Link = spClass('Link');
		if ($Link->create(['title'	=>	$title,
							'address'	=>	$address
							])){
			$this->success('Add address Successful', spUrl('main', 'index'));
		}else{
			$this->error('Error!');
		}
		// dimp($title);
	}
}