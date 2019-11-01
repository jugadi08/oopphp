<?php 

/* EXAMPLE SIMPLE IMPLEMENTATION OOP PHP WITH RANDOM CASE  */

//require_once './app/ClassSatu.php';

//require_once './app/Items.php';

//require_once './app/ClassConstruct.php';

//require_once './app/ObjectType.php';

//require_once './app/Inheritence.php';

//require_once './app/Overide.php';

require_once './app/GeterSeter.php';

/*

@INSTANCE CLASS TO OBJECT

$Obcj = new ClassSatu; //Create Object instance from class


$Obcj->b(); //Call method from Class


*/

/*-----------------------------------------------------*/

/*

@PROPERTIS & METHOD

$ObjItems1 = new Items();

$newItem= $ObjItems1->item1='kaos oblong';

var_dump('Object instance  new item value <b>[ '.$newItem.']</b> overwrite default value with new value </br>');

$ObjItems2 = new Items();

var_dump('Object new instance call same item propertis <b>[ '.$ObjItems2->item1.' ]</b> defult value </br>');

//case add new properti without define frist

$randomPropertis = $ObjItems1->rand='Hey did I get an error?';

var_dump('Add random properti without define first <b>['. $randomPropertis.']</b></br>');


@ play with method

$PlayObject = new Items();

echo $PlayObject->getItem1();

*/

/*-----------------------------------------------------*/

/* 
@CONSTRUCTOR
*/
/*
$Obj = new ClassConstruct('jono',29,'male');

echo "{$Obj->gender} </br>";

//@OBJECT TYPE

$print = new PrintData();

$person = $print->out($Obj);

echo $person;
*/

/*-----------------------------------------------------*/

/*
@INHERITANCE
*/
/*
$items = new ChildItem;

$items->setDiscount(10);

$item =$items->getDiscount();

echo $item;
*/
/*-----------------------------------------------------*/
/*
@OVERIDE
*/
/*
$citem = new ChildItem;

$citem->setDiscount(10);

$item =$citem->getDiscount();

echo $item;
*/
/*-----------------------------------------------------*/

//@GETER SETER
/*
$items = new Items();

$items->setName('cholting');

$item = $items->getName();

echo $item;*/

