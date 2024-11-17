<?php
function checkOddEven($number) {
    if ($number % 2 == 0) {
        echo "$number is an even number.\n";
    } else {
        echo "$number is an odd number.\n";
    }
}

$number = 7; 

checkOddEven($number);
?>
