<?php
namespace bt6;
require "Rectangle.php";

class Square extends Rectangle
{
    public function __construct(float $side = 1, $color, bool $filled)
    {
        $this->width = $side;
        $this->length = $side;
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getSide()
    {
        return $this->getWidth();
    }

    public function setSide(float $side)
    {
        $this->setWidth($side);
        $this->setLength($side);
    }
    
    // public function setWidth(float $side)
    // {
    //     $this->width = $side;
    // }

    // public function setLength(float $side)
    // {
    //     $this->length = $side;
    // }

    public function __toString()
    {
        return "Square[Rectangle[Shape[color=".$this->getColor().",filled=".$this->isFilled()
        ."],width=".$this->getWidth().",length=".$this->getLength()."]]";
    }
}