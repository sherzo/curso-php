<?php

namespace Vehicles;
// Los namespaces evitan el conflicto entre clases porque reduces el espacio de uso la clase

 /**
 *  Clase de Vehicles
 */

 class VehicleBase
 {
 	protected $owner;
 	
 	public function __construct($owner)
 	{
 		$this->owner = $owner;
 	}

 	public function move(){
 		echo "Moving <br>";
 	}

 	public function getOwner()
 	{
 		return $this->owner;
 	}

 	public function setOwner($owner)
 	{
 		$this->owner = $owner;
 	}
 }
