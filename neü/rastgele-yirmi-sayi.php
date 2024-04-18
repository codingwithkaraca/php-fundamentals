<?php
// Rastgele saylardan oluşmuş 20 elemanlı bir array oluşturunuz?

$rastgele_sayi_dizi = array();

// while ile çözümü
while (count($rastgele_sayi_dizi) <20){

    $rastgele_sayi = rand(0,100);
    array_push($rastgele_sayi_dizi,$rastgele_sayi);
}

echo "Dizi uzunluğu: ".count($rastgele_sayi_dizi);
echo var_dump($rastgele_sayi_dizi);




/*// for döngüsü ile çözümü
for ($i= 0;count($rastgele_sayi_dizi) < 20; $i++){

    $rastgele_sayi = rand(0,100);

    array_push($rastgele_sayi_dizi, $rastgele_sayi);

}

echo "Dizi uzunluğu: ".count($rastgele_sayi_dizi);

// var_dump metotu ile dizinin index ve değerlerinin yazdırma
echo var_dump($rastgele_sayi_dizi);*/





?>