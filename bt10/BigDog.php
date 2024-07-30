<?php
namespace bt10;
require "Dog.php";

class BigDog extends Dog
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function greets($another = null)
    {
        if ($another == "Dog")
        {
            print "Woooooow";
        } elseif ($another == "BigDog")
        {
            print "Wooooooooow";
        } else {
            print "Wooow";
        }
    }
}
