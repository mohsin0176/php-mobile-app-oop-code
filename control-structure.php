<?php

$a=10;

if ($a==5) 
{
	echo "The Result is Small";
}

elseif ($a>=3) 
{
	echo "The Result is Big";
}

else 
{
	echo "The Result is not So Big";
}
///////////////////////////////////////////

do
{
  echo $i;	
}
while ($i <=0); 

/////////////////////////////////////////////

for ($i=0; $i <=10 ; $i++) 
{ 
	echo $i;
}
///////////////////////////////////////////////

$array=array('first'=>'100','second'=>'200','third'=>'300');
foreach ($array as $key => $value) 
{
	echo $key."=".$value;
}
/////////////////////////////////////////
$array=array("100","200","300");
foreach ($array as  $value) 
{
	echo $value;
}
?>