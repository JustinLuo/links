<?php

function curlGetTitle($url){
	$c = curl_init();
	// $url = 'www.jb51.net';
	curl_setopt($c, CURLOPT_URL, $url);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	$data = curl_exec($c);
	curl_close($c);
	$pos = strpos($data,'utf-8');
	if($pos===false){$data = iconv("gbk","utf-8",$data);}
	preg_match("/<title>(.*)<\/title>/i",$data, $title);
	// echo $title[1];	
	return $title[1];
}