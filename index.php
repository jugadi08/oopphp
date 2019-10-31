<?php 
/*
require_once './app/ClassSatu.php';

$Obcj = new ClassSatu; //Create Object instance from class

$Obcj->b(); //Call method from Class
*/


require_once './app/Items.php';

$ObjItems1 = new Items();

$newItem= $ObjItems1->item1='kaos oblong';

var_dump('Object instance  new item value <b>[ '.$newItem.']</b> overwrite default value with new value </br>');

$ObjItems2 = new Items();

var_dump('Object new instance call same item propertis <b>[ '.$ObjItems2->item1.' ]</b> defult value </br>');

//case add new properti without define frist

$randomPropertis = $ObjItems1->rand='Hey did I get an error?';

var_dump('Add random properti without define first <b>['. $randomPropertis.']</b></br>');


//play with method

$PlayObject = new Items();

echo $PlayObject->getItem1();





