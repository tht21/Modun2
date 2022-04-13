<?php
class QuadraticEquation
{
    private float $a;
    private float $b;
    private float $c;
    
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function _getA()
    {
        return $this->a;
    }
    public function   _getB()
    {
        return $this->b;
    }
    public function getC()
    {
        return $this->c;
    }
    public function getDiscriminant()
    {
        $delta = ($this->b * $this->b) - (4 * $this->a * $this->c);
        return $delta;
    }
    public function getRoot1()
    {
        $delta = $this->getDiscriminant();
        $root1 = ((- $this->b) + sqrt($delta)) / (2 * $this->a);
        return $root1;
    }
    public function getRoot2()
    {
        $delta = $this->getDiscriminant();
        $root2 = ((- $this->b) - sqrt($delta)) / (2 * $this->a);
        return $root2;
    }
    public function kq(){
        $delta = $this->getDiscriminant();
        $x1=$this->getRoot1();
        $x2=$this->getRoot2();
        if($delta>=0){
            return "nghiem1      ".$x1."<br>"."nghiem2      ".$x2;
        }if($delta==0){
            return"phuong trinh 1 nghiem". $x1=$x2;
        }else{
            return "phuong trinh vo nghiem";
        }
    }
}
