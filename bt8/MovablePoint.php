<?php
namespace bt8;
require "Movable.php";

class MovablePoint implements Movable
{
    protected $x;
    protected $y;
    protected $xSpeed;
    protected $ySpeed;

    public function __construct(int $x = 0, int $y = 0, int $xSpeed = 0, int $ySpeed = 0)
    {
        $this->x = $x;
        $this->y = $y;
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }

    public function __toString()
    {
        return "(".$this->x.", ".$this->y.") speed=(".$this->xSpeed.", ".$this->ySpeed.")";
    }

    public function moveUp()
    {
        $this->y -= $this->ySpeed;
    }

    public function moveDown()
    {
        $this->y += $this->ySpeed;
    }

    public function moveLeft() 
    {
        $this->x -= $this->xSpeed;
    }
    
    public function moveRight()
    {
        $this->x += $this->xSpeed;
    }
}