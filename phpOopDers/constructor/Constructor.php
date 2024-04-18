<?php

namespace constructor;

class Constructor
{

    public $isim;
    public $soyisim;

    function _construct($isim){

        $this->isim = $isim;

    }

    function getName()
    {
        return "Müşteri adı:".$this->isim;

    }



}


?>