<?php 

function even($start, $end){

     $i = $start;
     while($i <= $end) {
        if($i % 2 == 0) {
        echo $i." ";
        }
     }
}

$start = 1;
$end = 10;

echo "The even number between $start and $end is: ";
even($start, $end);

?>