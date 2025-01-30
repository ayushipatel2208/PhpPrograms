<?php 

function even($start, $end) {

    for($i=$start; $i<=$end; $i++) {
        if($i % 2 == 0){
        echo $i." ";
        }
    }
}

$start = 1;
$end = 10;

echo "The Even Number between $start and $end is: ";
even($start, $end);

?>