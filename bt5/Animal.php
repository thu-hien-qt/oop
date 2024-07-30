<?php
namespace bt5;

class Animal 
{
    private $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function __toString()
    {
        return "Animal[name=".$this->name."]";
    }
}