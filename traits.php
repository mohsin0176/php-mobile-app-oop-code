<?php

traits CommonMethods
{
	public function getName()
	{
		return $this->name;
	}
}

class TestClass
{
	use CommonMethods;
	private $name="test class";
}
class AnotherClass
{
	use CommonMethods;
	private $name="another class";
}


$tc=new AnotherClass();
$tc->getName();
$st=new TestClass();
$st->getName();
?>