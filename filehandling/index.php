<?php

//  dosya okuma
//  echo readfile('infos.txt');

// dosyayı açıp okuma
/*$myfile = fopen('infos.txt','r') or die("Dosya açılırken bi hata oldu");

echo fread($myfile,filesize('infos.txt'));

fclose($myfile);*/



/*
dosya açma içine veri girme tekrardan okuma
$myfile2 = fopen('infos.txt',"w") or die("Dosya açılırken bir hata oluştu");

fwrite($myfile2,"Macbook air 16gb");

$myfile2 = fopen('infos.txt',"r") or die("Dosya açılımında bir hata oldu ");

echo fread($myfile2,filesize("infos.txt"));*/

// dosya içindeki karakterleri okuma
$myfile3 = fopen('infos.txt', 'r') or die("Dosya açılırken bir hata oldu");

while(!feof($myfile3)){
    echo fgetc($myfile3);
}


fclose($myfile3);



?>