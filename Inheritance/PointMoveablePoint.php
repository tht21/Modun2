<?php
class Point
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
        $this->x = $x;
        $this->y = $y;
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
class MoveablePoint extends Point
{
    private float $xSpeed;
    private float $ySpeed;
    public function __construct($x,  $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x,  $y);
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
    public function setYSpeed(float $ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getYSpeed(){
        return $this->ySpeed;
    }
    public function getSpeed(): array
    {
        return array($this->getX(), $this->getY(),$this->xSpeed,$this->ySpeed);
    }
    // public function move():MoveablePoint
    // {

    // }
    public function toString(): string
    {
        return $this->xSpeed.$this->ySpeed;
    }
}
$m= new MoveablePoint(1.5,2,5.3,8);
echo $m->toString();
echo "<pre>";
print_r($m->getSpeed());

