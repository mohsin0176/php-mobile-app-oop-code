<?php

final class Singleton
{
	private staic $instance;

	public static function getInstance()
	{
		if (null===self::$instance) 
		{
			self::$instance=new self();
		}
		return self::$instance;
	}

	private function __construct()
	{

	}
	private function __clone()
	{
		
	}
	private function __wakeup()
	{
		
	}
	private function sayHi()
	{
		echo "Hi";
	}
}

$singleton=Singleton::getInstance();
$singleton->sayHi();
$singleton=new Singleton();


?>