<?php
namespace bt10;
require "Dog.php";

class BigDog extends Dog
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function greets(Dog $another = null)
    {
        if ($another == null)
        {
            print "Wooow";
        }
        elseif ($another instanceof BigDog) 
        {
            print "Wooooooooow";
        }
        else 
        {
            print "Woooooow";
        }
    }
}
