<?php

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


///////////////////////////////////////////////////////



class Person
{
	public static $count;
	public static function getCount()
	{
	return self::count;	
	}
}

Person::$count=34;
Person::getCount();
$object = new Person();
var_dump($object->getCount());
?>