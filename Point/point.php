<?php
class Point2D
{
    private float $x;
    private float $y;

    public function __construct($x = null, $y = null)
    {
        if ($x != null && $y != null) {
            $this->x = $x;
            $this->y = $y;
        }
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
        return "(".$this->x.", ".$this->y.")";
    }
}

class Point3D extends Point2D
{
    private float $z;

    public function __construct($x = null, $y = null, $z = null)
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
