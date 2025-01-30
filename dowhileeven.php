<?php 

function even() {

    $start = 1;
    $end = 10;

    echo "The even number between $start and $end is: ";

    while($start <= $end) {
        if($start % 2 == 0) {
            echo $start." ";
        }
    }
}

even();

?>