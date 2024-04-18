<?php

function notHesapla($vize,$final){

    $vize_notu_yuzde = $vize * 0.4;
    $final_notu_yuzde = $final * 0.6;

    $nihainot = $vize_notu_yuzde + $final_notu_yuzde;

    echo $nihainot;
}

notHesapla(100,60);

?>