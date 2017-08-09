<?php

namespace Vehicles;
// Los namespaces evitan el conflicto entre clases porque reduces el espacio de uso la clase

 /**
 *  Clase de Vehicles
 */

 abstract class VehicleBase
 {
 	protected $owner;
 	
 	public function __construct($owner)
 	{
 		$this->owner = $owner;
 		echo 'construct <br>';
 	}

 	public function move(){
 		echo $this->startEngine() . '<br>';
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

 	public abstract function startEngine();
 }
