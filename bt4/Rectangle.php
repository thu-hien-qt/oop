<?php
namespace bt4;
require "Shape.php";

class Rectangle extends Shape
{
    private float $width;
    private float $length;

    public function __construct(float $width = 1, float $length = 1, $color, bool $filled)
    {
        $this->width = $width;
        $this->length = $length;
        parent::__construct($color, $filled);
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth(float $width)
    {
        $this->width = $width;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength(float $length)
    {
        $this->length = $length;
    }

    public function getArea()
    {
        return $this->getWidth() * $this->getLength();
    }

    public function getPerimeter()
    {
        return 2 * ($this->getWidth() + $this->getLength());
    }

    public function __toString()
    {
        return "Rectangle[Shape[color=".$this->getColor().",filled=".$this->isFilled().
        "],width=".$this->getWidth().",length=".$this->getLength()."]";
    }
}