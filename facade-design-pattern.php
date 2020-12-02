<?php

class Cart
{
			public function addProducts($products)
			{
				////////////////////// Products Adding Codes Are Here
			}

			public function getProducts()
			{
				/////////////////////// Products Retrieval Codes goes are here
			}

}

class Order
{
			public function process($products)
			{
				////////////////////// Order Processing Codes Are Here
			}

}

class Payment
{
			public function charge($charge)
			{
				//////////////////////   Additional charge Codes Are Here
			}

			public function makePayment()
			{
				/////////////////////// Payment Method Verify Codes goes are here
			}

}

class Shipping
{
			public function calculateCharge()
			{
				////////////////////// Calculation Codes Are Here
			}

			public function shipProducts()
			{
				/////////////////////// ship process Codes goes are here
			}

}

class CustomerFacade
{

			public function __construct()
			{
				$this->cart=new Cart;
				$this->order=new Order;
				$this->payment=new Payment;
				$this->shipping=new Shipping;
			}

			public function addToCart($products)
			{
				$this->cart->addProducts($products);	
			}

			public function checkout()
			{
				$products=$this->cart->getProducts();
				$this->totalAmount=$this->order->process($products);	
			}

			public function makePayment()
			{
				$charge=$this->shipping->calculateCharge();
				$this->payment->charge($charge);
				$isCompleted=$this->payment->makePayment();	
			

				if($isCompleted)
				{
				$this->shipping->shipProducts();
				}

			}	



}

$customer=new CustomerFacade;
$products=[

		  [
		  	'name'='Polo-Shirt',
		  	'price'='40',
		  ],

		  [
		  	'name'='Red-Shirt',
		  	'price'='20',
		  ]	
	

		  ];


$customer->addToCart($products);
$customer->checkout();
$customer->makePayment();


/////////////--------Laravel Facade--------///////////////////////


class person
{
	public function getFullName()
	{
		return 'SohelAmin';

	}

}

class PersonFacade
{
	static $instance;

	public static function __callStatic($method,$args)
	{

		if(null===static::$instance)
		{
			static::$instance=new Person;	
		}

			$instance=static::$instance;

		switch(count($args))
		{
			case 0:
			return $instance->$method();
			break;

			case 1:
			return $instance->$method($args[0]);
			break;

			case 2:
			return $instance->$method($args[0],$args[1]);
			break;

			case 3:
			return $instance->$method($args[0],$args[1],$args[2]);


			case 4:
			return $instance->$method($args[0],$args[1],$args[2],$args[3]);
			break;

			default:
			return call_user_func_array([$instance,$method],$args);
			break;			
		}

	}
}

var_dump(PersonFacade::getFullName());

?>