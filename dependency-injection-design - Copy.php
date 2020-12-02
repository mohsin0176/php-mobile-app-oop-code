<?php

class Database
{
		protected $adapter;
		public function __construct()
		{
		$this->adapter=new MySqlAdapter;	
		}

}

class MySqlAdapter
{

}


/////////////////////////////////////////////////

class database
{
		protected $adapter;
		public function __construct(MySqlAdapter $adapter)	//////////
		{													/////////	
		$this->adapter=$adapter;							////////// constructor injection
		}													/////////
}

class MySqlAdapter
{

}

/////////////////////////////////////////////////////////
public function setterMethod(MySqlAdpater $adapter)
{
	$this->adapter=$adapter;						/////////////////////////// setter injection
}

/////////////////////////////////////////////////////////
public function __construct(AdapterInterface $adapter)		
		{														
		$this->adapter=$adapter;					////////// interface injection	
		}																					
///////////////////////////////////////////////////////

$mysqlAdapter=new MySqlAdapter;
$database=new Database($mysqlAdapter);
?>