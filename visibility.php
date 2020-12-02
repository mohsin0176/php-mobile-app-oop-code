<?php

class MyClass 
{
	public $public='public';
	protected $protected='protected';
	private $private='private';

	function printHello()
	{
       echo $this->public;
	   echo $this->protected;
	   echo $this->private;
	}
}

$obj=new MyClass();
echo $obj->public;//works
echo $obj->protected;//fatal error
echo $obj->private;//fatal error
$obj->printHello();//show public



class MyClass2 extends MyClass
{
	function printHello()
	{
		echo $this->public;
		echo $this->protected;
		echo $this->private;
	}
}

$obj2=new MyClass2();
$obj2->printHello()
?>