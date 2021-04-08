<?php
include_once('Point2D.php');

class Point3D extends Point2D
{
    public float $z;
    public $XYZ = [];

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getz()
    {
        return $this->z;
    }

    public function setXYZ($x, $y, $z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
//        array_push($this->XYZ, $this->x, $this->y, $this->z);
        return [$this->x, $this->y, $this->z];

    }

    public function toString()
    {
        return "x= " . $this->x . " y= " . $this->y . " z= " . $this->z;
    }
}
