<?php

require 'Fruit.php';

// sınıftan nesne çağır

$deneme = new Fruit();

$meyve1 = new Fruit();

$meyve1->set_Name("Armut");
$meyve1 -> set_Color("Yeşil");


echo "Meyvenin ismi :".$meyve1->get_Name()."\n";
echo "Meyvenin ismi :".$deneme->get_Name()."\n";

echo "Meyve rengi varsayılan :".$deneme->get_Color()."\n";
echo "Meyve rengi :".$meyve1->get_Color()."\n";


// Fruit sınıfından mı üretilmiş onu kontrol etme
echo "Meyve 1 örneği meyve cinsinden mi ? ".($deneme instanceof Fruit ? 'true' : 'false');






?>
