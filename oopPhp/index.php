<?php
include_once "../oopPhp/rectangle.php";
include_once "../oopPhp/QuadraticEquation.php";
include_once "../oopPhp/StopWatch.php";
include_once "../oopPhp/fan.php";

$width  = 10;
$height = 20;
$rectangle = new Rectangle($width, $height);
echo $rectangle->width; // 0utput: 10
echo $rectangle->height; // 0utput: 20
echo $rectangle->getPerimeter(); // 0utput: 100
echo $rectangle->getArea(); // Output: 600
//---------------------------------------------------------------
echo "<br>================================<br>";
$quadraticEquation = new QuadraticEquation(4, -2, -6);
echo $quadraticEquation->getDiscriminant() . '<br>';
echo $quadraticEquation->getRoot1() . '<br>';
echo $quadraticEquation->getRoot2() . "<br>";
echo $quadraticEquation->kq();
//---------------------------------------------------------------
echo "<br>================================<br>";
//khởi tạo đối tượng stopwatch từ lớp StopWatch
$stopwatch = new StopWatch();
//gọi phương thức start
$stopwatch->start();
//usleep để thiết lập thời gian chờ
usleep(100000);
//gọi phương thức stop
$stopwatch->stop();
//gọi phương thức getElapseTime để trả về kết quả
$stopwatch->getElapsedTime();
echo "<br>================================<br>";
$fan =new Fan();
$fan->setOn(true);
$fan->setSpeed(Fan::SLOW);
  $fan->setRadius(5);
  $fan->setColor("yellow");
  echo $fan->toString();

