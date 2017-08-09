<?php 

include 'vehicles/Car.php';
include 'vehicles/Truck.php';

use Vehicles\{Car, Truck};

echo "Class Car<br>";
$car = new Car('Alex');
$car->move();
echo "Owner: " . $car->getOwner() . '<br>';

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
