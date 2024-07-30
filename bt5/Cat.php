<?php
namespace bt5;
require "Mammal.php";

class Cat extends Mammal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function greets()
    {
        print "Meow";
    }

    public function __toString()
    {
        return "Cat[Mammal[Animal[name=".$this->getName()."]]]";
    }
}