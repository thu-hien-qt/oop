<?php
namespace bt10;

abstract class Animal
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function greets();
}