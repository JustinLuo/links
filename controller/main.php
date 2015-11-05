<?php
class main extends spController
{
	function index(){
		// echo "Enjoy, Speed of PHP!";
		// 
		$links = spClass('Link')->findAll();
		for ($i = 0; $i < count($links); $i++){
			$links[$i]['time'] = date('Y-m-d H:i:s', $links[$i]['time']);
			// if (!preg_match("/^(http|https)+\:\/\//", $links[$i]['address'])){
				// $links[$i]['address'] = "http://".$links[$i]['address'];
			// }
		}

		$this->links = spClass('Link')->spPager($this->spArgs('page', 1), 8)->findAll();
		$this->pager = spClass('Link')->spPager()->getPager();
		// dump($this->links);
		$this->display('index.html');
	}
} 
