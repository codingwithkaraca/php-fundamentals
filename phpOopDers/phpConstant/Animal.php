<?php

namespace phpConstant;

class Animal
{

    const color = "red";

    public $isim = "kuş";

    public function yazdir(){
        return "Hayvan ismi ".$this->isim."\n";
    }

}

$hayvan1 = new Animal();

echo $hayvan1->yazdir();

echo Animal::color;

echo "oklu ".Animal::color;



?>