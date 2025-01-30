<?php 

function odd(){

    $start = 1;
    $end = 10;

    echo "the number between $start and $end is: ";

    while($start <= $end) {
        if(($start % 2)!= 0) {
            echo $start." ";
        }
        $start++;
    }
}

odd();

?>