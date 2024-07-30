<?php
namespace bt8;
require "Movable.php";

class MovableCircle implements Movable
{
    private int $radius;
    private $center;

    public function __construct(int $x, int $y, int $xSpeed, int $ySpeed, int $radius)
    {
        $this->center = new MovablePoint($x, $y, $xSpeed, $ySpeed);
        $this->radius = $radius;
    }

    public function __toString()
    {
        return $this->center.",radius=".$this->radius;
    }

    public function moveUp()
    {
        $this->center->moveUp();
    }

    public function moveDown()
    {
        $this->center->moveDown();
    }

    public function moveLeft()
    {
        $this->center->moveLeft();
    }

    public function moveRight()
    {
        $this->center->moveRight();
    }
}