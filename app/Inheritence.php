<?php 
/*
	Example Code in simple case
*/
class ParentItems
{
	public $name,

		   $price,

		   $discount,

		   $qty,

		   $task;


	public function setDiscount($discount=null){

		$this->discount =$discount;

	}

	public function getDiscount(){

		return $this->discount;
	}
}

class ChildItem extends ParentItems 
{


}