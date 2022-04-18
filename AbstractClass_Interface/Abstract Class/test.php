<?php
// abstract class Dongvat
// {
//     public  int $chan = 4;
//     //khong dc viet body o trong
//     //dinh nghia cho no
//     abstract  function  run($chan);
// }
// class cho extends Dongvat
// {
//     //override lai neu khong loi ne
//     //param phai giong
//     //dinh nghia run nhu the nao
//     public function  run($chan){
// echo "chay 4 chan";
//     }
// }
// class vit extends Dongvat{
//     public function  run($chan){
//         echo "chay 2 chan";
//             }
// }
// $cho = new cho();
// $vit = new vit();
// $cho->run($chan);
// $vit->run($chan);
//ban thiet ke dong vat 
interface Animal{
    function run();
    function  sleep();
}
class Cho implements Animal{
    public function run(){

    }
    public function sleep(){

    }
}
//abstract nhu ban thiet ke class cha cho class con 
// mo ta dem cac thuoc tinh  phg thuc
//interface ban thiet ke dinh nghia phg  thuc hoat dong cua lop cha
//