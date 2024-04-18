<?php


$dosya = $_FILES['dosya'];

// Dosya yükleme işlemi
$yuklemeYolu = 'uploads/' . basename($dosya['name']);
if (move_uploaded_file($dosya['tmp_name'], $yuklemeYolu)) {
    echo "Dosya başarıyla yüklendi.";
} else {
    echo "Dosya yüklenirken bir hata oluştu.";
}
?>


<a href="<?php echo $yuklemeYolu; ?>">Yüklenen Dosyayı Görüntüle</a>


?>