<?php

    function bolme($bolunen, $bolen){

        if ($bolen == 0){
            throw new Exception("Sıfıra bölme hatası");
        }

        return $bolunen / $bolen;

    }

try {
    echo "sonuç :".bolme(10,0);
}catch (Exception $e){
        echo "Hata mesajı :".$e->getMessage()." Hata kodu: ".$e->getCode();
} finally {
    echo "\n Ben her türlü çalışırım babayiğit";
}



?>