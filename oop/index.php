<?php 

 /**
 * 
 */
 class Car 
 {
 	public function __construct($owner)
 	{
 		$this->owner = $owner;
 	}

 	public function __destruct()
 	{
 		echo "Destruct <br>";
 	}

 	private $owner;

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

echo "Class Car <br><br>";

$car = new Car('Alex');
$car2 = new Car('Max');

$car->move();

echo "Owner: " . $car->getOwner() . '<br>';
echo "Owner2: " . $car2->getOwner();
