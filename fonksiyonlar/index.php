<?php

$vizenotu = $_POST["vizenotu"];
$finalnotu = $_POST["finalnotu"];



// şartlı fonksiyon
function yuksekNot($vizenotu=100){

    echo "Notunuz:".$vizenotu;
}

if ($vizenotu==""){
    yuksekNot();
}

else{
    yuksekNot($vizenotu);
}




?>


<h1>Burası INDEX </h1>

<p><?= $vizenotu ?></p>
