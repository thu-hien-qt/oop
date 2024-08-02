<?php
namespace bt5;
require "Mammal";

class Dog extends Mammal
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function greets(Dog $another = null)
    {
        if ($another != null) {
            print "Woooof";
        } else {
            print "Woof";
        }
    }

    public function __toString()
    {
        return "Dog[Mammal[Animal[name=".$this->getName()."]]]";
    }
}