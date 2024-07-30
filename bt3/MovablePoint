<?php
namespace bt3;
require "Point.php";

class MovablePoint extends Point
{
    private float $xSpeed;
    private float $ySpeed;
    public function __construct(float $x, float $y, float $xSpeed, float $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getXSpeed()
    {
        return $this->xSpeed;
    }

    public function setXSpeed(float $xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }

    public function getYSpeed()
    {
        return $this->ySpeed;
    }

    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }

    public function setSpeed(float $xSpeed, float $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function getSpeed()
    {
        return [$this->xSpeed, $this->ySpeed];
    }

    public function __toString()
    {
        $x = $this->getX();
        $y = $this->getY();
        $xs = $this->getXSpeed();
        $ys = $this->getYSpeed();
        return "($x,$y),speed=($xs,$ys)";
    }

    public function move()
    {
        $x = $this->getX() + $this->getXSpeed();
        $this->setX($x);
        $y = $this->getY() + $this->getYSpeed();
        $this->setY($y);
        return;
    }
}