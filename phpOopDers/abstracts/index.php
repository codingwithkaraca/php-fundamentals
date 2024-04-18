<?php

require 'Audi.php';
require 'Mercedes.php';
require 'Car.php';


$audi = new \abstracts\Audi();
$mercedes = new \abstracts\Mercedes();

$cars = array($audi,$mercedes);

foreach ($cars as $car){

    $car->carNameCountry();

}



?>