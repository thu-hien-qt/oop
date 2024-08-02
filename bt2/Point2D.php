<?php

namespace bt2;

class Point2D
{
    private float $x;
    private float $y;

    public function __construct($x = 0, $y = 0)
    {

        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX(float $x)
    {
        $this->x = $x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setY(float $y)
    {
        $this->y = $y;
    }

    public function setXY(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getXY()
    {
        $result = [$this->x, $this->y];
        return $result;
    }

    public function __toString()
    {
        return "(" . $this->x . ", " . $this->y . ")";
    }
}
