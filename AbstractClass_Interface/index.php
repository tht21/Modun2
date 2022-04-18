<?php
// abstract class   XeHoiNuoc{
//     public abstract  function drink();
// }
// abstract class Car extends XeHoiNuoc
// {
//     public abstract  function move();
//     public abstract function stop();
   
// }

// class Vinfast extends Car
// {
//     public  function move()
//     {
//         echo "move <br>"."<br>";
//     }
//     public function stop()
//     {
//         echo "stop"."<br>";
//     }
//     public function drink(){
//         echo "drink";
//     }
// }
// $Vinfast = new Vinfast();
// $Vinfast->move();
// $Vinfast->stop();
// $Vinfast->drink();
interface Bird {
    const ST=1;
   function fly();
}
interface Fish {
    function swim();
} 
abstract class Car{
    public abstract  function move();
}
class Vinfast extends Car implements Bird,Fish{
    public  function fly(){
         echo "fly"."<br>";
    }
    public function swim(){
        echo "swim"."<br>";
    }
    public   function move(){
       echo "move"."<br>";
    }
}

$vinfast =new Vinfast();
$vinfast->fly();
$vinfast->swim();
$vinfast->move();
$vinfast->ST;

