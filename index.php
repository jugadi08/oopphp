<?php 
/*
require_once './app/ClassSatu.php';

$Obcj = new ClassSatu; //Create Object instance from class

$Obcj->b(); //Call method from Class
*/


require_once './app/Items.php';

$ObjItems1 = new Items();

$newItem= $ObjItems1->item1='kaos oblong';

var_dump('Obect instance  new item value [ '.$newItem.'] overwrite default value with new value </br>');

$ObjItems2 = new Items();

var_dump('Object new instance call same items propertis [ '.$ObjItems2->item1.' ] defult value');



