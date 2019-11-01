<?php 
/*
	Example Code in simple case OVERIDE
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

		//overide concat method
		public function getDiscount(){

			$str = parent::getDiscount();

			return $str;
		}

}