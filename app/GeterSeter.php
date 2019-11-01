<?php


class Items 
{

	public $name,

		   $qty,

		   $price;
	
	public function setName($name){

		$this->name=$name;

	}

	public function getName(){

		return $this->name;

	}
	
}