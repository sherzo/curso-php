<?php 

namespace Vehicles;

require_once 'VehicleBase.php';

class Car extends VehicleBase implements \Serializable {

	public function move(){
		echo $this->startEngine() . '<br>';
 		echo "Car: Moving <br>";
 	}

 	public function startEngine()
 	{
 		return 'Car: start engine';
 	}

 	public function serialize()
 	{
 		echo 'Serialize <br>';
 		echo $this->owner;
 	}

 	public function unserialize($serialized)
 	{
 		echo 'Unserialize <br>';
 		$this->owner = $serialized;
 	}
}