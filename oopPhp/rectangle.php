<?php
class Rectangle
{
    public int $width;
    public int $height;
    public function __construct($width,$height){
     $this->width=$width;
     $this->height=$height;
    }
    public function getArea()
    {
        return $this->width * $this->height;
    }
    public function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }
}
 