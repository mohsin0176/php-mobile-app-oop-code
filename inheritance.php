<?php

class Parent
{
	public $name;
	public function getName()
	{
		return $this->name;
	}

}


class Child extends Parent
{
	
	public function setName()
	{
		return $this->name;
	}
}

$object=new Child();
$object->name="Abul";
$object->getName();
$object->name="Hasan";
$object->setName();
?>


