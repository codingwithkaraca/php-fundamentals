<?php

function soru($item){

    return $item." ?";
}

function unlem($item){

    return $item." !";
}

function yazdirmaFormati($item, $format)
{
    echo $format($item);
}

yazdirmaFormati('Alper misin','unlem');



?>