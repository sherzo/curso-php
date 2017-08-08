<?php 

namespace Vehicles;

require_once 'VehicleBase.php';

class Truck extends VehicleBase {
	
	private $type;

	public function __construct($owner, $type)
	{
		$this->type = $type;
		$this->owner = $owner;
	}

	public function move(){
 		echo 'Truck ' . $this->type. ': Moving <br>';
 	}
}