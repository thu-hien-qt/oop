<?php
namespace bt7;
require "GeometricObject.php";

class Rectangle implements GeometricObject
{
    private float $width;
    private float $length;

    public function __construct(float $width, float $length)
    {
        $this->width = $width;
        $this->length = $length;
    }

    public function __toString()
    {
        return "Rectangle[width=".$this->width.",length=".$this->length."]";
    }

    public function getArea()
    {
        return $this->width * $this->length;
    }

    public function getPerimeter()
    {
        return 2 * ($this->width + $this->length);
    }
}