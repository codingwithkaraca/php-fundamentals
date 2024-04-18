<?php

// ex 1
$kisiler = array("Alper" => 21, "sumeyra" => 23);

echo json_encode($kisiler);

// ex 2
$arabalar = array("VOLVO", "BMW");

echo json_encode($arabalar);

// ex 3
$jsonobject = '{"iphone":25, "Air":55}';

$coz = json_decode($jsonobject, true);

$anahtarlar = array_keys($coz);

echo " Marka :".$anahtarlar[0]." Fiyatı :".$coz['iphone'];


// ex 4

$jsonobject2 = '{"huawei":15, "Samsung":35}';

$donusturme = json_decode($jsonobject2,true);

foreach ($donusturme as $key => $value){
    echo "\n Marka :".$key. " Fiyatı :".$value;
}

?>