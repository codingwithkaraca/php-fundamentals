<?php

function bolme($bolunen,$bolen)
{
    if ($bolen == 0){
        throw new Exception("Sıfıra bölünmez !!!");
    }

    return $bolunen / $bolen;
}


echo bolme(10,0);

?>