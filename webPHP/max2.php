<?php
$array=[
    [1,5,8,9],
    [1,5,8,7]
];
$max = $array[0][0];
for ($i= 0; $i <count($array); $i++){
    for ($j= 0; $j < count($array); $j++){
        if ($array[$i][$j]>$max){
            $max=$array[$i][$j];
        }
    } 
}
echo $max;