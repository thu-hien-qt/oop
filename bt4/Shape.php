<?php
namespace bt4;

class Shape
{
    private $color;
    private bool $filled;

    public function __construct($color = "red", bool $filled = true)
    {
        $this->color = $color;
        $this->filled = $filled;
    }

    public function  getColor()
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
}