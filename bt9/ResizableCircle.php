<?php
namespace bt9;

require "Resizable.php";
require "Circle.php";

class ResizableCircle extends Circle implements Resizable
{
    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function __toString()
    {
        return "ResizableCircle[Circle[radius=".$this->radius."]]";
    }

    public function resize(int $percent)
    {
        $this->radius *= $percent/100;
    }
}