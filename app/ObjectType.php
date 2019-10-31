<?php 


class PrintData
{
	 // set Class ClassConstruct method(ClassName $param) the only received on this method parameter
	 public function out( ClassConstruct $param){ 

		$str ="PRINT OUT [ name : {$param->name} age : {$param->age} gender : {$param->gender} ]
		 <small>called from Class PrintData</small> </br>";

		return $str;

	}
}