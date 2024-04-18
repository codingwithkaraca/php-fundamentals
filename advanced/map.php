<?php

function karaktersayisiyazdir($item){
    return strlen($item);

}

$isimler = ["Alper", "Karaca",4];

$yazdirma = array_map('karaktersayisiyazdir',$isimler);


print_r($yazdirma);






?>