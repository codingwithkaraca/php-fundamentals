<?php

namespace interfaces;

class Cat implements Animal {


    #[\Override]
    public function makeSound()
    {
        return "Miyav miyav";
    }
}


?>