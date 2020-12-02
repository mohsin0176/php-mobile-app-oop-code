<?php

class Model implements SplSubject
{
	protected $observers;

	public function __construct()
	{
		$this->observers=new Spl0bjectStorage();
	}

	public function attach(Spl0bserver $observer)
	{
		$this->observers->attach($observer);
	}

	public function detach(Spl0bserver $observer)
	{
		$this->observers->dettach($observer);
	}

	public function notify()
	{
		foreach ($this->observers as $observer) 
		{
           $observer->update($this);
		}
	}

	public function __set($name,$value)
	{
		$this->data[$name]=$value;
		$this->notify();
	}

}


class Model0bserver implements Spl0bserver
{
	public function update(SplSubject $subject)
	{
		echo get_class($subject).'has been updated';
	}
}

class observer2 implements Spl0bserver
{
	public function update(SplSubject $subject)
	{
		echo get_class($subject).'has been updated';
	}
}

$model1=new Model();
$model2=new Model();
$model1->attach($Model0bserver);
$model1->attach($observer2);
$model2->attach($observer2);
$model1->title='Hello';
$model2->body='World';


class Model
{
	protected $observers;

	public function __construct()
	{
		$this->observers=new Spl0bjectStorage();
	}

	public function notify()
	{
		foreach ($this->observers as $observer) 
		{
			$observer->update($this);
		}
	}



	public function set0bservers($observers=[])
	{
		foreach ($observers as $observer) 
		{
			$this->observers->attach($observer);
		}
	}

	public function __set($name,$value)
	{
		$this->data[$name]=$value;
		$this->notify();
	}
}

class Post extends Model
{
	public function insert($data)
	{
		$this->notify();
	}
	public function update($data)
	{
		$this->notify();
	}
	public function delete($data)
	{
		$this->notify();
	}
}

class PostModel0bserver
{
	public function update($subject)
	{
		echo get_class($subject).'has been updated';
	}
}

class 0bserver2
{
	public function update($subject)
	{
		echo get_class($subject).'has been updated';
	}
}

$post=new Post();
$post->set0bservers([new PostModel0bserver,new 0bserver2]);
$post->title='Hello World';

?>