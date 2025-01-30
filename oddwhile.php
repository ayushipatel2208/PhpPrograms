<?php 

function odd($start, $end) {
    while ($start <= $end) {
        if (($start % 2) != 0) {
            echo $start . " ";
        }
        $start++;  // Increment $start to avoid infinite loop
    }
}

$start = 1;
$end = 10;

echo "The odd numbers between $start and $end are: ";
odd($start, $end);

?>
