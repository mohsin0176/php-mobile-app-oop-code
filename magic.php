<?php

// __construct()
// __destruct()
// __call()
// __get()
// __set()
// __isset()
// __set()
// __unset()
// __CallStatic()
// __sleep()
// __wakeup()
// __toString()
// __clone()
// __invoke()
// __set_state()
// __debugInfo()


//////////////////////////////////////////////
public function __get($property)
{
	if (property_exists($this,$property)) 
	{
		return $this->$property;
	}
}

///////////////////////////////////////////////
public function __set($property)
{
	if (property_exists($this,$property)) 
	{
		return $this->$property=$value;
	}
}
/////////////////////////////////////////////////
public function __isset($property)
{
	return isset($this->$property);
}
////////////////////////////////////////////////
public function __unset($property)
{
	unset($this->$property);
}
////////////////////////////////////////////////
public function __call($method,$parameters)
{
	var_dump($method);
	var_dump($parameters);
}
////////////////////////////////////////////////////


class Tweet
{
	function __construct()
	{
		$this->username="Saiful";
		$this->api="https://api.twitter.com/1.1/";
		$this->param['user_timeline']="statuses/user_timeline.json";
		$this->param['home_timeline']="statuses/home_timeline.json";
		$this->param['retweets']="statuses/retweets";
	}

	public function fetch($url)
	{
		var_dump($url);
	}

	public function __call($method,$parameters='')
	{
			if (array_key_exists($method,$this->param)) 
				{
	        			$url=$this->api.$this->param[$method];
	        			if (!empty($parameters)) 
	        			{
	        			$url.="/".$parameters[0].".json";
	        			}
	        			return $this->fetch($url);
	    		}
	    	else
	    		{
	    		return false;	
	    		}
		
	}
}

$tweets=new Tweet();
$tweets->retweets('abc');
$tweets->ppp('abc');
?>
