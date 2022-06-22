<?php
interface Colorable {
    function howToColor();
}
interface Resizeable
{
    function resize(float $percent);
}
 class  Shape
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function show(): string
    {
        return "I am a shape. My name is $this->name";
    }
}
class Circle extends Shape implements Resizeable
{
    public int|float $radius;

    public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea(): int|float
    {
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(): int|float
    {
        return pi() * $this->radius * 2;
    }
    public function resize(float $percent){
        return  $this->radius = $this->radius * $percent;
    }
}
class Rectangle extends Shape implements Resizeable
{
    public int $width;
    public int $height;

    public function __construct(
        string $name,
        int $width,
        int $height
    ) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea(): float|int
    {
        return $this->height * $this->width;
    }

    public function calculatePerimeter(): float|int
    {
        return ($this->height + $this->width) * 2;
    }
    public function resize(float $percent)
    {
        $this->width = $this->width * $percent;
        $this->height = $this->height * $percent;
    }
}
class Square extends Rectangle implements Resizeable,Colorable 
{
    public function __construct(string $name, int $width)
    {
        parent::__construct($name, $width, $width);
        
    }
    public function resize(float $percent)
    {
        return $this->width = $this->width * $percent;
    }
    public function howToColor(){
        return  "Color all four sides..";
    }
}
class Cylinder extends Circle
{
    public int $height;

    public function __construct(
        string $name,
        int|float $radius,
        int $height
    ) {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea(): float|int
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculateVolume(): float|int
    {
        return parent::calculateArea() * $this->height;
    }
   
}

$circle = new Circle('Circle 01', 3);

$cylinder = new Cylinder('Cylinder 01', 3, 4);

$rectangle = new Rectangle('Rectangle 01', 3, 4);

$square = new Square('Square 01', 4, 4, 4);

$arrayOfShape = array($circle, $cylinder, $rectangle, $square);
echo '<b>Before resize :</b><br/>';
//value giá trị của phần tử ở vị trí $key.
foreach ($arrayOfShape as $key => $value) {
    echo $value->name . ' area:' . $value->calculateArea().'<br/>';
}
echo '<b>After resize :</b><br/>';
//Tạo giá trị ngẫu nhiên
$percent = mt_rand(1,100);
echo 'Resize size of Shape :' .($percent) . '%<br/>';
foreach ($arrayOfShape as $key => $value) {
    $value->resize($percent/100);
    echo $value->name . ' area:' . $value->calculateArea() . '<br/>';
}
echo '<b>color :</b><br/>';
foreach ($arrayOfShape as $key => $value) {
    if ($value instanceof Colorable) {
        echo  $value->name . ":" . $value->howToColor();
    }
}