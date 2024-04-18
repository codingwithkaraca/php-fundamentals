<?php
// 1. Sıfırdan yüze kadar olan çift sayıların toplamını buldurunuz?
//Alper Karaca

$toplam = 0;

for ($sayi=1;$sayi<=100;$sayi++){

    if ($sayi % 2 == 0 ){
        $toplam += $sayi;
    }
}

echo "Sıfırdan yüze kadar olan çift sayıların toplamı :".$toplam;

?>