<?php

$gelen_sayi = $_POST["sayi"];

$etiket = "";


if ($gelen_sayi != 22) {

    $etiket = "<p>Doğru cevap 22 olmalı</p>";
    header("refresh:2; url=index.php");
}
else{
    $etiket = "<p>Tebrikler doğru cevap 22</p>";

    header('refresh:4; url=admin.php');
}



?>

<html>

<header>
</header>

<body>

<h1>
    Versdiğiniz sayı: <?= $gelen_sayi ?>
</h1>

<?= $etiket ?>

</body>

</html>
