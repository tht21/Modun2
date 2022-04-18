<?php
class Point2D
{
    private float $x;
    private float $y;
    public function __construct($x,  $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x)
    {
        $this->x = $x;
    }

    public function getX()
    {
        return $this->x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x, $y)
    {
        $this->__construct($x,  $y);
    }
    public function getXY(): array
    {
        return array($this->x . $this->y);
    }
    public function toString(): string
    {
        return $this->x .  $this->y;
    }
}
class Point3D extends Point2D
{
    private float $z;
    public function __construct($x, $y, $z)
    {
        parent::__construct($x,  $y);
        $this->z = $z;
    }
    public function setZ($z)
    {
        $this->z = $z;
    }
    public function getZ()
    {
        return $this->z;
    }
    public function setXYZ($x, $y, $z)
    {
        $this->__construct($x, $y, $z);
    }
    public function getXYZ(): array
    {
        return array($this->getX(), $this->getY(), $this->z);
    }
    public function toString(): string
    {
        return $this->z;
    }
}
$point = new Point3D(1.5, 2, 5.3);
print_r("<pre>");
print_r($point->getXYZ());

echo $point->toString();
