<?php

namespace interfaces;
class Dog implements Animal {


    #[\Override]
    public function makeSound()
    {
       return "Hav Hav";
    }
}

?>