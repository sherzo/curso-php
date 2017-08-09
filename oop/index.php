<?php 

include 'vehicles/Car.php';
include 'vehicles/Truck.php';
include 'vehicles/ToyCar.php';

use Vehicles\{Car, Truck, ToyCar};

try {
	echo "Class ToyCar<br>";
	$toyCar = new ToyCar('Alex');
	// $toyCar->move();
} catch (Exception $e) {
	echo "This is a toy <br><br>";
	// log...
} finally {
	echo 'Finally <br><br>';
}

echo "Class Car<br>";
$car = new Car('Alex');
$car->move();
echo "Owner car: " . $car->getOwner() .'<br>';


echo "<br>Class Truck 1 <br>";
$truck = new Truck('Max', 'Pickup');
$truck->move();
//echo "Owner truck: " . $truck->getOwner();

echo "<br>Class Truck 2 <br>";
$truck2 = new Truck('Max', 'Pickup');
$truck2->move();

echo "<br> Total trucks: " . Truck::getTotal() . '<br>';

$ser = serialize($car);
$newCar = unserialize($ser);

echo 'NewCar Owner ' . $newCar->getOwner() . '<br>';
