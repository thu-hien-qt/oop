<?php
namespace bt2;
require "Point2D.php";

class Point3D extends Point2D
{
    private float $z;

    public function __construct($x = 0, $y = 0, $z = 0)
    {
        parent::__construct($x, $y);
        if ($z != null ) 
        {
            $this->z = $z;
        }
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ(float $z)
    {
        $this->z = $z;
    }

    public function setXYZ(float $x, float $y, float $z)
    {
        $this->setX($x);
        $this->setY($y);
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [$this->getX(), $this->getY(), $this->getZ()];
    }

    public function __toString()
    {
        $x = $this->getX();
        $y = $this->getY();
        return "($x, $y, ".$this->z.")";
    }
}
