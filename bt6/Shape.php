<?php
namespace bt6;

abstract class Shape 
{
    protected $color;
    protected bool $filled;

    public function __construct($color = "red", bool $filled = true)
    {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function isFilled()
    {
        return $this->filled;
    }

    public function setFilled(bool $filled)
    {
        $this->filled = $filled;
    }

    abstract public function getArea();
    abstract public function getPerimeter();

    public function __toString()
    {
        return "Shape[color=".$this->getColor().",filled=".$this->isFilled()."]";
    }
}