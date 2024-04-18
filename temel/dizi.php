<?php

$isimler = array("Macbook","Lenovo","hp");



    array_push($isimler,"Alper");

foreach ($isimler as $isim){
    echo $isim."<br>";
}


?>


<h1><?= $isimler[0] ?></h1>
<h2>item sayısı : <?= COUNT($isimler) ?></h2>
<p>Son item</p>









