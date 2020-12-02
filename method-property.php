<?php
class Person
{
public $age;
}
$object = new Person();
$object->age=32;
var_dump($object->age);

//////////////////////////////////////////////


class Person
{
public $name="mamun";	
}
/////////////////////////////////////

class Person
{
	public $age;
	public function getAge()
	{
	return $this->age;	
	}
}

$object = new Person();
$object->age=32;
var_dump($object->getAge());
?>