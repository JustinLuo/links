<?php

class Link extends spModel{
	var $pk = "id";
	var $table = "links";

	/**
	 * [addLink description]
	 * @param [type] $array [description]
	 * 
	 * $array['url']
	 * $array['title']
	 */
	public function addLink($array){
		if ($this->find(['title'	=>	$array['title']]) == FALSE){
			if ($this->create(['address'	=>	$array['url'],
								'title'		=>	$array['title'],
								'addTime'	=>	$array['addTime'],
								])){
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}