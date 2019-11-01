<?php

/*
 EXAMPLE SETER GETER IF USE SETER AND GETER YOU CAN SET CONDITIONAL  LOGIC IN THE FUNCTION SET BEFORE YOU SET VALUE PROPERTI 
 AND YOU CAN ACCESS PRORETI TO CHILDERN CLASS WHEN YOU PARET CLASS USE VISIBILTY  OR SCOPE  DATA
 LIKE PRIVATE PROPERTI
*/
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