<?php
namespace bt1;
class Person
{
    private $name;
    private $address;

    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function toString()
    {
        return "Person[name=" . $this->getName() . ",address=" . $this->getAddress() . "]";
    }
}

