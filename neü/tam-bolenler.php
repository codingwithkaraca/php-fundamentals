<?php
// Rastgele oluşturulmuş bir sayının tam bölenlerini buldurunuz?

$sayi = 20; //rand(1,100);

$bolenler = array();

for ($i = 1; $i <= $sayi;$i++){

    if ($sayi % $i == 0){
        echo $i." Sayısı bölünebiliyor\n";
        array_push($bolenler,$i);
    }
    else{
        $i." Sayısı bölünemiyor";
    }
}

echo "\nEn son hali :\n";
foreach ($bolenler as $item){
    echo $item.",";
}
// echo var_dump($bolenler);






?>