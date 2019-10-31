<?php


class ClassConstruct
{	
	public $name,

		   $age,

		   $gender;

	
	public function __construct($name='name',$age=null,$gender='gender')
	{
		$this->name=$name;

		$this->age=$age;

		$this->gender=$gender;

	}
}