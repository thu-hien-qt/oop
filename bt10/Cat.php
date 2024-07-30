<?php
namespace bt10;
require "Animal.php";

class Cat extends Animal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function greets()
    {
        Print "Meow";
    }
}