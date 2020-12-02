<?php

$array=array(1,2,3,4,5);
echo count($array);

////////////////////////////////////////////
$food=array(  'fruits'=>array('apple','orange','banana'),
		      'veggie'=>array('carrot','pea','collard') 
		   );

echo count($food);
///////////////////////////////////////////////

$search_array=array('first'=>'100','second'=>'200');
if(array_key_exists('first',$search_array))
{
	echo "The Key is Exist";
}
///////////////////////////////////////////////////////
$array=array('first'=>'100','second'=>'200','third'=>'300');
print_r(array_keys($array,'200'));
//////////////////////////////////////////////////////
$array=array('first'=>'100','second'=>'200','third'=>'300');
print_r(array_values($array,'first'));
////////////////////////////////////////////////////////
$array=array('first'=>'100','second'=>'200','third'=>'300');
print_r(array_values($array));
/////////////////////////////////////////////////////////
$os=array("MAC","WINDOWS","APPLE");
if(in_array("MAC", $os))
{
echo "The Element is Exist";	
}
//////////////////////////////////////////////
$stack=array("orange","banana","apple");
$fruit=array_pop($stack);
/////////////////////////////////////////
$stack=array("orange","banana","apple");
array_push($stack,"mango");
$fruit=array_pop($stack);
//////////////////////////////////////////////////
$stack=array("orange","banana","apple");
$fruit=array_shift($stack);
///////////////////////////////////////////////////////
$stack=array("orange","banana","apple");
$fruit=array_unshift($stack,"mango","palm");
////////////////////////////////////////////////////////

$value=array('first'=>'100','second'=>'200');
$trans=array_flip($value);
/////////////////////////////////////////////////////////
$stack=array("orange","banana","apple");
$value=array_reverse($stack);
///////////////////////////////////////////////////////////////
$stack1=array("orange","banana","apple");
$stack2=array("carrot","salgom","borboti");
$value=array_merge($stack1,$stack2);
///////////////////////////////////////////////////////////
$stack1=array("orange","banana","apple","carrot","salgom","borboti");
$value=array_rand($stack1,2);
echo $value[0];
echo $value[1];

?>
