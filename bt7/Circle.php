<?php
namespace bt7;
require "GeometricObject.php";

class Circle implements GeometricObject
{
    private $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function __toString()
    {
        return "Circle[radius=".$this->radius."]";
    }

    public function getArea()
    {
        $radius = $this->radius;
        return $radius * 2 *3.14;
    }

    public function getPerimeter()
    {
        $radius = $this->radius;
        return $radius * $radius * 3.14;
    }
}