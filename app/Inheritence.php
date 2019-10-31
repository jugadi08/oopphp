<?php 
/*
	Example Code in simple case
*/
class ParentItems
{
	public $price,

		   $discount,

		   $qty,

		   $task;

	public function setDiscount(){

		$val = $this->discount;

		return $val;
	}

	public function getDiscount(){

		return $this->discount;
	}

}

class ChildItem extends ParentItems 
{

		public $name,

			   $color,

			   $type;

	public function __construct(){

		
	}

}