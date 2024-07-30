<?php
namespace bt5;
require "Animal.php";

class Mammal extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function __toString()
    {
        return "Mammal[Animal[name=".$this->getName()."]]";
    }
}