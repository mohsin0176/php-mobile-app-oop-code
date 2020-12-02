<?php


function testFunc($age,$name)
{
   echo $age;
   echo $name;
}
testFunc("mamun","20");
///////////////////////////////////////
function testFunc($age,$old)
{
   return $age.$old;
}
testFunc("30","20");

/////////////////////////////////////


function foo($a)
{
	echo "This is Another Function".$a;
}

$func='foo';
$func(20);
////////////////////////////////////////////////
$data=function()
		{
			$val=array();
			for ($i=0; $i <10 ; $i++) 
			{ 
			$val[]=$i;
			}	
			return $val;	
		};

$data();


?>