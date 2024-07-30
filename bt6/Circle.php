<?php
namespace bt6;
require "Shape.php";

class Circle extends Shape
{
    protected $radius;

    public function __construct(float $radius, $color, bool $filled)
    {
        $this->radius = $radius;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius(float $radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        $radius = $this->getRadius();
        return $radius * 2 *3.14;
    }

    public function getPerimeter()
    {
        $radius = $this->getRadius();
        return $radius * $radius * 3.14;
    }

    public function __toString()
    {
        return "Circle[Shape[color=".$this->getColor().",filled=".
        $this->isFilled()."],radius=".$this->getRadius()."]";
    }
}