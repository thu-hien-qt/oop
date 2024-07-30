<?php

namespace bt10;

require "Animal.php";

class Dog extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function greets($another = null)
    {
        if ($another == "Dog") {
            print "Woooof";
        } else {
            print "Woof";
        }
    }
}

