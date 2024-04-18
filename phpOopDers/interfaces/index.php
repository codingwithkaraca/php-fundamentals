<?php


// burada hata almıştım require ve require_once kullanımı öğren
require_once 'Animal.php';
require_once 'Dog.php';
require_once 'Cat.php';




$kedi = new \interfaces\Cat();

$kopek = new \interfaces\Dog();

$hayvanlar = array($kedi,$kopek);

foreach ($hayvanlar as $hayvan){

    echo $hayvan->makeSound()."\n"  ;

}


?>