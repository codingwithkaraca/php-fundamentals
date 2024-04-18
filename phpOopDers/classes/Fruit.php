<?php

class Fruit {

    public $name = "Elma";
    public $color = "Beyaz";

    function get_Name(){
        return $this->name;
    }

    function set_Name($name){
        $this->name = $name;
    }

    function get_Color(){
        return $this->color;
    }

    function  set_Color($color){
        return $this->color = $color;

    }


}

?>
