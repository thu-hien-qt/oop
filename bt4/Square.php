<?php
namespace bt4;
require "Rectangle.php";

class Square extends Rectangle
{
    public function __construct(float $side = 1, $color, bool $filled)
    {
        parent::__construct($side, $side, $color, $filled);
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
    
    public function __toString()
    {
        return "Square[Rectangle[Shape[color=".$this->getColor().",filled=".$this->isFilled()
        ."],width=".$this->getWidth().",length=".$this->getLength()."]]";
    }
}