
<?php
$bang_diem = array(7, 5.5, 9, 6, 7.2, 7.8, 10, 5);
sort($bang_diem);

$clength = count($bang_diem);
for($x = 0; $x < $clength; $x++) {
echo $bang_diem[$x];
echo " ,";}
?>