<?php

class  Circle
{
    private int  $radius;
    private String $color;
    public function __construct()  {
    }
    public function setRadius($radius)
    {
        $this->radius = $radius;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getColor()
    {
        return $this->color;
    }

    public function Area()
    {
        return pi() * pow($this->radius, 2);
    }
    public function toString(){
        return $this->color.$this->radius;
    }
}
