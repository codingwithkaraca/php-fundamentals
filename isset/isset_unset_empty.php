<?php

// isset() degisken varlığını kontrol eder.
// unset() bir değişkeni hafızadan siler
// empty() değişken boş mu değil mi ona bakar

$isim = "";
$soyisim = "Karaca";
$yas = 20;


// isset()
if (isset($isim)){
    echo "Değişken var <br>";
}
else{
    echo "Değişken yok <br>";
}

//unset()
unset($soyisim);
    // echo $soyisim;  // soyisim değişkenini yazdırmak istediğinde hata alıyoruz değişken silindi


//empty()
if (empty($isim)){
    echo "Değişken veri yok";
}
else{
    echo "değişkende veri var";
}


?>