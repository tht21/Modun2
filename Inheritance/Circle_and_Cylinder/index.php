<?php
  include_once "../Circle_and_Cylinder/Circle.php";
  include_once "../Circle_and_Cylinder/Cylinder.php";
   $cylinder= new Cylinder();
   $cylinder ->setRadius(2);
   $cylinder ->setColor("yelow");
   $cylinder ->setHeight(5);
   echo $cylinder->getRadius(). "<br>"; 
   echo $cylinder->Area()."<br>";
   echo $cylinder->Area1()."<br>";
   echo $cylinder->toString();