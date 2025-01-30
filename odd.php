<?php 

function odd($start, $end) {

    for($i=$start; $i<=$end; $i++) {
        if($i % 2 !== 0){
            echo $i." ";
        }
    }
}

$start = 1;
$end = 10;

echo "The Odd number between $start and $end is: ";
odd($start, $end);

?>