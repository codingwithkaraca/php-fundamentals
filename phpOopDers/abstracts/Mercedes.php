<?php

namespace abstracts;

require 'Car.php';

class Mercedes extends \Car {

    public $carname = "Mercedes";


    #[\Override]
    public function carNameCountry()
    {
        return "Araba ismi :".$this->carname;

    }

}


?>