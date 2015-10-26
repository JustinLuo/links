<?php

class admin extends spcontroller{
	function index(){
		echo "Hello";
	}

	public function add(){
		$this->display('admin/add.html');
	}

	public function add_post(){
		dump($this->spArgs());
		if ($this->spArgs('title')  == NULL)$this->jump(spUrl('main', 'index'));
		if ($this->spArgs('address')  == NULL)$this->error("address cannot empty");
		$title = $this->spArgs('title');
		echo $title;
		$address = $this->spArgs('address');
		// echo $address;
		// if (strpos($address, 'http://') == FALSE){
		// 	$address = 'http://' . $address;
		// }
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