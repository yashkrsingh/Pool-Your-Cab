<?php
$w = 0;
while($w<=7){
$date = date('Y-m-d', strtotime("today + $w day"));
echo $date.'<br>';
$w++;
}

?>