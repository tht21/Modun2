<?php
// abstract class DongVat{

//   abstract public function run($chan);
// }
// class Dog extends DongVat{
//     public function run($chan){
//         echo 'chan'.$chan;
//     }
// }
// $dog = new Dog();
// $dog->run(3);
// interface Chim{
//     const ST=1;
//     function fly();
// }
// interface Ca{
//     function Swim();
// }
//  class Dong extends DongVat implements Chim,Ca{

//    public function fly(){
//   echo 's';
//    }
//    public  function Swim(){

//    }
//    public function run($chan){

//    }
//  }
class DongVat
{
  static  public function run(){
       echo 'chay';
   }

}

$dong=new DongVat();
$dong->run();
class Animal {

    public static $name;
    
        public static function nameChange()
        {
            self::$name = "Programmer Interview";
        }
    
    }
    $animalObj = new Animal();
    $animalObj->nameChange();