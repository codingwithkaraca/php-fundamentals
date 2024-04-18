<?php

namespace abstracts;

require 'Car.php';
class Audi extends \Car {


    public $carname = "Audi";

    // TODO: Implement carNameCountry() method.


    #[\Override]
    public function carNameCountry(){
        return "Araba ismi ".$this->carname;
    }


};

?>