<?php
class main extends spController
{
	function index(){
		// echo "Enjoy, Speed of PHP!";
		$links = spClass('Link')->findAll();
		for ($i = 0; $i < count($links); $i++){
			$links[$i]['time'] = date('Y-m-d H:i:s', $links[$i]['time']);
		}
		$this->links = $links;
		// dump($this->links);
		$this->display('index.html');
	}
} 
