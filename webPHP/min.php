<?php
$arr=[1,5,7,9,3,8];
// $min=[];
// for ($i=0; $i <count($arr); $i++){ 
//     if($arr[$i]<$min){
//         $min=$arr[$i];
//     }
// }echo $min;
function ham($arr){
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++){
        $sum +=$arr[$i];
    }
    return $sum;
}
echo  ham($arr);