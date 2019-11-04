<?php

require_once 'Truck.php';

//Vehicle
$vehicle1 = new Vehicle('red', 4);
$vehicle1->forward();


//Truck
$truck1 = new Truck (12, 'red',4,'fuel');
$truck1->setEnergyLevel(100);
$truck1->setEnergyLevel(25);
$truck1->setCurrentSpeed(25);
$truck1->setLoading (20);
$truck1->setcapacityStockage(25);



echo $truck1->forward();
echo '<br>'. 'Vitesse de '. 'truck1' . ' '. $truck1->getCurrentSpeed() . ' km/h' . '<br>';
echo $truck1->brake();
echo '<br>'. $truck1->A().'<br>';

$truck1->setloading(30);
print_r($truck1);
echo '<br>'. $truck1->A().'<br>';
