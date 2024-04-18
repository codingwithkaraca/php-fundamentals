<?php

ini_set('display_errors',1);
error_reporting(E_ALL);

//connection create

$baglan = mysqli_connect("localhost","root","","dersler");

if (!$baglan){
    die("Bağlantı başarısız :".mysqli_connect_error());
}else{
    echo "Bağlantı başarıyla Gerçekleşti";
}

?>

<form action="" method="post">
    <label for="isim">İsminizi giriniz</label>
    <input type="text" name="isim" placeholder="isiminizi girin">
    <button type="submit" name="buton">Ekle</button>
</form>

<?php

if (isset($_POST['buton'])){

    $sql = "insert into Ders(isim) values ('".$_POST["isim"]."')";

    $sonuc = mysqli_query($baglan,$sql);

    if ($sonuc){
        echo "Veri eklendi";
    }
    else{
        echo "Veri eklenirken bir hata oluştu";
    }
}


?>
