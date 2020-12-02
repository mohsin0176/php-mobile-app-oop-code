<?php

class TestClass 
{
  	public function __construct()
  	{
           echo "This is First Construct";
  	}
}

/**
 * 
 */
class SubClass extends TestClass
{
	
	public function __construct()
	{
		  parent :: __construct();
		  echo "This is Second Construct";
	}

	public function __desstruct()
  	{
           echo "This is First Destruct";
  	}
}

$instance= 'SubClass';
$object=new $instance();
?>