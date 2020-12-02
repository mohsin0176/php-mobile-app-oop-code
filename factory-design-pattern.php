<?php

class CarFactory
{
	protected $brands=[];
	public function __construct()
	{
			$this->brands=['mercedes'=>'MercedesCar','toyota'=>'ToyotaCar'];
	}

	public function make($brand)
	{
		if(!array_key_exists($brand,$this->brands))
		{
			return new Exception('Not Available This Car');
		}

		$className=$this->brands[$brand];
		return new $className();
	}
}


interface CarInterface
{
	public function design();
	public function assemble();
	public function paint();
}


class MercedesCar implements CarInterface
{
	public function design()
	{
		return 'Design Mercedes';
	}
	public function assemble()
	{
		return 'Assemble Mercedes';
	}
	public function paint()
	{
		return 'Paint Mercedes';
	}
}


class ToyotaCar implements CarInterface
{
	public function design()
	{
		return 'Design Toyota';
	}
	public function assemble()
	{
		return 'Assemble Toyota';
	}
	public function paint()
	{
		return 'Paint Toyota';
	}
}

$carFactory=new CarFactory;
$mercedes=$CarFactory->make('mercedes');
echo $mercedes->design();
echo $mercedes->assemble();
echo $mercedes->paint();

//////////////////////////////////////////////////////////////

abstract class VehicleFactoryMethod
{
	abstract public function make($brand);
}

class CarFactory extends VehicleFactoryMethod
{
	public function make($brand)
	{
		$car=null;
		switch ($brand) 
		{
			case 'mercedes':
				$bike=new MercedesCar;
				break;
			
			case 'toyota':
				$bike=new ToyotaCar;
				break;
		}
		return $car;
	}
}
class BikeFactory extends VehicleFactoryMethod
{
	public function make($brand)
	{
		$bike=null;
		switch ($brand) 
		{
			case 'yamaha':
				$bike=new YamahaBike;
				break;
			
			case 'ducati':
				$bike=new DucatiBike;
				break;
		}
		return $bike;
	}
}

interface CarInterface
{
	public function design();
	public function assemble();
	public function paint();
}

interface BikeInterface
{
	public function design();
	public function assemble();
	public function paint();
}

class MercedesCar implements CarInterface
{
	public function design()
	{
		return 'Design Mercedes';
	}
	public function assemble()
	{
		return 'Assemble Mercedes';
	}
	public function paint()
	{
		return 'Paint Mercedes';
	}
}


class ToyotaCar implements CarInterface
{
	public function design()
	{
		return 'Design Toyota';
	}
	public function assemble()
	{
		return 'Assemble Toyota';
	}
	public function paint()
	{
		return 'Paint Toyota';
	}
}

class YamahaBike implements BikeInterface
{
	public function design()
	{
		return 'Design Yamaha';
	}
	public function assemble()
	{
		return 'Assemble Yamaha';
	}
	public function paint()
	{
		return 'Paint Yamaha';
	}
}


class DucatiBike implements BikeInterface
{
	public function design()
	{
		return 'Design Ducati';
	}
	public function assemble()
	{
		return 'Assemble Ducati';
	}
	public function paint()
	{
		return 'Paint Ducati';
	}
}

$carFactoryInstance=new CarFactory;
$mercedes=$CarFactoryInstance->make('mercedes');
echo $mercedes->design();
echo $mercedes->assemble();
echo $mercedes->paint();
$toyota=$CarFactoryInstance->make('toyota');
echo $toyota->design();
echo $toyota->assemble();
echo $toyota->paint();
$yamaha=$CarFactoryInstance->make('yamaha');
echo $yamaha->design();
echo $yamaha->assemble();
echo $yamaha->paint();
$ducati=$CarFactoryInstance->make('ducati');
echo $ducati->design();
echo $ducati->assemble();
echo $ducati->paint();

/////////////////////////////////////////////////////////

abstract class AbstractVehicleFactory
{
	abstract public function makeCar();
	abstract public function makeBike();	
}

class BangladeshiFactory extends AbstractVehicleFactory
{
    public function makeCar()
    {
    	return new ToyotaCar();
    }
    public function makeBike()
    {
    	return new YamahaCar();
    }
}
class USAFactory extends AbstractVehicleFactory
{
    public function makeCar()
    {
    	return new MercedesCar();
    }
    public function makeBike()
    {
    	return new DucatiBike();
    }
}

abstract class AbstractVehicle
{

	abstract public function design();
	abstract public function assemble();
	abstract public function paint();

}

abstract class AbstractCarVehicle extends AbstractVehicle
{

}
abstract class AbstractBikeVehicle extends AbstractVehicle
{
	
}

class MercedesCar extends AbstractCarVehicle
{
	public function design()
	{
		return 'Design Mercedes';
	}
	public function assemble()
	{
		return 'Assemble Mercedes';
	}
	public function paint()
	{
		return 'Paint Mercedes';
	}
}


class ToyotaCar extends AbstractCarVehicle
{
	public function design()
	{
		return 'Design Toyota';
	}
	public function assemble()
	{
		return 'Assemble Toyota';
	}
	public function paint()
	{
		return 'Paint Toyota';
	}
}

class YamahaBike extends AbstractBikeVehicle
{
	public function design()
	{
		return 'Design Yamaha';
	}
	public function assemble()
	{
		return 'Assemble Yamaha';
	}
	public function paint()
	{
		return 'Paint Yamaha';
	}
}


class DucatiBike extends AbstractBikeVehicle
{
	public function design()
	{
		return 'Design Ducati';
	}
	public function assemble()
	{
		return 'Assemble Ducati';
	}
	public function paint()
	{
		return 'Paint Ducati';
	}
}
$bangladeshiFactoryInstance=new BangladeshiFactory;
$car=$bangladeshiFactoryInstance->makeCar();
echo $car->design();
echo $car->assemble();
echo $car->paint();
$bike=$bangladeshiFactoryInstance->makeBike();
echo $bike->design();
echo $bike->assemble();
echo $bike->paint();
$usaFactoryInstance=new USAFactory;
$car=$usaFactoryInstance->makeCar();
echo $car->design();
echo $car->assemble();
echo $car->paint();
$bike=$usaFactoryInstance->makeBike();
echo $bike->design();
echo $bike->assemble();
echo $bike->paint();

?>